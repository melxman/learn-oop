<?php
/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/10
 * Time: 下午8:32
 */

interface Logger{
    public function save($message );

}

class FileLogger implements Logger {
    public function save($message)
    {
        var_dump('save log into file :'.$message);
    }
}

class DatabaseLogger implements Logger {
    public function save($message)
    {
        var_dump('save log into database :'.$message);
    }
}

class UsersController{
    protected $logger;

    /**
     * UsersController constructor.
     * @param $logger
     */
    public function __construct(Logger $logger)   //依赖注入
    {
        $this->logger = $logger;
    }

    public function register()
    {
        $user='Koly';
        $this->logger->save($user);
    }
}

$controller = new UsersController(new DatabaseLogger() );   // 无缝迁移
$controller->register();