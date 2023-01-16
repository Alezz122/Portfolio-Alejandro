<?php
session_start();
require('./admin/database.php');


if(isset($_SESSION['user'])){
    
    if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){
        $data_log = array();
        array_push($data_log, "<li>DataBase OK</li>");
        
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