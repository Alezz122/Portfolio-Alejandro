<?php
require('./admin/database.php');

if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){

    // SQL DESIGNS

    $sql = "SELECT * FROM works WHERE category = 'web'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);


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
        


require('./templates/webs_template.php');
?>