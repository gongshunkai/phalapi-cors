# CORS跨域扩展


## 安装和配置
修改项目下的composer.json文件，并添加：  
```
    "phalapi/cors":"dev-master"
```
在/path/to/phalapi/config/app.php文件中，配置： 
```
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
```
然后执行```composer update```。  

## 注册
在/path/to/phalapi/config/di.php文件中，注册：  
```php

$di->cors = new \PhalApi\CORS\Lite();
```