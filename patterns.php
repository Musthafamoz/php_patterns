<?php
// Enter your code here, enjoy!

function star($k){
	
	for($i = 0;$i < $k;$i++){
		
		for ($j = 0;$j <= $i; $j++){
			
			echo "* ";
			
		}
		
		echo "\n";
		
	}
	
}

$k = 5;
star($k);

// Reverse


function star2($p){
	for($i = 1; $i <= $p; $i++){
		for($j = 1; $j <= $p; $j++){
			if($j<=($p-$i)){
				echo " "." ";
			} else {
				echo "* ";
			}
		}
		echo PHP_EOL;
	}
}

$p = 5;
star2($p);



//triangle

function triangle($d){
	
	$a = 2 * $d - 2;
	
	for($i = 0; $i < $d; $i++){
		
		for($j = 0; $j < $a; $j++)
			
			echo " ";
			
			$a = $a - 1;
			
		for($j = 1; $j <= $i; $j++){
		
			echo "* ";
					
		}
		
		echo "\n";
		
	}
}

$d = 10;

triangle($d);

//new triangle

function triangle_pattern($len){
	
	$string = "*";
	$pyramid_str = "";
	$mid_point = ceil($len/2);
	
	for($i = 1; $i <= $mid_point; $i++){
		for($j = 1; $j <= $i; ++$j) {
		    $pyramid_str .= $string." ";
	    }
	    $pyramid_str .= "\r\n";
	}
	
	for($i = $mid_point; $i >= 1; $i--){
		for($j = 1;$j < $i; ++$j){
			$pyramid_str .= $string." ";
		}
		$pyramid_str .= "\r\n";
	}
	
	return $pyramid_str;
}

echo triangle_pattern(9);



//numberpatern

function numpat($c){
	$num = 1;
	
	for($i = 0; $i < $c; $i++){
		for($j = 0; $j <= $i; $j++){
			echo $num." ";
		}
		
		$num = $num + 1;
		
		echo "\n";
	}
}

$c = 5;

numpat($c);


function numpay($m){
	
	$numb = 1;
	
	for($i = 0; $i < $m; $i++){
		
		for($j = 0; $j <= $i; $j++){
			
			echo $numb." ";
		
		    $numb += 1;
		}
		
		echo "\n";
		
	}
}	

$m = 5;

numpay($m);

//alphapat

function alphapat($al){
	
	$alf = 65;
	
	for($i = 0; $i < $al; $i++){
		
		for($j = 0; $j <= $i; $j++){
			
			$ch = chr($alf);
			
			echo $ch." ";
		
		}
		
		$alf += 1;
		
		echo "\n";
	}
}	

$al = 5;
alphapat($al);



//contalpha

function contalpha($kol){

	$mol = 65;
	
	for($i = 0; $i < $kol; $i++){
		
		for($j = 0; $j <= $i; $j++){
			
			$char = chr($mol);
			
			echo "$char"." ";
			
			$mol += 1;
			
		}
		
		echo "\n";
	
	}
	
}


$kol = 7;

contalpha($kol);