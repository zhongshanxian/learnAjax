<?php
//get方法
/*
echo '这是个从PHP文件中读取的数据。';
*/

//post方法
/*
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';
echo '网站名: ' . $name;
echo "\n";
echo 'URL 地址: ' .$url;
*/

//JSONP应用
header('Content-type:application/json');
//获取回调函数名
$jsoncallback=htmlspecialchars($_REQUEST['jsoncallback']);
//json数据
$json_data='["customername1","customername2"]';
//输出jsonp格式的数据
echo $jsoncallback."(".$json_data.")";

?>