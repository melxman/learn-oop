<?php
/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/7
 * Time: 下午10:45
 */

    class Task{
        //public $description = "let's go";

        public $completed = false;
        public function __construct($description)
        {
            $this->description = $description;
        }

        public function complete()
        {
            $this->completed = true;
        }
    }


$task = new Task("let's go");
$task2 = new Task("lol");
  //  $task->complete();
    var_dump($task->description);
    var_dump($task2->description);