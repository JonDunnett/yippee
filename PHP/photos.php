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
	$db = fopen("../img/joe.db", "r");
	$request->name = "joe";
	$request->success = true;
} else if ($_COOKIE["username"] == "jane") {
	$db = fopen("../img/jane.db", "r");
	$request->name = "joe";
	$request->success = true;
} else {
	echo json_encode($request);
	exit();
}

while (! feof($db)) {
	$photo = new Photo();
	$iphoto  = json_decode(fgets($db));
	$photo->loc   = $iphoto->loc;
	$photo->path  = $iphoto->path;
	$photo->year  = $iphoto->year;
	$photo->desc  = $iphoto->desc;
	$photo->count = $iphoto->count;
	$photo->state = $iphoto->state;
	array_push($request->photos,$photo);
}

echo json_encode($request);

?>