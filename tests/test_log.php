<?php
/**
 * Created by PhpStorm.
 * User: shanhuhai
 * Date: 2017/7/27
 * Time: 16:50
 * Description: 测试日志类
 */

require dirname(__DIR__).'/bootstrap.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new \Monolog\Handler\StreamHandler(LOG_PATH.'/app.log', Monolog\Logger::WARNING));

$log->addWarning('insert a log');
$log->addError('insert a error');