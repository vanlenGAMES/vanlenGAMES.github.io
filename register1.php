<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>畅议 - 注册</title>
 
    <link rel="stylesheet" type="text/css" href="hurucss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/css/mdui.min.css"/>
    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('./images/login/loginBac.png');
            background-size: cover;
        }
        .login{
            width: 550px;
            height: 550px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(
                to right bottom,
                rgba(255,255,255,.7),
                rgba(255,255,255,.5),
                rgba(255,255,255,.4)
            );
            /* 使背景模糊化 */
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px #9bb4fe;
            border-radius: 15px;
        }

        .table{
            font: 900 40px '';
            text-align: center;
            letter-spacing: 5px;
            color: #3d3d3d;
        }

        .box{
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .box .ipt{
            width: 400px;
            height: 100%;
            margin-bottom: 20px;
            outline: none;
            border: 0;
            padding: 10px;
            background-color: transparent;
            border-bottom: 3px solid rgb(150, 183, 240);
            font: 900 16px '';
        }

        .box .vercode{
            width: 133px;
            height: 100%;
            margin-bottom: 20px;
            outline: none;
            border: 0;
            padding: 10px;
            background-color: transparent;
            border-bottom: 3px solid rgb(150, 183, 240);
            font: 900 16px '';
        }

        .go{
            text-align: center;
            display: block;
            height: 24px;
            padding: 12px;
            font: 900 20px '';
            border-radius: 10px;
            margin-top: 20px;
            color: #fff;
            letter-spacing: 3px;
            background-image: linear-gradient(to left,
            #1b7eaf,#2944dc);
        }

        .center{text-align:center;}
        </style>
    <script type="text/javascript" src="login.js"></script>
</head>
 
<body>
    <div class="mdui-appbar mdui-appbar-fixed">
        <div class="mdui-tab mdui-color-teal" mdui-tab>
          <a href="index.html" class="mdui-ripple mdui-color-teal">首页</a>
          <div class="mdui-toolbar-spacer"></div>
          <a style="width:100px;height:50px;" href="login.html" class="mdui-tab-active mdui-btn mdui-color-white">
            <b>登录/注册</b>
          </a>
          
          <!-- <a href="#login.html" class="mdui-btn mdui-color-black">登录/注册</a> -->
        </div>
    </div>
    <p>&nbsp;</p>

    <div class="center">
        <div class="login mdui-row-xs-2">
                    <div class="box mdui-col">
                        <br>
                        <?php
                            echo '<form action="register.php" method="post">';
                            echo '<p class="table">Register</p>';
                            echo '<p><input type="text" name="username" class="ipt" placeholder="用户名"/></p>';
                            echo '<p><input type="password" name="userPwd" class="ipt" placeholder="密码"/></p>';
                            echo '<p><input type="password" name="reuserPwd" class="ipt" placeholder="确认密码"/></p>';
                            //验证码
                            echo '<p><input type="text" name="vercode" class="vercode" placeholder="验证码"><img id="captcha_img" border="1" src="vercodeimg.php" width="100" height="30"></p>';
                            echo '<p><input type="submit" value="注册" class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple mdui-color-blue-800"></p>';
                            echo '</form>';?>
                            <p>&nbsp;</p>
                            <a href="login.html" class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple mdui-color-blue-800">登录</a>
                        <br>
                </div>
            </div>
    </div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/mdui@1.0.2/dist/js/mdui.min.js"></script>
</html>