<?php


$file ="try.xml";
$contentxml= file_get_contents($file);

$new = simplexml_load_string($contentxml);


$arr = json_encode($new);

$newarr = json_decode($arr,true);

print_r($newarr);

$json = json_encode($newarr);

file_put_contents('json_xml.json',$json);


?>
