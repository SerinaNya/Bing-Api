<?php
 /* 
	辣鸡 Bing 今日美图 API 测试版 By Little_Qiu
	Version: 1.2-test
	感谢 @GPlane 和 @Flyfish233
	这是辣鸡 Bing 今日美图 API 的测试版。
    该版本可能未开发完全或含有不稳定因素，请谨慎用于生产环境！
 */
// 检查 PHP 版本（然而并没有什么卵用）
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
};
// 测试版显示错误
ini_set("display_errors","On");
error_reporting(E_ALL | E_STRICT);
// 获取 Bing 今日美图的图片地址
function bg() {
	// 测试版设置配置文件能否通用
	$mixSettingsPhp = false;
	// 测试版检查配置文件能否通用
	if (mixSettingsPhp) {
		// 导入设置
		include 'settings.php'
	} else {
		// 导入设置
		include 'settings-test.php'
	}
	// 检查是否使用 URL 指定时间
	if (useUrlSetDate) {
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
