<?php


/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/11
 * Time: 下午11:20
 */

namespace Laravel;

class Business{
    protected $staff;

    /**
     * Business constructor.
     */
    public function __construct(Staff $staff)
    {
        $this->staff=$staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }
}