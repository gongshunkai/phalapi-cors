<?php

return array(

    //请将以下配置拷贝到 ./Config/app.php 文件中


    'cors' => array(
        //域名白名单
        'whitelist'   => array(
            //'http://xxx.xx.xxx',
            //'http://xxx.xxx.xxx'
        ),  
        //header头
        'headers' => array(
            'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS', //支持的请求类型
            'Access-Control-Allow-Credentials' => 'true' //支持cookie
        )
    )
);
