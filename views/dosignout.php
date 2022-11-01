<?php
//         session_start();
//        if( isset( $_SESSION['email'])){
//         unset($_SESSION['email']);
//        }
//         header("location: login.php");
        session_start();
        if (session_destroy()) {
                header("location: ../index.php");
        }
?>