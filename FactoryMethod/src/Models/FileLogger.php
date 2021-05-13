<?php 

namespace App\Models;

use App\Contracts\ILogger;

class FileLogger implements ILogger {

    public function __construct(private string $filePath)
    {
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }

}

?>