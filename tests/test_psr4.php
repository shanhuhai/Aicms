<?php
/**
 * Created by PhpStorm.
 * User: shanhuhai
 * Date: 2017/7/27
 * Time: 16:50
 * Description: 测试composer psr4
 */
require dirname(__DIR__).'/bootstrap.php';

echo App\Service\Demo::output();
$controller = new App\Controller\HomeController();
$controller->index();