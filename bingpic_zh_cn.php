<?php
/*
	小垃圾必应日图 API 精简版(LLTBPA)
	版本 1.1 (第三方)
	源码 Little_Qiu,感谢 GPlane,精简 Flyfish
*/
// 从 Bing 获取日图地址
function LLBTPA() {
	$data = json_decode(file_get_contents('http://bing.com/HPImageArchive.aspx?format=js&idx=0&n=1'),true);
	return "https://bing.com".$data['images'][0]['url'];
};
// 302
$url = LLBTPA();
header("Location: $url");
?>
