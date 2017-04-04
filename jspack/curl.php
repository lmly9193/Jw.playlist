<?php
require_once 'class.JavaScriptPacker.php';
$link = demixcode($_SERVER["QUERY_STRING"]);
$sources = curl(demixcode('aHR0cHMlM0ElMkYlMkZhcGkuZ2V0bGlua2RyaXZlLmNvbSUyRmdldGxpbmslM0Z1cmwlM0Q=').$link);
$mixedjs = 'var playerInstance = jwplayer("videoContainer");playerInstance.setup({sources:'.$sources.',autostart:"ture",height:"100%",width:"100%",primary:"html5",flashplayer:"jwplayer/jwplayer.flash.swf",abouttext:"Video Embedding System",aboutlink:"//lmly9193.github.io",skin:{name:"tube",active:"red",inactive:"white"},timesliderabove:"true",logo:{file:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAADdAAAA3QFwU6IHAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAL1QTFRF////AAAAAAAAAAAAAAAABgAABwAABAAAAgAAHQEBJAEBAAAAAwEBBgAABgMDBwUFDgsLEAsLEQEBEQsLEwEBGBMTGBQUHwcHKQcHKygoNQYGPjg4Pzw8TQgIVVJSWQMDYwMDZgQEcAQEcgQEcwQEdAQEfAQEiwUFjIyMkgUFkwUFlgUFmQUFoAUFo6OjpQUFsAYGuQYGvAYGwAYGwgYGzAcH0QcH0tLS0wcH1AcH1QcH4eHh7e3t/v7+////506o6gAAAAt0Uk5TAAMQKSy4w/L5/f2Ug/EpAAAArklEQVQ4y72TxxKCMBBAF2mB2HsviCjYxQZq/v+znHhzJLsHR981byZlXwD+gpZToL2WDYtxBcwyAHTmBmsFgct0MJ0kVZI4Jth+iuDbwENMCPmb4HknVIhqjdYWE8a9+zA/OWOCEJtye4cK4tYvzq6YIB6LUjfGBCEuncFXArUFdUjimsRDRZUm/tTksLLH/RlMXC9IqofRVAaTkdxqLlmm+6NMjoyWzJ7+OD/nCQkviYvQ3qcwAAAAAElFTkSuQmCC"}});';
$packer = new JavaScriptPacker($mixedjs, 'Normal', true, false);
$packed = $packer->pack();

function demixcode($mixcode)
{
	return urldecode(base64_decode($mixcode));
}
function curl($url){
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$page = curl_exec($ch);
	curl_close($ch);
	return $page;
}
