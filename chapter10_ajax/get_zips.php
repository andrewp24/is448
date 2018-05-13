<?php
// Fill up array with names

$arrayofzips = array(
	"md" => array(21043,21044,21045,21046),	
	"de" => array(19076,19073,19072,19071),
    "ny" => array(11011,11012,11013,11014)
    );
	


//get the 'type' parameter from URL
$state=$_GET["type"];
//echo $state;

$zips="";
foreach ($arrayofzips as $key => $value)
{
	if($key == $state){
		foreach ($value as $element)
		{
			if($zips == ""){
				$zips = $element;
			}
			else{
				$zips = $zips . "<br />" . $element;
			}
		}
	}
}
echo $zips;


?>