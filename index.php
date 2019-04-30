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
        exit('<script>alert("留言成功!");self.location="index.php"</script>');
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
$sql = "SELECT nickname, addtime, comment, headimg
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
    <!-- 导航栏 -->
    <nav>
        <div class="nav-wrapper">
            <a class="brand-logo center"><?php echo $user['nickname']; ?></a>
            <ul id="nav-mobile" class="right">
                <li><a href="index.php?action=logout">退出</a></li>
            </ul>
        </div>
    </nav>
    <!-- 内容栏 -->
    <div class="container">
        <!-- 输入留言 -->
        <div class="row">
            <div class="col s12">
                <form action="#" method="post">
                    <div class="input-field">
                        <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
                        <label for="comment">我也要留言</label>
                        <button type="submit" class="btn">提交</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- 显示留言 -->
        <div class="row">
            <div class="col s12">
                <ul class="collection">
                    <?php
                    while ($guestbook = $result->fetch_assoc()) {
                        $hearimg = $guestbook['headimg'];
                        if ($hearimg == '') 
                            $hearimg = 'img/th.jpg';    // 空头像则设置默认头像
                            
                        echo '<li class="collection-item avater">';
                            echo '<img src="' . $hearimg . '" width=64 alt="" class="circle">';
                            echo '<span class="title"><b>' . $guestbook['nickname'] . '</b></span>';
                            echo '<p>';
                            echo $guestbook['comment'] . '<br/>';
                            echo $guestbook['addtime'];
                            echo '</p>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>