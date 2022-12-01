<?php
session_start();
require('./templates/admin_panel_template.php');


if(isset($_SESSION['user'])){
    print_r($_SESSION);

}else {
    header('Location:' . './admin_login.php');
}


?>