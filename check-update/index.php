<?php
/* 
	辣鸡 Bing 今日美图 API 更新检查工具 By Little_Qiu
	Version: 1.0
*/
// 检查 PHP 版本
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
};
// 导入版本
include 'version.php';
// 设置下载地址
$releases = "https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/releases";
// 获取 JSON
$updateJson = json_decode(file_get_contents("https://raw.githubusercontent.com/Minecraft-LittleQiu/laji-bing-pic-api/master/update.json"), true);
// 获取发布日期
$date = date('Y 年 m 月 d 日',$updateJson[date]);
// 对比版本号
if ($ver == $updateJson[version]){
	echo ("欢迎使用辣鸡 Bing 今日美图 API 更新检查工具！</br>当前版本已是最新版本！</br>当前版本号：$ver </br>当前版本发布日期：$date");
} else {
	echo ("欢迎使用辣鸡 Bing 今日美图 API 更新检查工具！</br>当前版本不是最新版本！</br>当前版本号：$ver </br>最新版本号：$updateJson[version] </br>最新版本发布日期：$date </br>请到 <a href=$releases>GitHub </a>下载最新版本。");
};
?>
