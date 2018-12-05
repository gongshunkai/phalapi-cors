<?php
namespace PhalApi\CORS;

/**
 * 2018/11/23 CORS跨域拓展 @吞吞小猴<49078111@qq.com>
 */

class Lite {

    protected $config = array(

        //域名白名单
        'whitelist' => array(),

        //header头
        'headers' => array()
    );

    protected $flag = false;

    public function __construct() {
        if(\PhalApi\DI()->config->get('app.cors'))
            $this->config = array_merge($this->config, \PhalApi\DI()->config->get('app.cors'));

        $origin = \PhalApi\DI()->request->getHeader('Origin');

        foreach ($this->config['whitelist'] as $val) {
            if($origin == $val){
                $this->flag = true;
            }
        }

        if($this->flag){

            $this->config['headers']['Access-Control-Allow-Origin'] = $origin;
            $this->config['headers']['Access-Control-Allow-Headers'] = $this->config['headers']['Access-Control-Allow-Headers'] ? $this->config['headers']['Access-Control-Allow-Headers'] : 'Content-Type';

            foreach ($this->config['headers'] as $key => $val) {
                 \PhalApi\DI()->response->addHeaders($key,$val);
                @header($key . ': ' . $val);
            }
        }
    }
}
