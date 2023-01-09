<?php
require('./admin/database.php');
header('Content-type: application/json; charset=utf-8');

if($conn = new mysqli($db_admin['db_localhost'], $db_admin['db_username'], $db_admin['db_pass'], $db_admin['db_name'])){

    // FORM REFILL

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM works WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    foreach ($result as $indice => $data){
        $response = array();
        array_push($response,[
            'id' => $data['id'],
            'title' => $data['title'],
            'descrip' => $data['descrip'],
            'category' => $data['category']
        ]);
    }
    
    

    echo json_encode($response);


} else {
    echo 'Database ERROR';
}

?>