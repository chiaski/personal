<?php
	$f = fopen($_POST['orgname'].'.txt', "a+");
	$goods = preg_replace("/[\n\r]/","~",$_POST['goods']); 
	
	$target_file = $_POST['orgname'].'.png';
	$uploadOk = 1;

	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
		}
	}
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	
	fwrite($f, $_POST['orgname'].' ^ '.$_POST['desc'].' ^ '.$_POST['type'].' ^ '.$goods.' ^ '.$_POST['bank'].' ^ '.$_POST['target_name'].' ^ '.(string)$_POST['account_number']."\r\n");
	
	fclose($f);
	header("Location: index.html");
?>
