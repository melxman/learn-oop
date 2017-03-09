<?php

/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/8
 * Time: 下午9:17
 */
class LightSwitch
{
    public function on()
    {
        $this->connect();
    }

    public function off()
    {
        
    }

    private function connect()
    {
        var_dump('connect');
    }
}

 $light = new LightSwitch();
 $light->on();