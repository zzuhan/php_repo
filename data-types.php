<?php 


/*
8种原始数据类型
Integer int
Float float
String
Boolean

符合类型
Array
Object

特殊类型
Null
Resource

function 算什么

unset() 撤销
count() 计算大小

*/
var arr = array(name=>'han', age=>21);
echo count(arr);
unset(arr['name']);
echo count(arr);


?>