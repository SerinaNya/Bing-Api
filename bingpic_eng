<?php 
 /* 
	Lite Laji(means rubbish) Bing Today Picture API(LLBTPA)
	Version: 1.1 (Third Party)
	Source By Little_Qiu,Thanks @GPlane,Changed By Flyfish 
 */
//get picture address(from Bing API)
function LLBTPA() {
    $data = json_decode(file_get_contents('http://bing.com/HPImageArchive.aspx?format=js&idx=0&n=1'), true);
    return "https://cn.bing.com".$data['images'][0]['url'];
};
// 302
$url = LLBTPA();
header("Location: $url");
?>
