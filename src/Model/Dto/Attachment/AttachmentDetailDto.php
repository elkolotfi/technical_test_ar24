<?php
namespace App\Model\Dto\Attachment;


class AttachmentDetailDto
{
    private $id;
    private $name;
    private $hash_sha1;
    private $file_size;
    private $human_file_size;
    private $download_url;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getHashSha1()
    {
        return $this->hash_sha1;
    }

    /**
     * @param mixed $hash_sha1
     */
    public function setHashSha1($hash_sha1): void
    {
        $this->hash_sha1 = $hash_sha1;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * @param mixed $file_size
     */
    public function setFileSize($file_size): void
    {
        $this->file_size = $file_size;
    }

    /**
     * @return mixed
     */
    public function getHumanFileSize()
    {
        return $this->human_file_size;
    }

    /**
     * @param mixed $human_file_size
     */
    public function setHumanFileSize($human_file_size): void
    {
        $this->human_file_size = $human_file_size;
    }

    /**
     * @return mixed
     */
    public function getDownloadUrl()
    {
        return $this->download_url;
    }

    /**
     * @param mixed $download_url
     */
    public function setDownloadUrl($download_url): void
    {
        $this->download_url = $download_url;
    }
}