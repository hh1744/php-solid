<?php
require_once 'FileInformation.php';
require_once 'ExtensionDetector.php';

class Uploader
{
    private $name;
    private $type;

    public function __construct($file)
    {
        $fileData = $_FILES[$file];
        $this->temporaryName = $fileData['tmp_name'];
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
    }

    public function uploadFile()
    {
        if (!(new ExtensionDetector())->isValidType($this->type)) {
            $this->error = 'Le fichier ' . $this->name . ' n\'est pas d\'un type valide';

            return false;
        } else {
            return true;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getExtension()
    {
        return (new FileInformation())->getExtension($this->getName());
    }

    public function resize($origin, $destination, $width, $maxHeight)
    {
        (new ImageResizer())->resize($this->getExtension(), $origin, $destination, $width, $maxHeight);
    }


}
