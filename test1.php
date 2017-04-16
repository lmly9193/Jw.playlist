<?php
	
	
	class get_video_info {
		
		var $ch;
		var $head = array("Connection: keep-alive","Keep-Alive: 300");
		
		function curl($url){
			$this->ch = curl_init();
			curl_setopt($this->ch,CURLOPT_URL,$url);
			curl_setopt($this->ch,CURLOPT_PROXY,$_SERVER["REMOTE_ADDR"].":80");
			curl_setopt($this->ch,CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
			curl_setopt($this->ch,CURLOPT_HTTPHEADER,$this->head);
			curl_setopt($this->ch,CURLOPT_SSL_VERIFYHOST,false);
			curl_setopt($this->ch,CURLOPT_SSL_VERIFYPEER,false);
			curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,0);
			curl_setopt($this->ch,CURLOPT_TIMEOUT,30);
			curl_setopt($this->ch,CURLOPT_CONNECTTIMEOUT,30);
			curl_setopt($this->ch,CURLOPT_FOLLOWLOCATION,true);
			return curl_exec($this->ch);
			curl_close($this->ch);
		}
	}
	
	$get_video_info = new get_video_info;
	$get_video_info->curl("https://gcast.azurewebsites.net/test.php");