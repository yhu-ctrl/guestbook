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
if($password1 != $password2)
    exit('<script>alert("两次输入密码不一致!");history.back();</script>');
$password = md5($password1);

require_once('config.php');
$sql = "SELECT username FROM userlist WHERE username = '$username'";
$result = $db->query($sql);
if ($result->num_rows === 0) {
    $sql = "INSERT INTO userlist
            (username, password, nickname)
            VALUES('$username', '$password', '$username')";
    if ($res = $db->query($sql))
        exit('<script>alert("注册成功!");self.location="index.php";</script>');
    else
        exit('<script>alert("注册失败!");history.back();</script>');
}
else {
    exit('<script>alert("该用户已存在!");history.back();</script>');
}
