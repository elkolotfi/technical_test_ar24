<?php
namespace App\Service;

use App\Model\Dto\ResponseDto;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiService
{
    private $client;
    private $serializer;
    private $apiUrl;
    private $apiSecret;
    private $query;
    private $date;

    const API_URL = 'api_url';
    const API_TOKEN = 'api_token';
    const API_SECRET = 'api_secret';
    const HASH_ALGO = 'sha256';
    const CIPHER_ALGO = 'aes-256-cbc';

    public function __construct(SerializerInterface $serializer, HttpClientInterface $client, ContainerBagInterface $params)
    {
        $this->client = $client;
        $this->serializer = $serializer;
        $this->apiUrl = $params->get(static::API_URL);
        $this->apiSecret = $params->get(static::API_SECRET);
        $this->query = ['token' => $params->get(static::API_TOKEN)];
    }

    /**
     * @param $endpoint
     * @param $request
     * @param $class
     * @return mixed
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function get($endpoint, $request, $class): ResponseDto
    {
        $endpoint = $this->apiUrl . $endpoint;
        $response = $this->client->request('GET', $endpoint, ['query' => $this->prepareQuery($request)]);

        return $this->serializer->deserialize($response->getContent(), $class, 'json');
    }

    /**
     * @param $endpoint
     * @param $request
     * @param $class
     * @return ResponseDto
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function getDecrypt($endpoint, $request, $class): ResponseDto
    {
        $endpoint = $this->apiUrl . $endpoint;
        $response = $this->client->request('GET', $endpoint, ['query' => $this->prepareQuery($request)]);

        return $this->serializer->deserialize($this->decrypt($response->getContent()), $class, 'json');
    }

    /**
     * @param $endpoint
     * @param $request array Arguments to use as POST request BODY
     * @param $class string Class name to use for deserialize operation
     * @return ResponseDto
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function post($endpoint, $request, $class): ResponseDto
    {
        $endpoint = $this->apiUrl . $endpoint;

        $formData = new FormDataPart($this->prepareQuery($request));
        $response = $this->client->request('POST', $endpoint, [
            'headers' => $formData->getPreparedHeaders()->toArray(),
            'body' => $formData->bodyToIterable()
        ]);
        $content = $response->getContent();

        return $this->serializer->deserialize($content, $class, 'json');
    }

    private function prepareQuery($request) {
        $query = array_merge($this->query, $request);

        $this->date = new \DateTime();
        $query['date'] = $this->date->format('Y-m-d H:i:s');

        return $query;
    }

    private function decrypt($cryptedContent): string
    {
        $key = hash(static::HASH_ALGO, $this->date . $this->apiSecret);
        $iv = hash(static::HASH_ALGO, hash(static::HASH_ALGO, $this->apiSecret));

        $content = openssl_decrypt($cryptedContent, static::CIPHER_ALGO, $key, false, $iv);

        return $content !== false ? $content : '';
    }
}