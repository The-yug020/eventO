<?php
session_destroy();
unset($_SESSION['user']);
header("location: login.php");
?>