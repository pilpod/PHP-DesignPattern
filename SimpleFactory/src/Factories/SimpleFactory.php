<?php 

namespace App\Factories;

use App\Models\Car;

class SimpleFactory {

    public function createCar()
    {
        return new Car();
    }

}

?>