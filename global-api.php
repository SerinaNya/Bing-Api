<?php
/*
	小垃圾必应日图 API 精简版(LLBDPA) Lite Laji(means rubbish) Bing Daily Picture API(LLBDPA)
	版本 1.3 (第三方) Version: 1.3 (Third Party) 国际版，与 cn.bing.com 不同步，不要在中国使用
	源码 Little_Qiu,感谢 GPlane,精简 Flyfish. Source By Little_Qiu,Thanks GPlane,Changed By Flyfish.
*/
function b() {
    $ago = '0'; // 设定图片的时间(几天前，整数，0为今天，1为昨天，2为前天,-1为明天,仅4时前有效) set picture date(e.g. today fill in 0,yesterday fill in 1,the day before yesterday fill in 2,tomorrow fill -1) 
    //非专业用户，请不要更改以下文本 if U aren't a PHP developer,please don't change the following text.
	$data = json_decode(file_get_contents('http://bing.com/HPImageArchive.aspx?format=js&idx=$ago&n=1'), true); // 从 Bing 获取日图 JSON get picture JSON from Bing
    	return "https://bing.com".$data['images'][0]['url']; // 返回 URL get picture URL
};
$url = b(); 
header("Location: $url"); // 302 跳转 used 302 code
?>
