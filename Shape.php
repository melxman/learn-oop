<?php

/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/9
 * Time: 下午10:21
 */
abstract class Shape
{
    protected $color;

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color = 'blue')
    {
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    abstract public function getArea();
}

class Square extends Shape{
    protected $length=2;
    public function getArea()
    {
        return pow($this->length,2);
    }
}

class Circle extends Shape{
    protected $length=4;
    protected $height=2;
    public function getArea()
    {
        // TODO: Implement getArea() method.
        return ($this->length)*($this->height)/2;
    }
}

$square = new Circle();

var_dump($square->getArea());