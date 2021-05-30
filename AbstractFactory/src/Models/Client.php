<?php 

namespace App\Models;

use App\Contracts\IAbstractFactory;

class Client {

    private IAbstractFactory $factory;

    public function __construct(IAbstractFactory $factory)
    {
        $this->factory = $factory;
    }

    public function buySportCar()
    {
        $vehicle = $this->factory->createSportCar();
        return $vehicle;
    }

    public function buyFamilyCar()
    {
        $vehicle = $this->factory->createFamilyCar();
        return $vehicle;
    }

}

?>