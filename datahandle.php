<?php
$login = $_GET['k'];
if ((is_null($login) == false) && ($login == "PrZ8gPjGJxStmvdT")) {
$discordid = $_GET['d'];
$newdate = (int)$_GET['t'];
$text = file_get_contents("data.json");
$decode = json_decode($text,true);
$decode[$discordid]=$newdate;
#array_push($decode,$decode['apples']=2);
$text = json_encode($decode);
file_put_contents('data.json',$text);
echo("Success");
} else {
   echo("ERROR"); 
}
?>