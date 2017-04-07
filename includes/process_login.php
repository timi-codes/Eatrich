<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once '../securimage/securimage.php';

//$securimage = new Securimage();

//session_start();
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['p']); // The hashed password.

        if (login($email, $password, $mysqli) == true) {
            // Login success 
            //        header("Location: ../protected_page.php");
            header('Location: ../dashboard.php');
        }else{
            // Login failed 
            header('Location: ../login.php?error=1');
        }    

} else {
    // The correct POST variables were not sent to this page. 
    header('Location: ../error.php?err=Could not process login');
    exit();
}