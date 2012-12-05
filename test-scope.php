<?php 
	
	$a = 1;
	$b = 2;

	function test(){
		global $a;
		echo  $a + $GLOBALS['b'];

		// $_POST 和 $GLOBALS 为 Superglobals 不需要指明为global
		echo $_POST['name'];
	}

	test();
	// php 中 函数 只会引用局部变量 函数中引用全局变量还要申明
	// php 中 自定义全局变量$GLOBALS 数组 可以访问 

	// php 中 常见的陷阱


	// static 静态变量 可以用于计数 退出函数 不会消失

	function count_it($val = 1){
		static $a = 0;
		echo $a."<br/>";
		$a++;
		echo $val;
	};

	for ($i=0;$i<10;$i++){
		count_it();
	}

	
?>

