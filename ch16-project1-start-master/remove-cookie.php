<?php
if(isset($_COOKIE['theme'])) {
	$domain = $_SERVER['HTTP_HOST'];
	setcookie('theme', '', time()-1000);
    setcookie('theme', '', time()-1000, '/', $domain);
	if(isset($_COOKIE['philosopher'])) {
		setcookie('philosopher', '', time()-1000);
		setcookie('philosopher', '', time()-1000, '/');
		header('location: chapter16-project1.php');
	} else {
		header('location: chapter16-project1.php');
	}		
} else if(isset($_COOKIE['philosopher'])) {
	setcookie('philosopher', '', time()-1000);
	setcookie('philosopher', '', time()-1000, '/');
	header('location: chapter16-project1.php');
} else {
	header('location: chapter16-project1.php');
}
?>