<?php 

namespace App\Models;

use App\Contracts\ILogger;
use App\Contracts\ILoggerFactory;

class FileLoggerFactory implements ILoggerFactory {

    public function __construct(private string $filePath)
    {
    }

    public function createLogger(): ILogger
    {
        return new FileLogger($this->filePath);
    }

}

?>