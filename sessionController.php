<?php
session_start();
    if (!empty($_POST) && isset($_POST)) {
        if(!isset($_SESSION['login'])) {
            $_SESSION['login'] = $_POST['loginname'];
            $_SESSION['cart1']=0;
            $_SESSION['cart2']=0;
            $_SESSION['cart3']=0;
            $_SESSION['cart4']=0;
            header('location: index.php');
        }
        else{
            header('location: login.php');
        }
    }

    ?>