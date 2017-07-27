<?php
/**
 * User: shanhuhai
 * Date: 2017/7/27 19:29
 * Mail: 441358019@qq.com
 */

namespace Lib;


class View
{
    protected $config = [
        'tplPath' => 'app/view',
    ];

    protected $data = [];

    public function __construct(array $config) {
        $this->config = array_merge($this->config, $config);
    }

    /**
     * @param array $data 要注入的数据
     */
    public function assign(array $data) {
        $this->data = array_merge($this->data, $data) ;
    }

    /**
     * @param string $tpl 模板位置
     * @param array $data 要注入的数据
     */
    public function display($tpl, array $data = []) {

        $this->assign($data);

        //注入变量
        extract($data);

        //引入模板

        $tpl =  $this->getTpl($tpl);
        if(!file_exists($tpl)) {
            throw new \UnexpectedValueException("视图{$tpl}不存在");
        }
        require $tpl;

    }

    private function getTpl($tpl) {
        return $this->config['tplPath'].'/'.$tpl.'.php';
    }
}