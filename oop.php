<?php
class User
{
    public $login;
    public $password;
    public $email;
    public $rating=0;
    public $isLogged;


    public function logIN(){
        echo "You is Login";
        echo $this->isLogged=true;
    }

    public function logOut(){
        echo "You is LogOut";
        echo $this->isLogged=false;
    }

}

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;

    public function showBrand(){
        echo $this->brand;
    }
    public function ShowModel(){
        echo $this->model;
    }
}
$anton=new User;
$roma=new User;
$toyotaCorolla=new Car;
$mazda6=new Car;
$fordTaurus=new Car;

//$toyotaCorolla->driver=$anton;
//var_dump($toyotaCorolla);
print_r($anton->login().'<br>' ) ;
print_r($anton->logOut().'<br>');






//
//$a='Hello';
//$obj=(object)$a;
//var_dump($obj);
//echo $obj->scalar.'<br>';
//
//$a=['name'=>'mike','married'=> false];
//$obj=(object)$a;
//var_dump($obj);
//echo $obj->name.'<br>';
//
//$arr=['name'=>'Anton','email'=>'Antopyva87@gmail.com','message'=>'Good Day!'];
//var_dump($obj=(object)$arr);