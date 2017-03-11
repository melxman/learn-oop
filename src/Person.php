<?php



/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/11
 * Time: 下午11:20
 */

namespace Laravel;

class Person{
    protected $name;
    /**
     * Person constructor.
     */
    public function __construct($name)
    {
        $this->name= $name;
    }
}
