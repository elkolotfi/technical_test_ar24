<?php

namespace App\Controller;

use App\Exception\MissingArgumentException;
use App\Model\Dto\User\UserRequestDto;
use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    private $serializer;
    private $service;

    public function __construct(SerializerInterface $serializer, UserService $service)
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
    public function createUser(Request $request) {
        $userRequestDto = $this->serializer->deserialize($request->getContent(), UserRequestDto::class, 'json');

        return JsonResponse::fromJsonString($this->serializer->serialize(
                                                        $this->service->create($userRequestDto), 'json'));
    }

    /**
     * @Route("", name="get_by_email")
     * @param Request $request
     * @return Response
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getUserByEmail(Request $request): Response
    {
        $email = $request->get('email');
        if (empty($email)) throw new MissingArgumentException('email');

        return  JsonResponse::fromJsonString($this->serializer->serialize(
                                                        $this->service->get($email), 'json'));
    }
}
