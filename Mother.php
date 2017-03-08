<?php

/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/8
 * Time: 下午9:39
 */
class Mother
{
    protected function getEyesCount()
    {
        return 2;
    }
}

class Child extends Mother{
    public function getEyes()
    {
        return $this->getEyesCount();
    }
}

$child = new Child();
var_dump($child->getEyes());