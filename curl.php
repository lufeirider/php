<?php
function curl_post_https($url,$data){ // 模拟提交数据函数

	$headers = array(
		'Content-Type: application/json;charset=UTF-8',
		'Accept: application/json, text/plain, */*'
	);
	
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
	
	curl_setopt($curl,CURLINFO_HEADER_OUT,true); //输出http头信息
    $tmpInfo = curl_exec($curl); // 执行操作
	
	//打印请求的header信息
	$request_header = curl_getinfo( $curl, CURLINFO_HEADER_OUT);
	print_r($request_header);
	
	
    if (curl_errno($curl)) {
        echo 'Errno'.curl_error($curl);//捕抓异常
    }
    curl_close($curl); // 关闭CURL会话
	

    return $tmpInfo; // 返回数据，json格式
}


$postStr = "";

$postStr = file_get_contents("php://input");
$postBase64Str = base64_encode($postStr);
print_r($postBase64Str);

$html = curl_post_https("https://xxxxx",$postBase64Str);

var_dump($html);
?>



<?php
function curl_post_https($url,$data){ // 模拟提交数据函数
	$headers = array(
		'Content-Type: application/json;charset=UTF-8',
		'Accept: application/json, text/plain, */*'
	);
	
    $curl = curl_init(); // 启动一个CURL会话
    curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
    curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
	
	curl_setopt($curl,CURLINFO_HEADER_OUT,true); //输出http头信息
    $tmpInfo = curl_exec($curl); // 执行操作
	
	//打印请求的header信息
	$request_header = curl_getinfo( $curl, CURLINFO_HEADER_OUT);
	//print_r($request_header);
	
	
    if (curl_errno($curl)) {
        echo 'Errno'.curl_error($curl);//捕抓异常
    }
	
    curl_close($curl); // 关闭CURL会话
    return $tmpInfo; // 返回数据，json格式
}

echo curl_post_https("http://127.0.0.1/list.php?id=$id","");
?>

<?php
function decode($data){
	$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_CBC,'');
	mcrypt_generic_init($td,'ydhaqPQnexoaDuW3','2018201920202021');
	$data = mdecrypt_generic($td,base64_decode(base64_decode($data)));
	mcrypt_generic_deinit($td);
	mcrypt_module_close($td);
	return $data;
}

function encode($data){
	$td = mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_CBC,'');
	mcrypt_generic_init($td,'ydhaqPQnexoaDuW3','2018201920202021');
	$data = mcrypt_generic($td,$data."hxb2018");
	mcrypt_generic_deinit($td);
	mcrypt_module_close($td);
	$data = base64_encode(base64_encode($data));
	return $data;
}
?>
