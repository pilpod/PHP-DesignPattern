<?php

namespace Tests;

use App\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {

    public function test_uniqueness_of_singleton()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertEquals($firstCall, $secondCall);
    }

}