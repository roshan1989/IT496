<?php 

// Sides given in the triangle.
$side1 = 14.8;
$side2 = 20.3;
$side3 = 25.3;
// Given Angle
$angle1 = 36;
$angle2 = 53;
$angle3 = 91;

// Using function to get the perimeter, area, sine, cosine, tangent.
Perimeter($side1,$side2,$side3);
Area($side1,$side2,$side3);
Sine($angle1);
Cosine($angle1);
Tangent($angle1);

// Creating function for Perimeter of triangle.
function Perimeter($side1,$side2,$side3){
	$perimeter1 =($side1+$side2+$side3);
	echo("Perimeter of triangle is:- ".$perimeter1."<br/>");
}
// Creating function for Area of triangle.
function Area($side1, $side2, $side3){
	$S = ($side1 + $side2 + $side3)/2;
	$S1 = sqrt($S * ($S - $side1)*($S - $side2)*($S - $side3));
	echo("Area of triangle is:- ".$S1."<br/>");
	
// Creating function for Sine of triangle.
}function Sine($angle){
	$Sine1 = sin(deg2rad($angle));
	echo ("Sine of triangle is:- ".$Sine1."<br/>");
}

// Creating function for Cosine of triangle.
function Cosine($angle){
	$Cos1 = cos(deg2rad($angle));
	echo ("Cosine of triangle is:- ".$Cos1."<br/>");
}

// Creating function for Tangent of triangle.
function Tangent($angle){
	$Tan = sin(deg2rad($angle))/cos(deg2rad($angle));
	echo ("Tangent of triangle is:- ".$Tan."<br/>");
}