<?php 

namespace App\Contracts;

use App\Models\Cars\FamilyCar;
use App\Models\Cars\SportCar;

interface IAbstractFactory {

    public function createSportCar() : SportCar;
    public function createFamilyCar() : FamilyCar;

}

?>