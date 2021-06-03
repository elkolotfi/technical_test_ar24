<?php
namespace App\Exception;


use Symfony\Component\HttpKernel\Exception\HttpException;

class MissingEmailException extends HttpException
{
    public function __construct(int $statusCode = 400, ?string $message = '', \Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        $message = "Please specify an email address.".$message;
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}