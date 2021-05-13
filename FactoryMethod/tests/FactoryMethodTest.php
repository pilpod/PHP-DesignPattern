<?php 

namespace Tests;

use App\Models\StdoutLogger;
use App\Models\StdoutLoggerFactory;
use App\Models\FileLoggerFactory;
use App\Models\FileLogger;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

class FactoryMethodTest extends TestCase {

    public function test_create_StdoutLogger()
    {
        $stdoutLoggerFactory = new StdoutLoggerFactory();
        $stdoutLogger = $stdoutLoggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $stdoutLogger);
    }

    public function test_create_FileLogger()
    {
        $fileLoggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $fileLogger = $fileLoggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $fileLogger);
    }

}

?>