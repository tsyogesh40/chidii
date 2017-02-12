<?php
include_once('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['no'];
$company = $_POST['company'];
$sub = $_POST['subject'];
$msg = $_POST['message'];
 $c =  $con->query("Insert into info  values ('$name','$email','$phone','$company','$sub','$msg')"); 
 if($c){
    echo "query inserted sucessfully";
 }else{
    echo "retry";
 }
?>


 