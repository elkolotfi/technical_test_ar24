<?php
namespace App\Model\Dto\Mail;

use App\Model\Dto\ResponseDto;

class MailResponseWrapper extends ResponseDto
{
    /**
     * @return mixed
     */
    public function getResult(): MailResponseDto
    {
        return $this->result;
    }
}