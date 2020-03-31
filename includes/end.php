<?php
session_start();
$p_name = $_SESSION['p_name'];
if(file_exists("../../$p_name/index.php")){
    header("Location: ../../$p_name/index.php");
    session_destroy();
    exit();
}else{
    header("Location: ../../$p_name/index.html");
    session_destroy();
    exit();
}
