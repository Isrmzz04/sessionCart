<?php 

$students = [];

$students = array('buah' => 'salak', 'apel', 'mangga');

// echo $students['buah'];




print_r($students);

echo $students['buah'];


echo '<br>';
foreach ($students as $key => $value) {
	echo $key['salak'];
}

 ?>