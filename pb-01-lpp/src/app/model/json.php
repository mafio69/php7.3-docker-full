<?php

namespace App\model;

use App\common\AppConstans;

class json
{
    public function __construct()
    {
        new AppConstans();
    }

    public function getJson()
    {
        $str = file_get_contents(BASE_PATH.'/data/1315475.json');
        $data = json_decode($str);

        dump($data);
    }
}