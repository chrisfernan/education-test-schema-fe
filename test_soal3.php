<?php
	$i=5;
    $j=5;

	for($a=$i;$a>0;$a--){
	for($b=$i;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}

	for($c=$j;$c>0;$c--){
	for($d=1; $d<=$a; $d++){
		echo " &nbsp";
	}
	for($c1=$j;$c1>=$c;$c1--){
		echo"*";
	}
	echo"<br>";
	}
?>