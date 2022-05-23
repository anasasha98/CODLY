<?php
session_start();
include '../../forms/connection.php';
if(empty($_SESSION['username'] && $_SESSION['password'])){
    header("location: ../signin.php");

}
