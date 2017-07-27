<?php
/**
 * User: shanhuhai
 * Date: 2017/7/27 20:40
 * Mail: 441358019@qq.com
 */

namespace Lib;


class Config {

    const ConfigPath = 'config';

    public static function get($config, $key = null) {

        $configFile = ROOT_PATH. DIRECTORY_SEPARATOR .self::ConfigPath.DIRECTORY_SEPARATOR.$config.'.php';
        if(!file_exists($configFile)) {
            throw  new \UnexpectedValueException("配置{$configFile}不存在");
        }

        $config = require $configFile;

        if(!is_null($key) && !isset($config[$key])) {
            throw  new \UnexpectedValueException("{$config}[{$key}]不存在");
        }

        return is_null($key) ? $config : $config[$key];


    }
}