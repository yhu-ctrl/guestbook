<?php
session_start();
if (!isset($_SESSION['uid'])) {
    // 表示当前未登录，跳转到登录页面
    exit('<script>self.location="login.php";</script>');
}
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // 用户退出
    $_SESSION = array();
    exit('<script>self.location="login.php";</script>');
}

$uid = $_SESSION['uid'];
$USER_IP = $_SERVER['REMOTE_ADDR'];
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 留言
    $comment = $_POST['comment'];
    $sql = "INSERT INTO guestbook
            (uid, comment, ip)
            VALUES('$uid', '$comment', '$USER_IP')";
    if ($result = $db->query($sql)) {
        exit('<script>alert("留言成功!");history.back();</script>');
    }
    else {
        echo $db->error ;
    }
    
}

$sql = "SELECT nickname FROM userlist WHERE uid = '$uid' ";
$result = $db->query($sql);
if ($result->num_rows === 0){
    $_SESSION = array();
    exit('<script>alert("该用户不存在!");history.back();</script>');
}
$user = $result->fetch_assoc();

// 载入留言
$sql = "SELECT nickname, addtime, comment
        FROM guestbook
        JOIN userlist USING (uid)
        ORDER BY id ASC";
$result = $db->query($sql);
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
        <h1><?php echo $user['nickname']; ?>,登录成功</h1>
        <a href="index.php?action=logout">注销</a>
        <form action="#" method="post">
            <div class="input-field">
                <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
                <label for="comment">我也要留言</label>
                <button type="submit" class="btn">提交</button>
            </div>
        </form>
        <ul class="collection z-depth-3">
            <?php
            while ($guestbook = $result->fetch_assoc()) {
                echo '<li class="collection-item avater">';
                    echo '<span class="title">' . $guestbook['nickname'] . '<span>';
                    echo '<p>' . $guestbook['comment'] . '</p>';
                    echo '<span class="title">' . $guestbook['addtime'] . '<span>';
                echo '</li>';
            }
            ?>
        </ul>

    </div>

    <script src="js/materialize.min.js"></script>
</body>
</html>