<?php

abstract class Vehicle{
    protected $brand;
    protected $model;
    protected $releaseYear;
    protected $color;
    protected $seatsNumber;

    public function __construct($brand, $model, $releaseYear, $color, $seatsNumber){
        $this->brand = $brand;
        $this->model = $model;
        $this->releaseYear = $releaseYear;
        $this->color = $color;
        $this->seatsNumber = $seatsNumber;
    }

    public function isOld()
    {
        if ($this->releaseYear < 2018 and $this->seatsNumber > 2) {
            return "Your car is too old. Lets find a new one! \n";
        } elseif ($this->releaseYear >= 2019 and $this->seatsNumber > 2) {
            return "Wow, nice car! \n";
        } elseif ($this->seatsNumber <= 2 and $this->releaseYear < 2018) {
            return "That's  an old moto. Go get a new one \n";
        } elseif ($this->releaseYear >= 2019 and $this->seatsNumber <= 2) {
            return "Cool motorcycle! \n";
        }
    }
    public function vehicleInfo(){
        return "This is " . $this->brand . ", model " . $this->model . ". In " . $this->color . " color, released in " . $this->releaseYear . " year. Max number of passengers is " . $this->seatsNumber . ".\n";
    }
    abstract public function parkingAssistSignal();
}

class Auto extends Vehicle{
    protected $type;

    public function __construct($brand, $model, $releaseYear, $color, $seatsNumber, $type){
        parent::__construct($brand, $model, $releaseYear, $color, $seatsNumber);
        $this->type = $type;
    }

    public function parkingAssistSignal(){
        return "Pi-Pi-Pi-Pi \n";
    }

}

$car = new Auto("Skoda", "Rapid", 2012, "silver", 4, "Estate");
echo $car->vehicleInfo();
echo $car->isOld();
echo $car->parkingAssistSignal();

class Motorcycle extends Vehicle {
    protected $engineCapacity;
    public function __construct($brand, $model, $releaseYear, $color, $seatsNumber, $engineCapacity){
        parent::__construct($brand, $model, $releaseYear, $color, $seatsNumber);
        $this->engineCapacity = $engineCapacity;
    }
    public function parkingAssistSignal(){
        return "*CRASH!*\n";
    }
}

$moto = new Motorcycle("Honda", "GL1800 Gold Wing", 2020, "white", 2, 126);
echo $moto->vehicleInfo();
echo $moto->isOld();
echo $moto->parkingAssistSignal();