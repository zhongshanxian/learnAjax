<?php
header('Content-type:application/json');
//获取 回调函数名
$jsoncallback=htmlentities($_REQUEST['jsoncallback']);
//json数据
$json_data='["customername1","customername2"]';
//输出jsonp格式的数据
echo $jsoncallback."(".$json_data.")";
?>