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
        <form method="POST">
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
                    <input type="text" name="passwd" id="passwd" class="validate">
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