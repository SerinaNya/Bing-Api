<?php
 
/* 
	辣鸡 Bing 今日美图 API By Little_Qiu
	Version: 1.3
	感谢 @GPlane 和 @Flyfish233
*/
 
// 检查 PHP 版本
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
}
// 获取 Bing 今日美图的图片地址
function bg() {
	// 导入设置
	include 'settings.php';
	// 检查是否使用 URL 指定时间
	if (useUrl) {
		// 获取 daysago 参数的值
        $daysAgoQuery = "$_GET[daysago]";
		// 获取 JSON
        $data = json_decode(file_get_contents("http://bing.com/HPImageArchive.aspx?format=js&idx=$daysAgoQuery&n=1"), true);
	} else {
		// 获取 JSON
        $data = json_decode(file_get_contents("http://bing.com/HPImageArchive.aspx?format=js&idx=$daysAgo&n=1"), true);
	};
	// 返回 URL
    return "https://bing.com".$data['images'][0]['url'];
};
// 302 跳转
$url = bg();
header("Location: $url");
exit;
?>