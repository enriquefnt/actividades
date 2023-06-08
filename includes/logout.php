<?php
	require 'conect.php';
	session_destroy();

	header('Location: /actividades/public/index.php');

?>
