<?php

class ExtensionDetector
{
    const PNG_FANILY = ['PNG', 'png'];
    const JPG_FANILY = ['jpeg', 'jpg', 'JPG'];

    public function getExtension(string $type): string
    {
        if (in_array($type, self::JPG_FANILY)) {
            $type = 'jpeg';
        } elseif (in_array($type, self::PNG_FANILY)) {
            $type = 'png';
        }
        return $type;
    }

    public function isValidType(string $type): bool
    {
        return in_array($type, array_merge(self::PNG_FANILY,self::JPG_FANILY));
    }
}