<?php 

namespace Tests;

use App\Models\StdoutLogger;
use App\Models\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {

    public function test_create_StdoutLogger()
    {
        $stdoutLoggerFactory = new StdoutLoggerFactory();
        $stdoutLogger = $stdoutLoggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $stdoutLogger);
    }

}

?>