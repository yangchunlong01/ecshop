<?php
$data ="theCityName=北京";
$curl_obj = curl_init();
curl_setopt($curl_obj,CURLOPT_URL, "http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");
curl_setopt($curl_obj,CURLOPT_USERAGENT,"user-agent:Mozilla/5.0(windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0");
curl_setopt($curl_obj,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl_obj,CURLOPT_HEADER,0);
curl_setopt($curl_obj,CURLOPT_POST,1);
curl_setopt($curl_obj,CURLOPT_POSTFIELDS,$data);
curl_setopt($curl_obj,CURLOPT_HTTPHEADER,array("application/x-www-form-urlencoded;charset=utf-8","Content-length:".strlen($data)));
$rtn = curl_exec($curl_obj);

if(!curl_error($curl_obj)){
	echo "<pre>".$rtn."</pre>";
}else{
	echo 'Curl_error:'.curl_error($cjrl_obj);
}


?>