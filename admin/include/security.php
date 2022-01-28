<?php
session_start();
?>

<?php // ต้อง login ก่อน
if ($_SESSION['auth_user']) {
	header("location: ../user/login.php");
}
?>