<?php
$login = $_GET['k'];

if ((is_null($login) == false) && ($login == "PrZ8gPjGJxStmvdT")) {
$key = $_GET['r'];
$text = file_get_contents("keys.json");
$decode = json_decode($text,true);
if ($decode[$key] == true) {
$decode[$key]=false;
$text = json_encode($decode);
file_put_contents('keys.json',$text);
echo("Success");
} else {
    echo("Already Redeemed");
}
} else {
   echo("Invalid Args, IP Logged."); 
}
?>