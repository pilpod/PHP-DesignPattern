<?php 

namespace App\Models;

use App\Contracts\ILogger;
use App\Contracts\ILoggerFactory;

class StdoutLoggerFactory implements ILoggerFactory {

    public function createLogger(): ILogger
    {
        return new StdoutLogger();
    }

}

?>