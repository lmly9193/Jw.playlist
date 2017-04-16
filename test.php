<?php
	foreach (getallheaders() as $name => $value){
    echo "$name: $value"."<br>";
	}
	
	
	echo $_SERVER["REMOTE_ADDR"]."<br>";
	echo $_SERVER["HTTP_CLIENT_IP"]."<br>";
	echo $_SERVER["HTTP_X_FORWARDED_FOR"]."<br>";