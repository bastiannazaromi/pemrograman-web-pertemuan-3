<?php
session_start();

if (!isset($_SESSION['log_user'])) {
	header('location: login.php');
}

$user = $_SESSION['log_user'];

echo json_encode($user);
