<?php
session_start();
session_destroy();
unset($_SESSION['uid']);
unset($_SESSION['name']);
header('location:index.php');

?>