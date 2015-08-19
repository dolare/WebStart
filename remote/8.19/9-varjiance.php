<?php
	header('content-type:text/html;charset=utf8');
	/*//变量未定义，或者定义之后没有赋值，都被认为是未定义，也就是说，isset为假
	// $hd='houdun';
	// $hd;
	$hd='';
	if(isset($hd)){
		echo '变量存在';
	}else{
		echo '变量不存在';
	}*/


	/*// 删除变量,定义的变量将被删除掉
	$hd='houdun';
	// unset($hd);
	if(isset($hd)){
		echo '变量存在';
	}else{
		echo '变量不存在';
	}*/



	/*// 检测常量是否存在
	define('HOME','/home');
	if(defined('HOME')){
		echo '常量存在';
	}else{
		echo '常量不存在';
	}*/

	/*echo HOME;
	define("HOME",'/home');*/
?>