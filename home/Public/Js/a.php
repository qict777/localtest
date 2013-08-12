<?php


$a = '%E5%8D%83%E5%93%81';

$b = mb_convert_encoding($a, 'utf8', 'utf8, gbk, gb2312');


$keywords = urlencode(urlencode($b));


echo urlencode($keywords);


?>