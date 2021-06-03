<?php
namespace App\Exception;


use Symfony\Component\HttpKernel\Exception\HttpException;

class UserAlreadyExistException extends HttpException
{
    public function __construct(string $email, int $statusCode = 404, ?string $message = '', \Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        $message = "A user already exists with email: $email.$message";
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}