<?php
 
 /* 
	辣鸡 Bing 今日美图 API By Little_Qiu
	Version: 1.0
	感谢 @GPlane
 */
 
 // 检查 PHP 版本（然而并没有什么卵用）
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
}
 
// 获取 Bing 今日美图的图片地址
function bg() {
    $data = json_decode(file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1'), true);
    return "https://cn.bing.com".$data['images'][0]['url'];
};

// 302 跳转
$url = bg();
header("Location: $url");
exit;

?>
