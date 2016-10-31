<?php   
    header("Content-type:text/html;charset=utf-8");

    define("APP_ID","20160228000013885"); //替换为您的APPID
    define("SEC_KEY","wNc4kkhufpHWJQ1AGmdP");//替换为您的密钥
	// http://api.map.baidu.com/telematics/v3/weather?location=北京&output=json&ak=yourkey
	// require 'server.php';
	define("CURL_TIMEOUT",10); 
    define("URL","http://api.fanyi.baidu.com/api/trans/vip/translate"); 
    require_once('baidu_transapi.php');
    
//    var_dump(translate('apple','en','zh'));
    $arr = translate('apple','en','zh');
    echo $arr['trans_result'][0]['dst'];

    class bd{
        public function __construct(){
            $arr = translate('apple','en','zh');
            echo $arr['trans_result'][0]['dst'];
        }
    }
    $obj = new bd();