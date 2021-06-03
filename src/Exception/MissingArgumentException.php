<?php
namespace App\Exception;


use Symfony\Component\HttpKernel\Exception\HttpException;

class MissingArgumentException extends HttpException
{
    public function __construct(string $arg, int $statusCode = 404, ?string $message = '', \Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        $message = "Missing argument: $arg.$message";
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}