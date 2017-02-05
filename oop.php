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
    private $price;

    public function setPrice($price){
        $this->price=$price;
    }

    public function getPrice(){
        if($this->price==true){
            echo $this->numberFormat();
        }

    }

    public function numberFormat(){
        $number=rand(5,10);
        echo  $number;
    }

    public function showBrand(){
        echo $this->brand;
    }
    public function ShowModel(){
        echo $this->model;
    }
}



$fordTaurus=new Car;
$fordTaurus->setPrice(true);
 $fordTaurus->getPrice();

