<?php 
 if(!isset($_POST['next'])){
        header("Location: ../index.php");
        exit();
    }else if(empty($_POST['p_name'])){
        header("Location: ../index.php");
        exit();
    }else{
        if(!isset($_POST['p_name'])){
            header("Location: ../index.php?name_not_set");
            exit();
        }else{
            session_start();
            $_SESSION['p_name'] = $_POST['p_name'];
            $_SESSION['dis'] = $_POST['dis'];
            header("Location: ../site2.php");
            exit();
        }
    }