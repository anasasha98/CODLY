<?php
session_start();

if(empty($_SESSION['username'] && $_SESSION['password'])){
    echo '<script language="javascript">';
    echo 'alert("Wrong username/password combination")';
    echo '</script>';
    header("location: signin.php");
    

}

