<?php 

namespace App\Models;

use App\Contracts\ILogger;

class StdoutLogger implements ILogger {

    public function log(string $message)
    {
        echo $message;
    }

}

?>