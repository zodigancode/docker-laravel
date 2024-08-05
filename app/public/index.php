<?php 

$fd = fopen("robo-subs.txt", 'a+') or die("не удалось создать файл");
$str = print_r(array("mem_id"=>1,"amount"=> 5, "date"=> date('Y-m-d H:i:s')),1);
fwrite($fd, $str);
fclose($fd);