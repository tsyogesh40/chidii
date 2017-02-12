<?php
include_once('db.php');
$name = $_POST['nm'];
echo "$name";
$email = $_POST['mail'];
$password = $_POST['pswd'];
$phone = $_POST['ph'];
$gend = $_POST['gender'];
 $c =  $con->query("Insert into info values ('$name','$email','$password','$phone')"); 
 if($c){
 	echo "query inserted sucessfully";
 }else{
 	echo "retry";
 }
?>