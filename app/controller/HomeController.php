<?php
/**
 * User: shanhuhai
 * Date: 2017/7/27 18:24
 * Mail: 441358019@qq.com
 */

namespace App\Controller;

use Lib\Db\DB;
use Lib\Config;

class HomeController extends BaseController
{
    public function index()
    {
        $dbConfig = Config::get('database');
        $db = new DB($dbConfig['host'], $dbConfig['dbname'],$dbConfig['username'], $dbConfig['password']);
        $rows = $db->query('select * from users where 1');

        $this->view->display('home', [
            'title'=>'佛',
            'rows'=>$rows
        ]);
    }


}