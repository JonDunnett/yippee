<?php

$usr = $_POST["usrname"];
$psw = $_POST["psswd"];

if ($usr == "bob" && $psw == "bill") {
	header("https://www.google.com/");
} else {
	header("https://www.yahoo.com/");
}

header("yippee.html");

?>