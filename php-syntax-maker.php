<?php

$file = file_get_contents('data');

$array = explode("\n", $file);

$string = null;


$mainArray = [];

foreach($array as $index => $row) {
	$temp = explode(",", $row);
	$temp[1] = str_replace("\r", "", $temp[1]);
	// $arrayTemp = [
	// 	'language_name' => $temp[0],
	// 	'language_code' => $temp[1]
	// ];

	$string .= "[" . "'name' =>  '". $temp[0] . "'," . "'code' => '". $temp[1] . "','logo' => '". $temp[1] . ".png'],";

	// array_push($mainArray, $arrayTemp);
	// echo $row;
	// $string .= "'" . $row . "', ";
}

echo $string;