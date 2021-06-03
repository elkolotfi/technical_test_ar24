<?php
namespace App\Model\Dto\Attachment;


class AttachmentResponseDto
{
    private $file_id;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * @param mixed $file_id
     */
    public function setFileId($file_id): void
    {
        $this->file_id = $file_id;
    }


}