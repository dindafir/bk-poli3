<?php 
    include '../../../config/connection.php';
    session_start();
    session_destroy();
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk_poli_baru/index.php');
?>