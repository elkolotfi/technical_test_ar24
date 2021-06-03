<?php
namespace App\Model\Dto\User;

use App\Model\Dto\ResponseDto;

class UserResponseWrapper extends ResponseDto
{
    /**
     * @return mixed
     */
    public function getResult(): UserResponseDto
    {
        return $this->result;
    }
}