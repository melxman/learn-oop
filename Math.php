<?php

/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/12
 * Time: 下午10:13
 */
//class Math
//{
//    public static function add(...$num)
//    {
//        return array_sum($num);
//    }
//}
//
////$math = new Math();
////var_dump($math->add(1,2,3));
//
//echo Math::add(1,2,3,4);

class Person{
    public static $age=1;

    public function haveBirthday()
    {
        self::$age ++;
    }
}

$bob = new Person();
$bob->haveBirthday();
$bob->haveBirthday();

$loh= new Person();
$loh->haveBirthday();

echo Person::$age;