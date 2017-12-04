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
	$db = fopen("joe.db", "r");
	$request->name = "joe";
	$request->success = true;
} else if ($_COOKIE["username"] == "jane") {
	$db = fopen("jane.db", "r");
	$request->name = "joe";
	$request->success = true;
} else {
	echo json_encode($request);
}



?>