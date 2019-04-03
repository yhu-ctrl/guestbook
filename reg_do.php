<?php
$username = $_POST['name'];
$password1 = $_POST['passwd1'];
$password2 = $_POST['passwd2'];


if(!$username)
    exit('<script>alert("请输入用户名!");history.back();</script>');
if(!$password1)
    exit('<script>alert("请输入密码!");history.back();</script>');
if(!$password2)
    exit('<script>alert("请确认密码!");history.back();</script>');

require_once('config.php');
