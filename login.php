<?php
session_start();
if (isset($_SESSION['uid'])){
    exit('<script>self.location="/";</script>');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['name'];
    $password = $_POST['passwd'];

    if(!$username)
        exit('<script>alert("请输入用户名!");history.back();</script>');
    if(!$password)
        exit('<script>alert("请输入密码!");history.back();</script>');
    $password = md5($password);

    require_once('config.php');
    $sql = "SELECT uid, username, password FROM userlist WHERE username = '$username'";
    $result = $db->query($sql);
    if ($result->num_rows === 0)
        exit('<script>alert("该用户不存在!");history.back();</script>');
    $user = $result->fetch_assoc();
    if ($user['password'] != $password)
        exit('<script>alert("密码错误!");history.back();</script>');

    $_SESSION['uid'] = $user['uid'];
    exit('<script>self.location="/";</script>');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/icon.css">
    <title>留言板</title>
</head>

<body>
    <div class="container">
        <h3>登录</h3>
        <form action="#" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="name" id="name" class="validate">
                    <label for="name">用户名:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="passwd" id="passwd" class="validate">
                    <label for="passwd">密码:</label>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn">登录</button>
                <a href="reg.php" class="btn">注册</a>
            </div>
        </form>
    </div>

    <script src="js/materialize.min.js"></script>
</body>

</html>