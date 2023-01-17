<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email_from = $_POST['email'];
    $email_to = 'aledoble29@gmail.com';
    $text = $_POST['message'];
    
    // SANITIZING INPUTS
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);
    $surname = filter_var($surname, FILTER_SANITIZE_SPECIAL_CHARS);

    $email_from = filter_var($email_from, FILTER_SANITIZE_EMAIL);
    $email_from = filter_var($email_from, FILTER_VALIDATE_EMAIL);
	
    $text = filter_var($text, FILTER_SANITIZE_STRING);
    $text = filter_var($text, FILTER_SANITIZE_SPECIAL_CHARS);

    // DATABASE CONNECTION
    
    mail($email_to, $name . " " . $surname, $text . " " . $email_from);
  	header('Location: ./index.html');
  	
}


?>