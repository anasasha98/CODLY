<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["type"]);

// echo 'You have cleaned session';
header('Refresh: 1; URL = index.php');
