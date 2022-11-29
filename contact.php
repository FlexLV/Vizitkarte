<?php

$name = $_POST['name']
$email = $_POST["sutitja-epasts"];
$Subject = "Website"
$message = $_POST["sutitaja-zina"];

$mailheader = "From:".$name."<".$email.">\r\n"

$recipient = "ernisd621@gmail.com";

mail($recipent, $subject,$message,$mailheader)
or die("Error!");


?>