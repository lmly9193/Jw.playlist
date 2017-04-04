<?php
	header('Location: embed.php?'.base64_encode(urlencode($_SERVER["QUERY_STRING"])));
	exit;
