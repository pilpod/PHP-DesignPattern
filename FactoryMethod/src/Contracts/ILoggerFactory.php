<?php 

namespace App\Contracts;

interface ILoggerFactory {

    public function createLogger() : ILogger;

}

?>