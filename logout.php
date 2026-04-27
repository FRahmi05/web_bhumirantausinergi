<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
// Redirect ke halaman login
header("Location: login.php");
exit;
?>