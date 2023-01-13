<?php
require('./admin/database.php');

if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){

    
    if($_REQUEST){

        // SEARCHER
        $search = $_GET['search'];
        
        $search = filter_var($search, FILTER_SANITIZE_STRING);
        $search = filter_var($search, FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($search)){
            
            $sql = "SELECT * FROM works WHERE category = 'design' AND title LIKE '%$search%' OR keywords LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            
            
            while ($row = $result->fetch_row()) {
                $id = $row[0];
                $title_db = $row[1];
                $descrip = $row[2];
                $category = $row[3];
                $img = $row[4];
            }
            
        }

    }else {
        // SQL DESIGNS
    
        $sql = "SELECT * FROM works WHERE category = 'design'";
        $result = mysqli_query($conn, $sql);
    
    
        while ($row = $result->fetch_row()) {
            $id = $row[0];
            $title_db = $row[1];
            $descrip = $row[2];
            $category = $row[3];
            $img = $row[4];
        }
    }

}else {
    echo 'Database ERROR';
}
        

require('./templates/designs_template.php');
?>