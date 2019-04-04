<?php
	$f = fopen($_POST['name'].'_branches.txt', "a+");

	fwrite($f, $_POST['name'].' ^ '.$_POST['address'].' ^ '.$_POST['operating']." ^ ".$_POST['lat']." ^ ".$_POST['lng']."\r\n");
	
	fclose($f);
	header("Location: index.html");
?>
