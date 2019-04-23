<?php
session_start();
if (!isset($_SESSION['uid'])) {
    # 表示当前未登录，跳转到登录页面
    exit('<script>self.location="login.php";</script>');
}
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    # 用户退出
    $_SESSION = array();
    exit('<script>self.location="login.php";</script>');
}

$uid = $_SESSION['uid'];

require_once('config.php');
$sql = "SELECT nickname FROM userlist WHERE uid = '$uid' ";
$result = $db->query($sql);
if ($result->num_rows === 0){
    $_SESSION = array();
    exit('<script>alert("该用户不存在!");history.back();</script>');
}
$user = $result->fetch_assoc();
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
    <?php echo $user['nickname']; ?>,登录成功
    <a href="index.php?action=logout">注销</a>
</body>
</html>