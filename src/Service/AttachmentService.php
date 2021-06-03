<?php
/**
 * Created by PhpStorm.
 * User: elkol
 * Date: 04/06/2021
 * Time: 23:30
 */

namespace App\Service;


use App\Exception\FileUploadException;
use App\Model\Dto\Attachment\AttachmentRequestDto;
use App\Model\Dto\Attachment\AttachmentResponseDto;
use App\Model\Dto\Attachment\AttachmentResponseWrapper;
use Symfony\Component\Serializer\SerializerInterface;

class AttachmentService
{
    private $api;
    private $serializer;

    /**
     * AttachmentService constructor.
     * @param $api
     * @param $serializer
     */
    public function __construct(ApiService $api, SerializerInterface $serializer)
    {
        $this->api = $api;
        $this->serializer = $serializer;
    }


    /**
     * @param AttachmentRequestDto $requestDto
     * @return AttachmentResponseDto
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function create(AttachmentRequestDto $requestDto): AttachmentResponseDto
    {
        $response = $this->api->post('attachment', $requestDto->toArray(), AttachmentResponseWrapper::class);
        if ($response->getStatus() === 'SUCCESS') {
            return $response->getResult();
        } else {
            throw new FileUploadException();
        }
    }

}