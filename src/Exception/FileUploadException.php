<?php
namespace App\Exception;


use Symfony\Component\HttpKernel\Exception\HttpException;

class FileUploadException extends HttpException
{
    public function __construct(int $statusCode = 404, ?string $message = '', \Throwable $previous = null, array $headers = [], ?int $code = 0)
    {
        $message = "Error while uploading file.".$message;
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}