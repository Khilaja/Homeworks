<?php
class Student{
    public $firstName;
    public $familyName;
    public $age;
    public $course;

    public function __construct($name, $surname, $age, $course){
        $this->firstName = $name;
        $this->familyName = $surname;
        $this->age = $age;
        $this->course = $course;
    }
    public function setFirstName($firstName){
        $this->firstName = trim($firstName);
    }
    public function setFamilyName($familyName){
        $this->familyName = trim($familyName);
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setCourse($course)
    {
        $this->course = $course;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getFamilyName()
    {
        return $this->familyName;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getCourse()
    {
        return $this->course;
    }

   public function studentInfo(){
        return "Я студент. Меня зовут " . $this->firstName . " " . $this->familyName . ", мне " . $this->age . ". Я учусь на " . $this->course . " курсе.\n";
    }
}

$student = new Student('Таня', 'Иваненко', 32, 5);
echo $student->studentInfo();
$student->setFirstName('Иван');
$student->setFamilyName('Иванов');
$student->setAge(18);
$student->setCourse("Инженер");
echo $student->getFirstName();
echo $student->getFamilyName();
echo $student->getAge();
echo $student->getCourse();


class Auto {
    public $brand;
    public $model;
    public $color;
    public $yearRelease;

    public function __construct($brand, $model, $color, $yearRelease){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->yearRelease = $yearRelease;
    }

    public function carInfo(){
        return "This car brand is " . $this->brand . ", model " . $this->model . ". It was released in " . $this->yearRelease . " in " . $this->color . " color.\n";
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getYearRelease()
    {
        return $this->yearRelease;
    }

    public function setYearRelease($yearRelease)
    {
        $this->yearRelease = $yearRelease;
    }

}

$auto = new Auto('Chrysler', 'Pacifica','black', 2004);
echo $auto->carInfo();
$auto->setBrand('BMW');
$auto->setModel('X5');
$auto->setColor('Yellow');
$auto->setYearRelease(2022);
echo $auto->getBrand();
echo $auto->getModel();
echo $auto->getColor();
echo $auto->getYearRelease();

class Circle{
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return 3.14 * ($this->radius)**2;
    }
}
$circle = new Circle(3);
echo $circle->calculateArea();

class Human{
    protected $name;
    protected $age;
    protected $sex;

    public function __construct($name, $age, $sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function isAdult(){
        if ($this->age >= 18){
            return "\ntrue";
        } return "\nfalse";
        }
    }

$girl = new Human("Mary", 16, 'female');
echo $girl->isAdult();

$man = new Human("Alex", 34, 'male');
echo $man->isAdult();