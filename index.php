<?php
 
/* 
	repo: https://github.com/jinzhijie/Bing-Api
*/
 
// 检查 PHP 版本
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('PHP 版本不得低于 5.2.0，可你正在使用的是 '.PHP_VERSION);
};

// 获取 Bing 今日美图的图片地址
function bg() {
	// 导入设置
	include 'settings.php';
	
	// 检查是否使用 URL 指定时间
	if ($useUrl) {
        $daysAgoQuery = "$_GET["daysago"]";
	$data = req($daysAgoQuery);
	} else {
        $data = req($daysAgo);
	};
	// 返回 URL
    return "https://cn.bing.com".$data['images'][0]['url'];
};

function req($daysAgo) {
	retrun json_decode(file_get_contents("https://cn.bing.com/HPImageArchive.aspx?format=js&idx=$daysAgo&n=1"), true);
};

$url = bg();
header("status: 302");
header("Location: $url");
die();
?>
