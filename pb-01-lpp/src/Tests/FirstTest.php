<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testFirst()
    {
        $data = 'mafio';
        $this->assertTrue('mafio' == $data);
    }

    public function testSecond()
    {
        $data = 'mafio';
        $this->assertFalse('mafio_' == $data);
    }
}