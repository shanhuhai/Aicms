<?php
/**
 * Created by PhpStorm.
 * User: shanhuhai
 * Date: 2017/7/27
 * Time: 16:50
 */

define('PUBLIC_PATH', __DIR__);
require PUBLIC_PATH.'/../bootstrap.php';

//错误处理组建
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

require PUBLIC_PATH.'/../routes.php';



