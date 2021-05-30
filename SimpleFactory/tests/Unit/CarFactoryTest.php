<?php 

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Factories\SimpleFactory;
use App\Models\Car;

class CarFactoryTest extends TestCase {

    public function test_simpleFactory_create_car_instance()
    {
        $factory = new SimpleFactory();
        $car = $factory->createCar();
        $this->assertInstanceOf(Car::class, $car);
    }

    public function test_car_drive_to_some_destination()
    {
        $factory = new SimpleFactory();
        $car = $factory->createCar();
        $destination = $car->driveTo('Orlando');

        $this->assertEquals('Orlando', $destination);
    }

}

?>