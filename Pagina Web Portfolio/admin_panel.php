<?php
session_start();
require('./admin/database.php');


if(isset($_SESSION['user'])){
    
    if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){
        $data_log = array();
        array_push($data_log, "<li>DataBase OK</li>");
        
        // FORM CHECK
        if(isset($_GET) && !empty($_GET)){
            
            print_r($_FILES);
            echo 'hola';
            $title = $_GET['title'];
            $descrip = $_GET['description'];
            $category = $_GET['category'];
            $img = $_GET['img'];
            

            // ERRORS

            $errors = array();
            $someError = false;

            $sql = "INSERT INTO works (title, descrip, category, img) VALUES ('$title', '$descrip', '$category','$img')";
            
            if (mysqli_query($conn, $sql)) {
                array_push($data_log, "<li>New record created successfully</li>");
                header('Location: ./admin_panel.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }

        // SQL WORKS
        $sql = "SELECT * FROM works";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
    
    
        while ($row = $result->fetch_row()) {
            $id = $row[0];
            $title_db = $row[1];
            $descrip = $row[2];
        }
        
    }else {
        echo 'Database ERROR';
    }
}else {
    header('Location:' . './admin_login.php');
}

require('./templates/admin_panel_template.php');

?>