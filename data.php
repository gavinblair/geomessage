<?php
	$host = "";
	$name = "";
	$pass = "";
	$db = "";
	$con = mysql_connect($host,$name,$pass);
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
  
	mysql_select_db($db, $con);
	
	
  
	if(isset($_GET['p'])) {
		//get lat, lng, msg for p
		$p = intval($_GET['p']);
		$sql = "SELECT * FROM messages WHERE id = $p";
		$query = mysql_query($sql);
		$row = mysql_fetch_array($query);
		echo json_encode($row);
		exit();
	} else if(isset($_GET['i'])) {
		//insert into db
		$date = date('Y-m-d H:i:s');
		$name = strippit($_GET['name']);
		$message = strippit($_GET['message']);
		$lat = intval($_GET['lat']*100000)/100000;
		$lng = intval($_GET['lng']*100000)/100000;
		$sql = "INSERT INTO messages (created, name, message, lat, lng) VALUES ('$date', '$name', '$message', '$lat', '$lng')";
		$query = mysql_query($sql);
		return mysql_insert_id();
		exit();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	mysql_close($con);
	
	
	function strippit($string_to_be_stripped){
		$new_string = ereg_replace("[^A-Za-z0-9]", "", $string_to_be_stripped );
		return $new_string;
	}