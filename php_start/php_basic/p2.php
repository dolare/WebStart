<?php
	
	$arr = array(1,2,6,4,5,0);
	
	print_r($arr);
	
	foreach($arr as $id => $v){
		echo  $arr;
	}
	
	echo count($arr);
	echo "\n";
	
	rsort($arr);
	print_r($arr);
	echo array_sum($arr);
	
	
	$arr1 = scandir("c:/");
	
	foreach($arr1 as $v){
		if(is_dir("c:/".$v)){
			echo $v."<br>";
		}
	}
	
	
	$f = @fopen("num.txt","r+");
	
	$sum = fgets($f);
	fclose($f);
	
	$f = fopen("num.txt","w+");
	//$num = $num + 1;
	echo $num;
	fwrite($f,$num);
	fclose($f);
	
	
	
	echo "<img src= 'img/".$num.".jpg'>";
	
?>