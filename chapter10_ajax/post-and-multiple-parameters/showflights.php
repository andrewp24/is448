<?php
if(isset($_POST["start"]))
	$start= $_POST["start"];
else
	$start="";

if(isset($_POST["end"]))
	$end= $_POST["end"];
else
	$end="";

if(isset($_POST["stops"]))
	$stops= $_POST["stops"];
else
	$stops="";

//convert start and end to lowercase
$start = htmlspecialchars(strtolower($start));
$end = htmlspecialchars(strtolower($end));

//remove all whitespace
$start = preg_replace('/\s+/', '', $start);
$end = preg_replace('/\s+/', '', $end);


if($start=="" && $end=="")
	echo "You need to give values for start and end locations";
else{
	switch($start){
		case "seattle":
			if($end == "newyork"){
				if($stops == 0)
					$returnmessage="carrier:Delta, price:1212, stops:0";
				else 
					$returnmessage="carrier:United, price:1012, stops:1<br/>carrier:United, price:912, stops:2";
			}else if($end == "northcarolina"){
				if($stops == 0)
					$returnmessage="carrier:US Airways, price:912, stops:0";
				else 
					$returnmessage="carrier:United, price:812, stops:1<br/>carrier:United, price:512, stops:2";				
			}
		break;
		case "newyork":
			if($end == "seattle"){
				if($stops == 0)
					$returnmessage="carrier:Delta, price:1212, stops:0";
				else
					$returnmessage="carrier:United, price:1012, stops:1<br/>carrier:United, price:912, stops:2";
			}else if($end == "northcarolina"){
				if($stops == 0)
					$returnmessage="carrier:US Airways, price:912, stops:0";
				else
					$returnmessage="carrier:United, price:812, stops:1<br/>
									carrier:United, price:512, stops:2";				
			}
		break;
		case "northcarolina":
			if($end == "seattle"){
				if($stops == 0)
					$returnmessage="carrier:Delta, price:1212, stops:0";
				else
					$returnmessage="carrier:United, price:1012, stops:1<br/>carrier:United, price:912, stops:2";
			}else if($end == "newyork"){
				if($stops == 0)
					$returnmessage="carrier:US Airways, price:312, stops:0";
				else
					$returnmessage="carrier:American Airlines, price:212, stops:1<br/>carrier:US Airways, price:198, stops:2";				
			}

		break;
		default:
			$returnmessage="Sorry. We don't have information for that starting point";
		break;
	}
	echo $returnmessage;
}


?>