<?php



$usr = $_POST["usrname"];
$psw = $_POST["psswd"];

if ($usr == "joe" && $psw == "joe123") {
	setcookie("username","joe",time()+60*60*24*30,"/","cs.wheatoncollege.edu");
	header("Location: ../FotoFan.html");
} else if ($usr == "jane" && $psw == "jane999"){
	setcookie("username", "jane",time()+60*60*24*30,"/","cs.wheatoncollege.edu");
	header("Location: ../FotoFan.html");
} else {
	header("Location: ../login.html");
}



?>