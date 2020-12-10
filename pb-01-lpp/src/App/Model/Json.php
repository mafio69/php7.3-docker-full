<?php

namespace App\Model;

class Json
{
    public function getJson($fileNamePath)
    {
        $str = file_get_contents($fileNamePath);

        return json_decode($str, true);
    }
}