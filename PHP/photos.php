<?php
class  Photo {
	public $loc  = "";
	public $path = "";
	public $year =  0;
	public $desc  = "";
	public $count = "";
	public $state = "";
}

class User {
	public $name = "";
	public $success = false;
	public $photos = []; 
}

$request = new User();


if ($_COOKIE["username"] == "joe") {
	$db = file_get_contents("../img/joe.db");
	$request->name = "joe";
	$request->success = true;
} else if ($_COOKIE["username"] == "jane") {
	$db = file_get_contents("../img/jane.db");
	$request->name = "joe";
	$request->success = true;
} else {
	echo json_encode($request);
	exit();
}

$db = json_decode($db);

$request->photos = $db->photos;

echo json_encode($request);

?>