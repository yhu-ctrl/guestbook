<?php
$username = $_POST['name'];
$password = $_POST['passwd'];

if(!$username)
    exit('<script>alert("请输入用户名!");history.back();</script>');
if(!$password)
    exit('<script>alert("请输入密码!");history.back();</script>');
$password = md5($password);

require_once('config.php');
$sql = "SELECT username, password, nickname FROM userlist WHERE username = '$username'";
$result = $db->query($sql);
if ($result->num_rows === 0)
    exit('<script>alert("该用户不存在!");history.back();</script>');
$user = $result->fetch_assoc();
if ($user['password'] != $password)
    exit('<script>alert("密码错误!");history.back();</script>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
</head>
<body>
    <?php echo $user['nickname']; ?> 登录成功
</body>
</html>
