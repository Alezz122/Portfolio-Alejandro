<?php
require('./admin/database.php');


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

                $id = $_POST['id-item'];
                $title = $_POST['title'];
                $descrip = $_POST['description'];
                $category = $_POST['category'];
                
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
        
                $sql = "UPDATE works SET title = '$title', descrip = '$descrip', category = '$category', img = '$binariesImg' WHERE id = '$id'";
                
                
                if (mysqli_query($conn, $sql)) {
                    echo "Update record successfully";
                    header('Location:' . './admin_panel.php');
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            };
        };

    }

    // header('Location: ./admin_panel.php');
}else {
    echo 'Database ERROR';
}

?>