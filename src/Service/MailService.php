<?php
namespace App\Service;

use App\Exception\MissingEmailException;
use App\Model\Dto\Mail\MailRequestDto;
use App\Model\Dto\Mail\MailResponseDto;
use App\Model\Dto\Mail\MailResponseWrapper;
use Symfony\Component\Serializer\SerializerInterface;

class MailService
{
    private $api;
    private $serializer;

    public function __construct(ApiService $api, SerializerInterface $serializer)
    {
        $this->api = $api;
        $this->serializer = $serializer;
    }

    /**
     * @param $mailId string Id of email to read
     * @return MailResponseDto
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function read($mailId) : MailResponseDto {
        $response = $this->api->get('mail', ['id' => $mailId], MailResponseWrapper::class);
        if ($response->getStatus() === 'SUCCESS') {
            return $response->getResult();
        } else {
            throw new MissingEmailException();
        }
    }

    /**
     * @param MailRequestDto $mailRequestDto
     * @return MailResponseDto
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function send(MailRequestDto $mailRequestDto) : MailResponseDto
    {
        $response = $this->api->post('mail', $mailRequestDto->toArray(), MailResponseWrapper::class);
        if ($response->getStatus() === 'SUCCESS') {
            return $response->getResult();
        } else {
            throw new MissingEmailException();
        }
    }
}