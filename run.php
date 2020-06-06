<?php 
			
			$ua = 'user-agent:';
			$bearer = 'Authorization:';
			// $data = 'nickName=Hacker';


$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'http://puppyworldapp.com/invite');
						  	curl_setopt($ch, CURLOPT_HTTPHEADER, array($ua .
						  		'Content-Type: application/json' ,
						  		'Content-Type: application/x-www-form-urlencoded',$bearer
						  	));
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, 'inviteId=35784');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							curl_close($ch);
							print_r($out);
?>
