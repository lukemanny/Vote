<?php
session_start();
if (isset($_SESSION['username'])) {
	session_destroy();
      header("Location:login.php");
}
if (isset($_SESSION['admin'])) {
	session_destroy();
      header("Location:login.php");
}
?>