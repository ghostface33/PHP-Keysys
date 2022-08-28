<?php
$login = $_GET['k'];
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if ((is_null($login) == false) && ($login == "PrZ8gPjGJxStmvdT")) {

$text = file_get_contents("keys.json");
$decode = json_decode($text,true);
$newkey = generateRandomString();
$decode[$newkey]=true;
$text = json_encode($decode);
file_put_contents('keys.json',$text);
echo("Key Generated: " . $newkey);
} else {
   echo("ERROR"); 
}
?>