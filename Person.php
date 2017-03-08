<?php

/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/8
 * Time: 下午8:54
 */
class Person
{
    private $name;
    private $age;
    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age<18){
            throw new Exception('not old enough!');
        }
        $this->age=$age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

    $marria = new Person('Marria');
    $marria->setAge(30);

    var_dump($marria->getAge());
