
<?php	
	require 'person.php';
	require 'address.php';
	$Person = new Person;
	$Address = new Address;
	$Person->firstName = "Roshan";
	$Person->lastName = "Manandhar";
	
	$Address->street1 ="Holly";
	$Address->street2 = "Lane";
	$Address->city = "Mankato";
	$Address->state = "MN";
	$Address->zipCode = "56001";
	
	echo $Person->firstName.'<br/>';
	echo $Person->lastName.'<br/>';
	echo $Address->street1.'<br/>';
	echo $Address->street2.'<br/>';
	echo $Address->city.'<br/>';
	echo $Address->state.'<br/>';
	echo $Address->zipCode.'<br/>';
	
?>