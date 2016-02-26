<?php
	$maxsize=20480;
	if(!$HTTP_POST_VARS['submit']){

		$error="";
	}
	if(!is_uploaded_file($HTTP_POST_FILES['upload_file']['tmp_name']) AND !isset($error)){
		$error="<b>Your must upload a file!</b><br />";
		unlink($HTTP_POST_FILES['upload_file']['tmp_name'])
	}
?>