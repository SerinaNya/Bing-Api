<?php
/* 
	辣鸡 Bing 今日美图 API 更新检查工具 By Little_Qiu & Xiao_Jin
	Version: 1.3
*/
// 检查 PHP 版本
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
};
// 导入版本
include 'version.php';
// 导入设置
include "../settings.php";
// 设置下载地址
$releases = "https://github.com/jinzhijie/LjBingPictureApi/releases";
// 获取 JSON
$updateJson = json_decode(file_get_contents("$updateRepo"), true);
// 转换主程序发布日期
$date = date('Y 年 m 月 d 日',$updateJson['date']);
// 转换更新检查工具发布日期
$checkerDate = date('Y 年 m 月 d 日',$updateJson['checkerDate']);
// 输出网页标题
echo ("<title>辣鸡 Bing 今日美图 API 更新检查工具</title>");
// 输出欢迎信息
echo ("欢迎使用辣鸡 Bing 今日美图 API 更新检查工具！</br></br>");
// 对比主程序版本号
if ($version == $updateJson['version']){
	// 输出最新版本信息
	echo ("当前版本已是最新版本！</br>当前版本号：稳定版 v$version </br>当前版本发布日期：$date </br></br>");
} else {
	// 输出有更新版本信息
	echo ("当前版本不是最新版本！</br>当前版本号：稳定版 v$version </br>最新版本号：稳定版 v$updateJson[version] </br>最新版本发布日期：$date </br>请到 <a href=$releases>GitHub </a>下载最新版本。</br></br>");
};
// 对比更新检查程序版本号
if ($checkerVersion == $updateJson['checkerVersion']){
	// 输出最新版本信息
	echo ("更新检查工具已是最新版本！</br>当前版本号：v$checkerVersion </br>当前版本发布日期：$checkerDate </br></br>");
} else {
	// 输出更新版本信息
	echo ("更新检查工具有更新版本！</br>当前版本号：v$checkerVersion </br>最新版本号：v$updateJson[checkerVersion] </br>最新版本发布日期：$checkerDate </br>您无需手动更新检查更新工具。检查更新工具会随稳定版一起发布和更新。</br></br>");
};
?>
