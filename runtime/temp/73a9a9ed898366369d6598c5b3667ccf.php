<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/www/wwwroot/huamei.jqzxyy.com/public/../application/index/view/index/subi.html";i:1563185532;s:54:"../application/index/view/index/include/subheader.html";i:1563185639;}*/ ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if(!empty($data['name'])): ?><?php echo $data['name']; else: if(!empty($web_setting['seo_title'])): ?><?php echo $web_setting['seo_title']; endif; endif; ?></title>
    <meta name="description" content="<?php if(!empty($data['intro'])): ?><?php echo $data['intro']; else: if(!empty($web_setting['seo_description'])): ?><?php echo $web_setting['seo_description']; endif; endif; ?>">
    <meta name="keywords" content="<?php if(!empty($data['seo_keywords'])): ?><?php echo $data['seo_keywords']; else: if(!empty($web_setting['seo_keywords'])): ?><?php echo $web_setting['seo_keywords']; endif; endif; ?>">
    <meta name="author" content="酒泉华美医疗美容医院">
    <style>

        .wrapper {
            width: 100%;
            background: #160d01;
            overflow: hidden;
            margin-top: 100px;

        }

        .wrapper img{
            width: 100%;
        }

        .wrapper p{
            margin: 0;
        }


        .slick-slide img {

            display: block!important;

        }

        .slick-slide.slick-loading img {

            display: none;

        }

        .slick-slide.dragging img {

            pointer-events: none;

        }

        .slick-initialized .slick-slide {

            position: relative;

            display: block;

        }

        .slick-loading .slick-slide {

            visibility: hidden;

        }

        .slick-vertical .slick-slide {

            display: block;

            height: auto;

        }



        .slick-dots li {

            margin: 0 5px;

            display: -moz-inline-stack;

            display: inline-block;

            zoom: 1;

            *display: inline;

            vertical-align: middle;

        }

        .slick-dots li span {

            background: none;

            border-radius: 100%;

            cursor: pointer;

            display: block;

            height: 10px;

            width: 10px;

            border: 1px solid #937344;

            font-size: 0;

        }

        .slick-dots li.slick-active span {

            background: #937344;

        }

        /*end slider*/

        .bg12 {

            width: 1200px;

            margin: 0 auto;

            position: relative;

        }

        #head {

            z-index: 10000;
            width: 100%;
            position: fixed;
            top: 0;
            height: 100px;

        }

        #head.fixed {

            position: fixed;

            top: 0;

            left: 0;

        }



        #head .head1 {

            background: #000;

            color: #fff;

            height: 70px;

        }

        #head .head1 h1.hos_name {

            font-size: 14px;

            line-height: 70px;

            position: absolute;

            left: 3.65%;

            top: 0;

        }

        #head .head1 .bg12 {

            height: 100%;

            background: url("http://huamei.juhuiny.com/logo1.png") no-repeat center;

            background-size: 22%;

        }



        #head .head2 {

            background: #1e180f;

            z-index: 10;

            height: 30px;

        }



        #head .head2 .nav_list {

            z-index: 3;

        }

        #head .head2 .nav_list .nav {

            width: 11%;

            float: left;

            position: relative;

        }

        #head .head2 .nav_list .nav > a {

            color: #fff;

            font-size: 15px;

            line-height: 30px;

            height: 30px;

            display: block;

            text-align: center;

            background-color: #1e180f;

        }

        #head .head2 .nav_list .nav > a:hover {

            color: #95774c;

        }

        #head .head2 .nav_list .nav > a:hover span {

            border-bottom: 1px solid #95774c;

        }

    </style>
</head>
<div class="head" id="head">

    <div class="head1">

        <h1 class="hos_name">酒泉华美医疗美容医院</h1>

        <div class="bg12"></div>

    </div>

    <div class="head2">

        <div class="bg12">

            <div class="nav_list clearfix">

                <div class="nav"> <a href="/"> <span>首页</span></a> </div>

                <div class="nav"> <a href="/index/about/"> <span>品牌中心</span></a></div>

                <div class="nav"> <a href="/index/newsl/"> <span>新闻资讯</span></a> </div>

                <div class="nav"> <a href="/index/machinel"> <span>先进设备</span></a> </div>

                <div class="nav"> <a href="/index/contact"> <span>联系我们</span></a> </div>

            </div>

        </div>

    </div>

</div><div class="wrapper">    <?php echo $data['content']; ?></div>