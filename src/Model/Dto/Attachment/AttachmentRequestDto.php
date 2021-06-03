<?php
namespace App\Model\Dto\Attachment;

use App\Exception\MissingArgumentException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Part\DataPart;

class AttachmentRequestDto
{
    private $file;
    private $file_name;
    private $id_user;

    public function toArray() {
        $arr = [
          'file' => DataPart::fromPath($this->file),
          'id_user' => $this->id_user
        ];
        if (!empty($this->file_name))  $arr['file_name'] = $this->file_name;
        return $arr;
    }

    public function setRequest(Request $request) {
        if (empty($request->get('user')))     throw new MissingArgumentException('user');
        if(!$request->files->get('file') instanceof UploadedFile)   throw new MissingArgumentException('file');

        $this->setIdUser($request->get('user'));
        $this->setFile($request->files->get('file')->getPathname());

        if (!empty($request->get('file_name'))) $this->setFileName($request->get('file_name'));
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * @param mixed $file_name
     */
    public function setFileName($file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }


}