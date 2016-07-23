<?php

namespace App\Services;

class UploadDocument
{
    protected $file;

    protected $filename;

    public function handle($file)
    {
        $this->setFile($file)
            ->setFilename()
            ->upload()
            ->getFilename();
    }

    private function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    private function setFilename()
    {
        $this->filename = time() . '_'. str_random(10) . '_' . str_replace(' ', '_', $this->file->getClientOriginalName());

        return $this;
    }

    private function upload()
    {
        $this->file->move('tweets_img', $this->filename);

        return $this;
    }

    private function getFilename()
    {
        return $this->filename;
    }
}
