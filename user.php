<?php
//管理用户信息
//

header('Content-Type:text/json;charset=utf-8');
session_start();

//未登录则退出
if (!isset($_SESSION['uid'])) {
    exit();
}
$uid = $_SESSION['uid'];

require_once('config.php');

if(isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'user') {
        //查询用户信息
        $sql = "SELECT uid, nickname
                FROM userlist
                WHERE uid='$uid'";
        $result = $db->query($sql);
        exit(json_encode($result->fetch_assoc()));
    }
    else if ($action == 'out') {
        //用户注销
        $_SESSION = array();
        exit(json_encode(1));
    }
}

?>