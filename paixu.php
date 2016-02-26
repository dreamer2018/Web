<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dreamchasing</title>
</head>
<body>
	<?php
		function main(){
			$a[]=1;
			$a[]=9;
			$a[]=7;
			$a[]=3;
			$a[]=8;
			$a[]=4;	
			visit($a);
			$a=maopao($a);
			visit($a);
			$a=xuanze($a);
			visit($a);
		}
		function visit($a){
			for($i=0;$i<count($a);$i++){
				print $a[$i];
				print "&nbsp;&nbsp;";
			}
			print "<br />";
		}
		function maopao($a){
			for($i=0;$i<count($a);$i++){
				for($j=0;$j<count($a)-$i-1;$j++){
					if($a[$j]>$a[$j+1]){
						$tmp=$a[$j];
						$a[$j]=$a[$j+1];
						$a[$j+1]=$tmp;
					}
				}
			}
			return $a;
		}
		function xuanze($a){
			for($i=0;$i<count($a);$i++){
				$tmp=$i;
				for($j=$i;$j<count($a);$j++){
					if($a[$tmp]<$a[$j]){
						$tmp=$j;
					}
				}
				$swap=$a[$i];
				$a[$i]=$a[$tmp];
				$a[$tmp]=$swap;
			}
			return $a;
		}
		main();
	?>
</body>
</html>