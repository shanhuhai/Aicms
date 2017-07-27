<?php
/**
 * User: shanhuhai
 * Date: 2017/7/27 20:21
 * Mail: 441358019@qq.com
 */

namespace App\Controller;

use Lib\View;

class BaseController
{
    protected $view;

    public function __construct() {
        $this->view = new View([
            'tplPath'=>ROOT_PATH.'/app/view'
        ]);
    }

}