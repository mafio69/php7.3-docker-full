<?php

namespace App\Controller;

use App\Model\Json;

class Start
{
    public function showItems()
    {
        $model = new Json();

        return $model->getJson();
    }


}