<?php 
	session_start();
		session_destroy();
	require 'routes/templates/checkout.php';
	header("Location: ".$baseUrl."index.php");