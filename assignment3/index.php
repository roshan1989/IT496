
<?php	
	require 'person.php';
	require 'address.php';
	
	$Person = new Person;
	$Name = array("firstName"=>"Roshan", "lastName"=>"Manandhar", "age"=>"26");
	foreach ($Name as $k => $v) {
		echo "My ".$k." is ".$v."</br>";
	}
	
	$address = new Address;
$Add = array('houseNumber' => '403', 'streetName' =>'holly Lane', 'city'=>'Mankato', 'state'=> 'MN','zipcode'=>'56002');
	foreach ($Add as $k => $v) {
		echo "My ".$k." is ".$v."</br>";
	}
	
?>

