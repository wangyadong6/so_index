<?php
//打开session，他是把内容存到浏览器上

//$_SESSION['W'] = 111;
//var_dump($_SESSION['W']);
header("content-type:image/Png");
//定义画布
$image = imagecreatetruecolor(150,50);
//定义颜色
session_start();
$code = '';
$color = imagecolorallocate($image,255, 255, 255);
//填充颜色
imageFill($image,20,50, $color);
//画点
for($i=0; $i <500; $i++){ 
	$Dcolor = imagecolorallocate($image,rand(20,255),rand(20,255),rand(20,255));
	imagesetpixel($image,rand(0,150),rand(0,60),$Dcolor);
}
//画线
for ($i=0; $i <5; $i++) { 
	$Xcolor = imagecolorallocate($image,rand(20,100),rand(20,100),rand(20,100));
	imageline($image,rand(0,150),rand(0,60),rand(0,150), rand(0,60), $Xcolor);

}
//字符
for ($i=0; $i <4 ; $i++) { 
	$Zcolor = imagecolorallocate($image,255,255,255);
	$font = 50;
	$x = rand(5,10)+150*$i/4;
	$y = rand(10,20);
	$data = 'qwertyuiopasdfghjklzxcvbnm1234567890';
	//用substr截取字符串  $data  rand是让他随机出来一位起始值  每次循环截取出来一位
	$string = substr($data,rand(0,strlen($data))-1,1);
	$code .= $string;
	imagestring($image,5, $x, $y, $string, $Zcolor);
}
$_SESSION['code'] = $code;
//生成图像
imagePng($image);
//销毁图像
imagedestroy($image);

?>