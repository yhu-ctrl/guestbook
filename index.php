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
            <a class="brand-logo center"></a>
            <ul id="nav-mobile" class="right">
                <li><a href="#" onclick="LogOut()"><i class="material-icons">exit_to_app</i></a></li>
            </ul>
        </div>
    </nav>
    <!-- 内容栏 -->
    <div class="container">
        <!-- 输入留言 -->
        <div class="row">
            <div class="col s12">
                <form action="query.php" method="post">
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
                <ul class="collection">
                </ul>
            </div>
        </div>
    </div>

    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        //载入留言
        function Load() {
            $.post({url:"query.php",
                    dataType:"json",
                    data: {'action': 'query'},
                    success:(data)=>{
                        $('.collection').empty();
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
                            if (element['uid'] == uid) {
                                $li.append('<a href="#"' +
                                            'onClick="Del(' + element['id'] + ');return false;" ' +
                                            'class="secondary-content"><i class="material-icons">clear</i></a>');
                            }
                            $('.collection').append($li);
                        });
                    }});
        }

        //删除留言
        function Del(id) {
            if (!confirm("确定要删除这条留言吗？"))
                return
            $.post({url: "query.php",
                    dataType:"json",
                    data: {'action': 'del', 'id': id},
                    success:(data)=>{
                        alert("删除留言成功")
                        Load();
                    }})
        }

        //用户退出
        function LogOut() {
            $.post({url: "query.php",
                    dataType: "json",
                    data: {'action': 'out'},
                    success:()=>{
                        location.href = 'login.php';
                    }
                    });
        }

        let uid, nickname;
        //载入用户信息
        $.post({url: "query.php",
                dataType: "json",
                data: {'action': 'user'},
                success:(data)=>{
                    uid = data['uid'];
                    nickname = data['nickname'];
                    $('.brand-logo.center').append(nickname);
                },
                error: ()=>{
                    location.href = 'login.php';
                }
                });
        Load();

    </script>
</body>

</html>