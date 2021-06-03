<?php

namespace App\Controller;

use App\Model\Dto\Mail\MailRequestDto;
use App\Model\Dto\Mail\MailResponseDto;
use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/mail", name="mail_")
 */
class MailController extends AbstractController
{
    private $serializer;
    private $service;

    /**
     * MailController constructor.
     * @param SerializerInterface $serializer
     * @param MailService $service
     */
    public function __construct(SerializerInterface $serializer, MailService $service)
    {
        $this->serializer = $serializer;
        $this->service = $service;
    }

    /**
     * @Route("/read/{mailId}", name="read")
     * @param $mailId
     * @return JsonResponse
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function read($mailId) {
        return  JsonResponse::fromJsonString($this->serializer->serialize(
                                                    $this->service->read($mailId), 'json'));
    }


    /**
     * @Route("/send", name="send", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function send(Request $request): JsonResponse
    {
        $mailRequestDto = $this->serializer->deserialize($request->getContent(), MailRequestDto::class, 'json');
        return JsonResponse::fromJsonString($this->serializer->serialize(
                                                        $this->service->send($mailRequestDto), 'json'));
    }
}
