<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    /**
     * @param null $name
     * @param array $data
     * @param string $dataName
     *
     * @test
     * @doesNotPerformAssertions
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        if (!defined('BASE_PATH')) define('BASE_PATH', dirname(__DIR__) . '/App/');
    }
}