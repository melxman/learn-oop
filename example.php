<?php
/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/11
 * Time: 下午11:09
 */
use Laravel\Person;
use Laravel\Staff;
use Laravel\Business;



$bob = new Person('bob');
$staff = new Staff();
$laravel = new Business($staff);
$laravel->hire($bob);
var_dump($staff);