<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 08:49:18
  from 'D:\server\server\laomeng\8.20mvcback\mvc\application\template\admin\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e390ed903e5_29243706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02b1d6be8b07e587c0edf24d79bd9c2ac6ac940' => 
    array (
      0 => 'D:\\server\\server\\laomeng\\8.20mvcback\\mvc\\application\\template\\admin\\admin.html',
      1 => 1597913357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e390ed903e5_29243706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21452661875f3e390ed5ea17_68399484';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquerymini.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/admin.js"><?php echo '</script'; ?>
>
    <style>
        .box-con {
            width: 370px;
            height: auto;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            border: 8px solid gray;
            box-shadow: 0 0 2px black;
            padding: 10px;
            transition: box-shadow 1s ease;
            transition: border 1s ease;
        }

        .box-con:hover {
            box-shadow: 0 0 2px gold;
            border: 2px solid gold;
        }
    </style>
    <title>XX后台管理系统</title>
</head>

<body>
    <div class="box-con">
        <div style="text-align: center; font-size: 18px;margin-bottom: 10px;">后台管理</div>
        <form class="form-horizontal" action="admin/index/login" method="POST">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="账号" name="uname">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 记住密码
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" style="margin-left: 30px;">登录</button>
                    没有账号？请点击
                    <a href="admin/reg/add" class="btn btn-default" style="margin-left: 5px;">注册</a>
                </div>
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
        </form>
    </div>
</body>

</html><?php }
}
