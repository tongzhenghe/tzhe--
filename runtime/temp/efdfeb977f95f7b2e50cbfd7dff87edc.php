<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/sign/signin.html";i:1557533258;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>酒泉华美医疗美容医院</title>
    <link rel="stylesheet" type="text/css" href="/static/admin/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/login.css" />
</head>
<body class="gray-bg login-bg">
<div class="middle-box" style="margin-top: 10%;">
    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2><img src="http://huamei.juhuiny.com/logo.ico" class="layui-nav-img">   酒泉华美</h2>
            <p>我们用心为每位顾客服务，让每位顾客满意。</p>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <form class="layui-form" action="##" onsubmit="return false">
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="LAY-user-login-username"></label>
                    <input type="text" name="username" value="<?php if(!empty($cuser['username'])): ?><?php echo $cuser['username']; endif; ?>" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
                </div>
                <div class="layui-form-item">
                    <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="LAY-user-login-password"></label>
                    <input type="password" value="<?php if(!empty($cuser['password'])): ?><?php echo $cuser['password']; endif; ?>" name="password" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
                </div>
                <!--验证码盒子-->
                <!--<div class="layui-form-item">-->
                <!--<div class="layui-row">-->
                <!--<div class="layui-col-xs7">-->
                <!--<label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="LAY-user-login-vercode"></label>-->
                <!--<input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">-->
                <!--</div>-->
                <!--<div class="layui-col-xs5">-->
                <!--<div style="margin-left: 10px;">-->

                <!--</div>-->
                <!--</div>-->
                <!--</div>-->
                <div class="layui-form-item" style="margin-bottom: 20px;">
                    <input type="hidden" name="requestUrl"  value="<?php echo url('signin'); ?>">
                    <input type="checkbox" name="remember" <?php if(!empty($cuser['remember']) &&  $cuser['remember'] == 1): ?>checked <?php endif; ?> lay-skin="primary" title="记住密码"><div class="layui-unselect layui-form-checkbox" lay-skin="primary"><span>记住密码</span><i class="layui-icon layui-icon-ok"></i></div>
                    <a href="javascript:alert('请联系管理员！');" class="layadmin-user-jump-change layadmin-link" style="margin-top: 7px;">忘记密码？</a>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn layui-btn-fluid" lay-submit="" lay-filter="signIn">登 入</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/admin/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/static/admin/layui/layui.js"></script>
<script type="text/javascript" src="/static/admin/js/signin.js"></script>
<div class="footer" style=" position: fixed;bottom: 0;width: 100%;left: 0;margin: 0;opacity: 0.8;">
    <div class="pull-right">©2010-2019 <a >酒泉华美医疗美容医院</a></div>
</div>
</body>
</html>
