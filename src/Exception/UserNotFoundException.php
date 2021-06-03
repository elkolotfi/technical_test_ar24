<?php
namespace App\Exception;


use Symfony\Component\HttpKernel\Exception\HttpException;

class UserNotFoundException extends HttpException
{
    public function __construct(string $email, int $statusCode = 404, ?string $message = '', \Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        $message = "No user with email: $email.$message";
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}