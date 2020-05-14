<?php
$filename = "yaml.yml";
$file= file_get_contents($filename);

$yaml = yaml_parse($file);
print_r($yaml);
$json = json_encode($yaml);
file_put_contents('json_yaml.json',$json);