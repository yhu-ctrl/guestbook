<?php
//管理留言板内容
//

header('Content-Type:text/json;charset=utf-8');
session_start();

//未登录则退出
if (!isset($_SESSION['uid'])) {
    exit();
}
$uid = $_SESSION['uid'];

require_once('config.php');
//留言
if(isset($_POST['comment'])) {
    $comment = $_POST['comment'];
    $USER_IP = $_SERVER['REMOTE_ADDR'];
    $sql = "INSERT INTO guestbook
            (uid, comment, ip)
            VALUES('$uid', '$comment', '$USER_IP')";
    if ($result = $db->query($sql)) {
        exit(json_encode(1));
    }
}

//其他操作
if(isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'query') {
        //查询留言
        $sql = "SELECT id, uid, nickname, addtime, comment, headimg
                FROM guestbook
                JOIN userlist USING (uid)
                ORDER BY id ASC";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        exit(json_encode($rows));
    }
    else if ($action == 'del') {
        //删除留言
        if (!isset($_POST['id']))
            exit();
        $id = $_POST['id'];
        $sql = "DELETE FROM guestbook
                WHERE id = '$id' AND uid = '$uid'";
        if ($db->query($sql))
            exit(json_encode((1)));
    }
}

?>