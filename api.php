<?php
function 0() {
    $data = json_decode(file_get_contents('http://bing.com/HPImageArchive.aspx?format=js&idx=0&n=1'), true);
    return "https://cn.bing.com".$data['images'][0]['url'];
};
$url = 0();
header("Location: $url");
?>
