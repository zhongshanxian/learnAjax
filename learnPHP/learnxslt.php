<meta charset="utf-8">
<?php
//载入XML文件
$xml=new DOMDocument;
$xml->load("E:/weblearning/XML/learnxslt/learnxml.xml");

//载入XSL文件
$xsl=new DOMDocument;
$xsl->load("E:/weblearning/XML/learnxslt/learnxslt.xsl");

//设置转换
$proc=new XSLTProcessor;

//添加xsl规则
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>