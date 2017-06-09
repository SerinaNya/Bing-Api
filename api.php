<?php
//设定时间(几天前，整数，0为今天)
$ago = '0';
function 0() {include 'settings.php';
    $data = json_decode(file_get_contents('http://bing.com/HPImageArchive.aspx?format=js&idx=$ago&n=1'), true);
    return "https://cn.bing.com".$data['images'][0]['url'];
};
$url = 0();
header("Location: $url");
?>
