<?php
header("content-type:text/html;charset=utf-8");
// 接收登录的value值
$D_text = isset($_POST['D_text']) ?$_POST['D_text']:"2222";
$D_password = isset($_POST['D_password']) ?$_POST['D_password']:"3333";

// 接收注册的value值  并给他一个默认传值
$input_text_name  = isset($_POST['input_text_name'])  ?$_POST['input_text_name'] :"77";
$input_text_phone = isset($_POST['input_text_phone']) ?$_POST['input_text_phone']:"77";
$input_text_email = isset($_POST['input_text_email']) ?$_POST['input_text_email']:"77";
$input_password_1 = isset($_POST['input_password_1']) ?$_POST['input_password_1']:"77";
$input_password_2 = isset($_POST['input_password_2']) ?$_POST['input_password_2']:"77";
$input_text_yzm   = isset($_POST['input_text_yzm'])   ?$_POST['input_text_yzm']	 :"77";


?>