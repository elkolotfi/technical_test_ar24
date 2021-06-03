<?php

namespace App\Controller;

use App\Model\Dto\Attachment\AttachmentRequestDto;
use App\Service\AttachmentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/attachment", name="attachment_")
 */
class AttachmentController extends AbstractController
{
    private $serializer;
    private $service;

    public function __construct(SerializerInterface $serializer, AttachmentService $service)
    {
        $this->serializer = $serializer;
        $this->service = $service;
    }

    /**
     * @Route("", name="create", methods={"POST"})
     * @param Request $request
     * @return JsonResponse
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function createAttachment(Request $request): JsonResponse {
        $attachmentRequest = new AttachmentRequestDto();
        $attachmentRequest->setRequest($request);

        return JsonResponse::fromJsonString($this->serializer->serialize(
                                                    $this->service->create($attachmentRequest), 'json'));
    }

}
