<?php
namespace App\Service;


use App\Exception\UserAlreadyExistException;
use App\Exception\UserNotFoundException;
use App\Model\Dto\User\UserRequestDto;
use App\Model\Dto\User\UserResponseDto;
use App\Model\Dto\User\UserResponseWrapper;
use Symfony\Component\Serializer\SerializerInterface;

class UserService
{
    private $api;
    private $serializer;

    public function __construct(ApiService $api, SerializerInterface $serializer)
    {
        $this->api = $api;
        $this->serializer = $serializer;
    }

    /**
     * @param UserRequestDto $userRequestDto
     * @return UserResponseDto
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function create(UserRequestDto $userRequestDto) : UserResponseDto
    {
        $response = $this->api->post('user', $userRequestDto->toArray(), UserResponseWrapper::class);
        if ($response->getStatus() === 'SUCCESS') {
            return $response->getResult();
        } else {
            throw new UserAlreadyExistException($userRequestDto->getEmail());
        }
    }

    /**
     * @param $email
     * @return UserResponseDto Found User
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function get($email) : UserResponseDto
    {
        $response = $this->api->get('user', ['email' => $email], UserResponseWrapper::class);
        if ($response->getStatus() === 'SUCCESS') {
            return $response->getResult();
        } else {
            throw new UserNotFoundException($email);
        }
    }
}