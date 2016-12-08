<?php

/**
 * Created by PhpStorm.
 * User: root
 * Set和Get魔术方法使用
 */
class Person
{
    private $userName;
    private $age;

    public function setAge($age){
      //  $this->age = 16;
      //  $this->age == $age;
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function __set($key,$vule){
        $this->userName = $vule;
    }

    public function __get($key){
        return $this->userName;
    }

}


$p = new Person();
$p->setAge(16);
echo $p->getAge();

echo '<hr/>';

$p-> __set('userName','Hoilam');
echo $p-> __get('userName');








