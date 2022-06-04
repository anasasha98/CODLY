<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["type"]);

session_unset();
session_destroy();
// echo 'You have cleaned session';
header('Refresh: 1; URL = index.php');
