<?php
	include_once "curl.php";
	
	if (empty($json_playlist = json_decode(curl($_GET["playlist"]), true))) {
		print('["Error loading playlist"]');
	}else{
		#curl json.playlist to array $json_playlist
		
		#fmt_stream_map for each
		$fmt_stream_map = array_column($json_playlist, "sources");
		foreach($fmt_stream_map as &$value){
			preg_match('/(?:https?:\/\/)?(?:[\w\-]+\.)*(?:drive|docs)\.google\.com\/(?:(?:folderview|open|uc)\?(?:[\w\-\%]+=[\w\-\%]*&)*id=|(?:folder|file|document|presentation)\/d\/|spreadsheet\/ccc\?(?:[\w\-\%]+=[\w\-\%]*&)*key=)([\w\-]{28,})/i',$value,$match);
			$value = json_decode(curl("https://api.getlinkdrive.com/getlink?url=".$value),true);
			
			#remove "src","res" and re-value label
			foreach(array_keys($value) as &$key) {
				$value[$key][label] = preg_replace('/[^\d]/','',$value[$key][label]);
				unset($value[$key][src],$value[$key][res]);
			}
			
			#ksort array
			foreach ($value as $label => $quality){
				$ksort_array[$label] = $quality[label];
			}
			array_multisort($ksort_array, SORT_DESC, $value);
			
			#replace sources and add preview
			$value = array(sources => $value,fileId => $match[1]);
		}
		
		#combine $fmt_stream_map into $json_playlist
		$playlist = array_replace_recursive($json_playlist, $fmt_stream_map);
		
		#print $playlist by json
		print(json_encode($playlist,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE));
	}