<?php
/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/11
 * Time: 下午11:20
 */
namespace Laravel;

class Staff{
    protected $members=[];

    public function add(Person $person)
    {
        $this->members[]=$person;
    }
}