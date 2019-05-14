<?php
header('Content-Type:text/json;charset=utf-8');
session_start();

//未登录则退出
if (!isset($_SESSION['uid'])) {
    exit();
}

require_once('config.php');
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
}

?>