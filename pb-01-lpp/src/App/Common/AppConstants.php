<?php


namespace App\Common;

final class AppConstants
{
    const COLLECTION_NAME = 'winter';
    const JSON_FILE_NAME = '1315475.json';

    public function __construct()
    {
        if (!defined('BASE_PATH')) define('BASE_PATH', dirname(__DIR__));
    }
}