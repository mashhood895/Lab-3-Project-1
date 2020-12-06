<?php
if(isset($_POST['theme'])) {
	$theme = $_POST['theme'];
	$philosopher = $_POST['philosopher'];
	$domain = $_SERVER['HTTP_HOST'];
	setcookie("theme", $theme, time() + 3600, '/', $domain);
	setcookie("philosopher", $philosopher);
	header('location: chapter16-project1.php');
} else {
	header('location: chapter16-project1.php');
}
