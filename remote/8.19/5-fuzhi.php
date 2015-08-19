<?php
	//变量的赋值
	//传值赋值
	/*$hd=12;
	echo $hd;*/

/*	$hd=12;
	$yc13=$hd;
	echo $yc13;*/



	// 传址赋值
	/*$hd=12;
	$yc13=$hd;
	$yc13=13;
	echo $hd;*/

	$hd=13;
	$yc13=&$hd;
	$yc13=20;
	echo $hd;
?>