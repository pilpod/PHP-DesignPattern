<?php 

namespace App\Factories;

use App\Models\Cars\FamilyCar;
use App\Models\Cars\SportCar;
use App\Contracts\IAbstractFactory;

class CarFactory implements IAbstractFactory {

    public function createSportCar() : SportCar
    {
        return new SportCar;
    }

    public function createFamilyCar() : FamilyCar
    {
        return new FamilyCar;
    }

}

?>