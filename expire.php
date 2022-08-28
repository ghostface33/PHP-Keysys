<?php
$login = $_GET['k'];
if ((is_null($login) == false) && ($login == "PrZ8gPjGJxStmvdT")) {
$discordid = $_GET['d'];
$text = file_get_contents("data.json");
$decode = json_decode($text,true);
$decode[$discordid]=0;
$text = json_encode($decode);
file_put_contents('data.json',$text);
echo("Success");
} else {
   echo("ERROR"); 
}
?>