<?php 

namespace Tests\Unit;

use App\Contracts\IAbstractFactory;
use PHPUnit\Framework\TestCase;

use App\Models\Client;
use App\Factories\CarFactory;
use App\Models\Cars\SportCar;
use App\Models\Cars\FamilyCar;

class AbstractFactoryTest extends TestCase {

    public function test_client_buy_a_sportCar()
    {
        $factory = new CarFactory();
        $client = new Client($factory);

        $sportCar = $client->buySportCar();

        $this->assertInstanceOf(SportCar::class, $sportCar);
    }

    public function test_client_buy_a_familyCar()
    {
        $factory = new CarFactory();
        $client = new Client($factory);

        $familyCar = $client->buyFamilyCar();

        $this->assertInstanceOf(FamilyCar::class, $familyCar);
    }

}

?>