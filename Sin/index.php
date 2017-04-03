<?php
	if(empty($_SERVER["QUERY_STRING"])){
		echo 'Error';
	}else{
		$encode=base64_encode(urlencode($_SERVER["QUERY_STRING"]));
		header('Location: embed.php?'.$encode);
	}