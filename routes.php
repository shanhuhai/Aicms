<?php
/**
 * User: shanhuhai
 * Date: 2017/7/27 18:12
 * Mail: 441358019@qq.com
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function(){
    echo "success";
});

Macaw::get('', 'App\Controller\HomeController@index');

Macaw::get('(:all)', function($fu){
    echo '404<br>';
});

Macaw::dispatch();