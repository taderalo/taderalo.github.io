<?php
include("../res/x5engine.php");
$nameList = array("phw","hpp","45l","gz2","cj3","le8","yyy","rag","gfe","kj6");
$charList = array("S","M","R","E","5","M","K","D","J","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
