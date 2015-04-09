<?php 
// Opening the text file and reading the file;
$arr = fopen("index.txt", "r");

//Creating array;
$array_all = array();
$array_string= array();
$array_int = array();

//Inserting the Value in the Array;
while (!feof($arr)) {
	$array_all[] = fgets($arr);
}

# Changing string values to integer,
$array_all[0]=(int)$array_all[0];
$array_all[2]=(int)$array_all[2];
$array_all[4]=(int)$array_all[4];
$array_all[7]=(int)$array_all[7];
$array_all[9]=(int)$array_all[9];


# Using for loop to print the content and spread string and integer,
$length = count($array_all);
for ($i = 0; $i < $length; $i++){
	echo "The content into an array called @array_all are:   ". $array_all[$i]."<br/>";
		if(is_int($array_all[$i])){
			array_push($array_int,$array_all[$i]);
		}
		else{
			array_push($array_string,$array_all[$i]);
		}	
}

echo("<br/>");
// Sorting both integer and string array in descending order;
rsort($array_int);
rsort($array_string);

echo("<br/>");
//Print the result of integer in the array using for loop;
$length = count($array_int);
for ($i = 0; $i < $length; $i++){
	echo "The content into an array called @array_int are:   ". $array_int[$i]."<br/>";
}

echo("<br/>");
//Print the result of string in the array using for loop;
$length = count($array_string);
for ($i = 0; $i < $length; $i++){
	echo "The content into an array called @array_string are:   ". $array_string[$i]."<br/>";
}

?>
