<?php
 /* 
	辣鸡 Bing 今日美图 API 测试版 By Little_Qiu
	Version: 1.3-test-3
	感谢 @GPlane 和 @Flyfish233
	这是辣鸡 Bing 今日美图 API 的测试版。
    该版本可能未开发完全或含有不稳定因素，请谨慎用于生产环境！
 */
// 检查 PHP 版本（然而并没有什么卵用）
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
};
// 获取 Bing 今日美图的图片地址
function bg() {
	// 设置 settings.php 的通用性
	$mixSettingsPhp = false;
	// 检查 settings.php 能否通用
	if (mixSettingsPhp) {
		// 导入设置
		include 'settings.php';
	} else {
		// 导入设置
		include 'settings-test.php';
	}
	// 检查是否使用固定时间
	if (useUrlSetDate) {
		// 获取参数
        $daysAgoQuery = "$_GET['daysago']";
		// 检查是否使用 URL 获取地区
		if (useUrlSetRegion) {
			$region = "$_GET['region']";
		};
		// 检查地区
		if ($region = cn) {
			// 获取中国版 JSON
			$data = json_decode(file_get_contents("http://cn.bing.com/HPImageArchive.aspx?format=js&idx=$daysAgoQuery&n=1"), true);
			// 返回 URL
			return "https://cn.bing.com".$data['images'][0]['url'];
		} elseif ($region = global) {
			// 获取国际版 JSON
			$data = json_decode(file_get_contents("http://bing.com/HPImageArchive.aspx?format=js&idx=$daysAgoQuery&n=1"), true);
			// 返回 URL
			return "https://bing.com".$data['images'][0]['url'];
		};
	} else {
		// 检查地区
		if ($region = cn) {
			// 获取中国版 JSON
			$data = json_decode(file_get_contents("http://cn.bing.com/HPImageArchive.aspx?format=js&idx=$daysAgo&n=1"), true);
			// 返回 URL
			return "https://cn.bing.com".$data['images'][0]['url'];
		} elseif ($region = global) {
			// 获取国际版 JSON
			$data = json_decode(file_get_contents("http://bing.com/HPImageArchive.aspx?format=js&idx=$daysAgo&n=1"), true);
			// 返回 URL
			return "https://bing.com".$data['images'][0]['url'];
		};
	};
};
// 302 跳转
$url = bg();
header("Location: $url");
exit;
?>
