<?php 
$side1 = 14.8;
$side2 = 20.3;
$side3 = 25.3;

$angle1 = 36;
$angle2 = 53;
$angle3 = 91;

perimeter($side1,$side2,$side3);
Area($side1,$side2,$side3);

function perimeter($side1,$side2,$side3){
	$perimeter1 =($side1+$side2+$side3);
	echo("perimeter = ".$perimeter1."<br/>");
}

function Area($side1, $side2, $side3){
	$S = ($side1 + $side2 + $side3)/2;
	$S1 = sqrt($S * ($S - $side1)*($S - $side2)*($S - $side3));
	echo("Area = ".$S1."<br/>");
}