<?php
namespace App\Model\Dto\Attachment;


use App\Model\Dto\ResponseDto;

class AttachmentResponseWrapper extends ResponseDto
{
    /**
     * @return mixed
     */
    public function getResult(): AttachmentResponseDto
    {
        return $this->result;
    }
}