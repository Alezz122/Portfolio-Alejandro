<?php
require('./admin/database.php');

if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){
    echo 'Database OK';

    // FORM CHECK
    if(isset($_GET) && !empty($_GET)){

        $id = $_GET['id-item'];

        // DELETE DATA

        $sql = "DELETE FROM works WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            echo "Delete record successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    header('Location: ./admin_panel.php');
}else {
    echo 'Database ERROR';
}


?>
