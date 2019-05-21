<?php
//管理用户信息
//

header('Content-Type:text/json;charset=utf-8');
session_start();

require_once('config.php');

if(isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == 'user') {
        //查询用户信息
        if (!isset($_SESSION['uid']))
            exit();

        $uid = $_SESSION['uid'];
        $sql = "SELECT uid, nickname
                FROM userlist
                WHERE uid='$uid'";
        $result = $db->query($sql);
        exit(json_encode($result->fetch_assoc()));
    }

    if ($action == 'login') {
        $user = $_POST['user'];
        $passwd = $_POST['passwd'];
        $sql = "SELECT uid FROM userlist WHERE username='$user' AND password='$passwd'";
        $result = $db->query($sql);
        if ($user = $result->fetch_assoc()) {
            $_SESSION['uid'] = $user['uid'];
            exit(json_encode(array('code'=>1)));
        }
        else
            exit(json_encode(array('code'=>0, 'msg'=>'用户名或密码错误')));
    }

    if ($action == 'out') {
        $_SESSION = array();
        exit(json_encode(1));
    }

}

?>