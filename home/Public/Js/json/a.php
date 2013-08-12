<?php

echo "数组转换";echo "<br />";
$arr1 = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
echo json_encode($arr1);


echo "<br /><br /><br />";

echo "对象转换";echo "<br />";
	$obj->aid=1;
	$obj->body='another post';
	$obj->approved=true;
	$obj->fav=1;
	$obj->status=null;
	echo json_encode($obj);

echo "<br /><br /><br />";

echo "索引数组";echo "<br />";
$arr2 = Array('one', 'two', 'three');
echo json_encode($arr2);

echo "<br /><br /><br />";

echo "关联数组";echo "<br />";
$arr3 = Array('1'=>'one', '2'=>'two', '3'=>'three');
echo json_encode($arr3);


echo "<br /><br /><br />";

echo "将索引数组强制转化成对象";echo "<br />";
$arr4 = Array('one', 'two', 'three');
echo json_encode( (object)$arr4);
echo "<br />";
echo json_encode ( $arr4, JSON_FORCE_OBJECT );


echo "<br /><br /><br />";

echo "将json文本转换为相应的PHP数据结构";echo "<br />";
$json = '{"foo":12345,"approved":true,"fav":"1","status":"null"}';
$obj = json_decode($json);
print $obj->{'foo'};
echo "<br />";
print $obj->{'approved'};
echo "<br />";
print $obj->{'fav'};
echo "<br />";
print $obj->{'status'};
echo "<br />";
var_dump($obj);

echo "<br /><br /><br />";

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
echo "<br /><br /><br />";
var_dump(json_decode($json ,true));
echo "<br /><br /><br />";
echo "<br /><br /><br />";


$arr5 = array(  
    'name' => '陈毅鑫',  
    'nick' => '深空',  
    'contact' => array(  
        'email' => 'shenkong at qq dot com',  
        'info' => 'http://www.chinaz.com',  
    )  
);  
$json_string = json_encode($arr5);  
$objqq = json_decode($json_string);
$arr6 = (array) $objqq;  
print_r($arr6);


echo "<br /><br /><br />";

$ary = '{

	"info":"\u7528\u6237\u540d\u5df2\u6ce8\u518c",

	"data":"",

	"status":10008

}';

$objqq = json_decode($ary);

print_r($objqq);


?>


