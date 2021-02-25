<?php
/*
作者:D.Young
主页：https://blog.5iux.cn/
github：https://github.com/5iux/sou
日期：2020-11-23
版权所有，请勿删除

使用前请注意务必设置好白名单
*/
header('Content-Type:application/json; charset=utf-8');
//防跨域调用
$allow_origin = array(
    //域名白名单
    'https://pi.dwxh.xyz',
    'http://localhost:81'
);
header('Access-Control-Allow-Origin:' . implode(',',$allow_origin));
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

$jsonlist = array();
for ($i = 0; $i < 5; $i++) {
    $jsonResult = json_decode(file_get_contents("https://api.dongmanxingkong.com/suijitupian/acg/1080p/index.php?return=json"))->imgurl;
    $jsonlist [] =  $jsonResult;
}
echo $_GET["callback"] . json_encode($jsonlist);
?>