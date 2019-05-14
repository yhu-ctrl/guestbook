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
if (isset($_GET['delete'])) {
    // 删除留言
    $id = $_GET['delete'];
    $sql = "DELETE FROM guestbook
            WHERE id = '$id' AND uid = '$uid'";
    if ($result = $db->query($sql))
        exit('<script>alert("成功删除该留言!");self.location="index.php"</script>');
    else
        exit('<script>alert("无法删除!");self.location="index.php"</script>');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 留言
    $comment = $_POST['comment'];
    if ($comment != '') {
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
    <!-- 导航栏 -->
    <nav>
        <div class="nav-wrapper">
            <a class="brand-logo center"><?php echo $user['nickname']; ?></a>
            <ul id="nav-mobile" class="right">
                <li><a href="index.php?action=logout"><i class="material-icons">exit_to_app</i></a></li>
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
                        <textarea name="comment" id="comment" class="materialize-textarea" required></textarea>
                        <label for="comment">我也要留言</label>
                        <button type="submit" class="btn">提交</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- 显示留言 -->
        <div class="row">
            <div class="col s12">
                <ul class="collection" id="guestbook">
                </ul>
            </div>
        </div>
    </div>

    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        //载入留言
        $.post({url:"query.php?action=query",
                dataType:"json",
                data: {'action': 'query'},
                success:(data)=>{
                    data.forEach(element => {
                        let $li = $('<li class="collection-item avatar"></li>');
                        let hearimg = element['headimg'];
                        if (hearimg == null)
                            hearimg = 'img/th.jpg';     //空头像则设置个默认头像
                        $li.append('<img src="' + hearimg + '" alt="" class="circle">');
                        $li.append('<span class="title"><b>' + element['nickname'] + '<b></span>');
                        let $p = $('<p></p>');
                        $p.append(element['comment'] + '<br/>');
                        $p.append(element['addtime']);
                        $li.append($p);
                        
                        $('#guestbook').append($li);
                        
                    });
                }
            });
    </script>
</body>

</html>