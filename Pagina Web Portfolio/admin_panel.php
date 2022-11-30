<?php
require('./templates/admin_panel_template.php');

session_start();

if($_SESSION['user'] == 'admin_ale_web'){
    print_r($_SESSION);
    

}else {
    header('Location:' . './admin_login.php');
}


?>