<?php
require('./admin/database.php');


if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){
    echo 'Database OK';

    // FORM CHECK
    if(isset($_GET) && !empty($_GET)){

        $id = $_GET['id-item'];
        $title = $_GET['title'];
        $descrip = $_GET['description'];
        $category = $_GET['category'];
        $img = $_GET['img'];
        
        // ERRORS

        $errors = array();
        $someError = false;

        if(empty($title)){
            array_push($errors, '<li class="error">Title empty</li>');
            $someError = true;
        }
        if(empty($descrip)){
            array_push($errors, '<li class="error">Description empty</li>');
            $someError = true;
        }
        if(empty($category)){
            array_push($errors, '<li class="error">Category empty</li>');
            $someError = true;
        }
        if(empty($img)){
            array_push($errors, '<li class="error">IMG empty</li>');
            $someError = true;
        }

        // UPDATE DB WITH NEW DATA

        $sql = "UPDATE works SET title = '$title', descrip = '$descrip', category = '$category', img = '$img' WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            echo "Update record successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    header('Location: ./admin_panel.php');
}else {
    echo 'Database ERROR';
}

?>