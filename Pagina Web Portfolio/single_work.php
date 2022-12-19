<?php
require('./admin/database.php');

if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){
    
    // SQL WORKS
    $id_rq = $_GET['id'];

    $sql = "SELECT * FROM works WHERE id = '$id_rq'";
    $result = mysqli_query($conn, $sql);


    while ($row = $result->fetch_row()) {
        $id = $row[0];
        $title_db = $row[1];
        $descrip = $row[2];
        $category = $row[3];
        $img = $row[4];
    }
    
}else {
    echo 'Database ERROR';
}

require('./templates/single_work_template.php');
?>