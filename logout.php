<?php
session_start();
unset($_SESSION['key']);
header("Location:main_page.php");
?>