<?php
session_start();
require("./admin/database.php");
require("./templates/admin_login_template.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    // SANITIZING INPUTS
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $username = filter_var($username, FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);
    
    // DATABASE CONNECTION
    
    $conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name']);
    
    // DATABASE QUERY
    
    $result = $conn->query('SELECT * FROM admin');
    

    while ($row = mysqli_fetch_assoc($result)) {
        $username_db = $row["username"];
        $password_db = $row["password"];
    }
    
    // VALIDATION
    
    $errors = array();
    $url_admin = './admin_panel.php';
    
    if($username == $username_db && $password == $password_db){
        echo 'Succesfull';
        $_SESSION['user'] = $username_db;
        header('Location: '. $url_admin);
    } else {
        array_push($errors, '<li class="error">Data invalid</li>');
    }
}

?>