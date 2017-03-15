<?php
/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/15
 * Time: 下午10:49
 */

trait OwnerTrain{
    public function owner()
    {
        var_dump('xxx owner');
    } 
}

class Article{
    use OwnerTrain;
}

class Commet{
    use OwnerTrain;
}

(new Article())->owner();