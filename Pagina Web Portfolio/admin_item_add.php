<?php
session_start();
require('./admin/database.php');

if(isset($_SESSION['user'])){
    echo 'hola';
    if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){
        if(isset($_POST) && !empty($_POST)){
            if(isset($_REQUEST['upload'])){


                if(isset($_FILES['img']['name'])){
                    $data_log = array();
                    $fileType = $_FILES['img']['type'];
                    $fileName = $_FILES['img']['name'];
                    $fileSize = $_FILES['img']['size'];
                    $imgUploaded = fopen($_FILES['img']['tmp_name'], 'r');
                    $binariesImg = fread($imgUploaded, $fileSize);
                    $binariesImg = mysqli_escape_string($conn, $binariesImg);
                    
                    $title = $_POST['title'];
                    $descrip = $_POST['description'];
                    $category = $_POST['category'];
                    $url_github = $_POST['url_github'];
                    $url_project = $_POST['url_project'];
                    $keywords = $_POST['keywords'];

                    $sql = "INSERT INTO works (title, descrip, category, img, url_github, url_project, keywords) VALUES('".$title."','".$descrip."','".$category."','".$binariesImg."','".$url_github."','".$url_project."','".$keywords."')";
                    
                    
                    // ERRORS
                
                    $errors = array();
                    $someError = false;
            
                    
                    if(mysqli_query($conn, $sql)) {
                        array_push($data_log, "<li>New record created successfully</li>");
                        header('Location:' . './admin_panel.php');
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }     
        }
    }else {
        echo 'Database ERROR';
    }
}else {
    header('Location:' . './admin_login.php');
}

?>