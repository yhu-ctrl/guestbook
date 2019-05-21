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
        <form>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="name" id="name" class="validate" required>
                    <label for="name">用户名:</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="passwd" id="passwd" class="validate" required>
                    <label for="passwd">密码:</label>
                </div>
            </div>
            <div class="row">
                <button class="btn" onclick="return login()">登录</button>
                <a href="reg.php" class="btn">注册</a>
            </div>
        </form>
    </div>

    <script src="js/materialize.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.md5.js"></script>
    <script>
        function login() {
            if ($('#name').val() === '' || $('#passwd').val() === '')
                return true;
            $.post({url: "user.php",
                    dataType: "json",
                    data: {
                        'action': 'login',
                        'user': $('#name').val(),
                        'passwd': $.md5($('#passwd').val())
                        },
                    success:(data)=>{
                        if (data['code']) {
                            alert("登录成功");
                            self.location = 'index.php';
                        }
                        else {
                            alert(data['msg']);
                            $('#passwd').val('');
                        }
                    },
                    error: ()=>{
                        alert("登录失败");
                    }
                    });
                return false;
        }
    </script>
</body>

</html>