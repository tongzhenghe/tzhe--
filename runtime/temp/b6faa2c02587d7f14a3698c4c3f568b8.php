<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/addkeywords_link.html";i:1560386474;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1562054213;}*/ ?>
<!-- 模板 -->
<div class="layui-fluid">
  <div class="layui-row">
      <div class="layui-card">
        <div class="layui-card-header">
            <span class="layui-breadcrumb">
              <i>当前位置：</i>
            <a href="/">首页</a>
            <a href="#/website/keywords_link">列表</a>
            <a><cite>添加超链接</cite></a>
          </span>
        </div>
        <div class="layui-card-body">
          <form class="layui-form" action="##" onsubmit="return false" >

              <div class="layui-form-item">
                  <div class="layui-inline">
                      <label class="layui-form-label">关联词</label>
                      <div class="layui-input-inline">
                          <input autocomplete="off" name="re_keywords" class="layui-input">
                      </div>
                  </div>
                  <div class="layui-inline">
                      <button class="layui-btn layui-btn-xs layui-btn-self" id="addKeywords">添加</button>
                  </div>
                  <div class="layui-inline">
                      <div class="layui-inline layui-word-aux">提示：支持添加多个客服。</div>
                  </div>
                  <div class="layui-inline">
                      <div class="layui-form-mid layui-word-aux"></div>
                  </div>
                  <div class="layui-form-item">
                      <div class="layui-inline beDemo-k">
                          <label class="layui-form-label"></label>
                          <?php if(!empty($row['re_keywords'])): if(is_array($row['re_keywords']) || $row['re_keywords'] instanceof \think\Collection || $row['re_keywords'] instanceof \think\Paginator): $i = 0; $__LIST__ = $row['re_keywords'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                          <span class="layui-self"><?php echo $v; ?></span><a href="javascript:;"><i class="is">x</i></a>
                          <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                      </div>
                  </div>
              </div>

           <div class="layui-form-item">
              <label class="layui-form-label">超链接</label>
              <div class="layui-input-block">
                <input type="text" name="link" value="<?php if(!empty($row['link'])): ?><?php echo $row['link']; endif; ?>" placeholder="菜单链接" autocomplete="off" class="layui-input">
                  <p class="layui-word-aux">注意：此项必填。</p>
              </div>
            </div>

            <div class="layui-form-item">
              <div class="layui-input-block">
                  <input type="hidden" name="requestUrl"  value="<?php echo url('addkeywords_link'); ?>">
                  <input type="hidden" name="id"  value="<?php if(!empty($row['id'])): ?><?php echo $row['id']; endif; ?>">
                <button class="layui-btn xxx" lay-submit lay-filter="formKeywords_link">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                <a href="#/website/keywords_link" class="layui-btn layui-btn-primary">返回列表</a>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<!-- 脚本 -->
<script type="text/javascript" src="/static/admin/layui_rely.js"></script>
<script>

    layui.use(['form', 'layedit', 'laydate'], function() {
        var form = layui.form,
            $ = layui.jquery;
            laydate = layui.laydate;
        form.render();
        //日期
        laydate.render({
            elem: '#date_hash'
        });

        form.on('submit(formKeywords_link)', function(data) {
            var arr_re_keywords = [];
            $(".beDemo-k").children(".layui-self");
            $.each($(".beDemo-k").children(".layui-self"), function (k, v ) {
                arr_re_keywords.push($(v).text())
            });

            data.field.arr_re_keywords = arr_re_keywords;
            $.fn.repost( data.field.requestUrl, data.field);
        });


        //menu
        form.on('submit(formDemo)', function(data) {
            $.fn.repost( data.field.requestUrl, data.field);
        });



        form.on('switch(switchContent)', function(data) {

            if (this.checked) {
                //链接框
                $(".content-url").show();
                $(".content-custom").hide();
                //UE.getEditor('container').setContent('', false);
            } else {
                $(".content-url").hide();
                $(".content-custom").show();
                //$("input[name='out_url']").val('');
            }
        });

        //profile_cate
        form.on('submit(formDemoPro)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


          //profile
        form.on('submit(formDemoProject)', function(data) {
            data.field.content =  ue.getContent();
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });



        //profile
        form.on('submit(formBanner)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


         //active_cate:
        form.on('submit(formActivity_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


        form.on('submit(formSubject)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


      //sub_cate:
        form.on('submit(formSubject_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


         //active_cate:
        form.on('submit(formNews_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });

     //news:
        form.on('submit(formNews)', function(data) {
            data.field.icon = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });



        //active:
        form.on('submit(formActivity)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });


      //active:
        form.on('submit(formReal_show)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.img = $(".imgdemo2").attr('src');
            data.field.icon_title = $(".icon_title").attr('src');
            $.fn.repost( data.field.requestUrl, data.field);
        });


        //ask-cate:
        form.on('submit(formAsk_cate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            console.log(data.field)
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //ask-cate:
        form.on('submit(formRealShowCate)', function(data) {
            data.field.icon = $(".imgdemo1").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            console.log(data.field)
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //news:
        form.on('submit(formAsk)', function(data) {
            data.field.icon = $(".imgdemo2").attr('src');
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.is_hot = ( data.field.is_hot === 'on') ? 1 : 2;
            data.field.is_new = ( data.field.is_new === 'on') ? 1 : 2;
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //notes
        form.on('submit(formNotes)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.icon = $(".imgdemo1").attr('src');
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //formGy
        form.on('submit(formGy)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');

            console.log()
            $.fn.repost( data.field.requestUrl, data.field);
        });

       //notes
        form.on('submit(formVideo)', function(data) {
            data.field.requestUrl = '/webadmin/index/addVideo';
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.path =  $(".videoDemo").attr('href');
            $.fn.repost( data.field.requestUrl, data.field);
        });

         //notes
        form.on('submit(formMachine)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.icon = $(".imgdemo1").attr('src');
            // console.log( data.field);
            $.fn.repost( data.field.requestUrl, data.field);
        });

        //notes
        form.on('submit(formExpert)', function(data) {
            data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
            data.field.img = $(".imgdemo2").attr('src');
            var arr = [];
             $.each($(".layui-badge"), function (k, v ) {
                 arr.push($(v).text())
             });
             data.field.be_expert_in = arr;
            $.fn.repost( data.field.requestUrl, data.field);
        });



        //contact
        form.on('submit(formContact)', function(data) {
            var arr_tel = [];
            var arr_bus = [];

            console.log($(".beDemo-tel").children(".layui-self"));
            $.each($(".beDemo-tel").children(".layui-self"), function (k, v ) {
                arr_tel.push($(v).text())
            });
            data.field.tel = arr_tel;

           $.each($(".beDemo-bus").children(".layui-self"), function (k, v ) {
               arr_bus.push($(v).text())
            });
            data.field.bus = arr_bus;

            $.fn.repost( data.field.requestUrl, data.field);

        });

        form.on('submit(formAbout)', function(data) {
            data.field.img = $(".imgdemo2").attr('src');
            data.field.about_video = $(".videoDemo").attr("href");
            console.log( data.field);
            $.fn.repost( data.field.requestUrl, data.field);
        });

       form.on('submit(formUser)', function(data) {

            $.fn.repost( data.field.requestUrl, data.field);
        });

       form.on('submit(formUser)', function(data) {

            $.fn.repost( data.field.requestUrl, data.field);

        });


      form.on('submit(formWebSetting)', function(data) {
          data.field.left_poster = $(".imgLeft").attr('src');
          data.field.center_poster = $(".imgCenter").attr('src');
          data.field.mobile_poster = $(".imgCenterMo").attr('src');
          $.fn.repost( data.field.requestUrl, data.field);
        });

      form.on('submit(formGoods)', function(data) {
          data.field.is_tj = ( data.field.is_tj === 'on') ? 1 : 2;
          data.field.discount = ( data.field.discount === 'on') ? 1 : 2;
          data.field.icon = $("#imgdemo1").attr('src');
          $.fn.repost( data.field.requestUrl, data.field);
        });

       //权限模块选择






        //swetch监听指定开关
        form.on('switch(switchTest_hash)', function(data) {
            //id， 字段， url
            var id = $(this).attr('data-ids')
                ,field = $(this).attr('data-field')
                ,value  = this.checked ? 1: 2;
            if (!id) {alert('数据不存在！'); return false;}
            data = {id:id, field:field, value:value,do:$(this).attr('data-do')};
            $.fn.repost($(this).attr('data-url'), data);
            // layer.msg((this.checked ? '已开启' : '已禁用'), {
            //     offset: '6px'
            // });
            //layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

    });


    $(document).on('click', '#delMenu', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delSubject_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delPro', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });
    $(document).on('click', '#delPro_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delBanner', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNews_cate', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNews', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delReal_show', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });


   $(document).on('click', '#delAsk', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNotes', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delVideo', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delMachine', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delUser', function() {
        $.fn.deleteFind( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    //delete
    $(document).on('click', '#for-del', function() {
        $.fn.repost( '/webadmin/index/for_del', {id: $(this).attr('data-ids'), table: $(this).attr("data-table")});
    });

    //restore
    $(document).on('click', '#restore-data', function() {
        $.fn.repost( '/webadmin/index/restore', {id: $(this).attr('data-ids'), table: $(this).attr("data-table")});
    });

     //addBe_expert
    $(document).on('click', '#addBe_expert', function() {
        if (!$("input[name='addBe_expert']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo').append( '<span class="layui-badge">'+$("input[name='addBe_expert']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='addBe_expert']").val('');
    });


    $(document).on('click', '#addTel', function() {
        if (!$("input[name='tel']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo-tel').append( '<span class="layui-self">'+$("input[name='tel']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='tel']").val('');
    });


    $(document).on('click', '#addBus', function() {
        if (!$("input[name='bus']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo-bus').append( '<span class="layui-self">'+$("input[name='bus']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='bus']").val('');
    });

     //addBe_expert-del
    $(document).on('click', '.is', function() {
        $(this).parent().prev().remove();
        $(this).parent().remove();
    });




    /*上传组件*/
    layui.use('upload', function () {
        var upload = layui.upload
            ,url =  "/webadmin/index/upload";


        upload.render({
            elem: '.upload_file'
            ,size: 300
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览1
                $(".icon_title").attr('src', res.file);
                $(".icon_title").parent().append(' <a href="javascript:;" class="delete-img"><span>x</span></a>');
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });









        //图标
        upload.render({
            elem: '.upload1'
            ,size: 300
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览1
                $("#imgdemo1").attr('src', res.file);
                $("#imgdemo1").attr('src', res.file);
                $(".del-icon1").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });

           //图标
        upload.render({
            elem: '.uploadMachine-icon'
            ,size: 100
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览1
                $("#imgdemo1").attr('src', res.file);
                $("#imgdemo1").attr('src', res.file);
                $(".del-icon1").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        upload.render({
            elem: '.upload2'
            ,size: 300
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").attr('src', res.file);
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });



        //banner
        upload.render({
            elem: '.uploadBanner'
            ,size: 500
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").attr('src', res.file);
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        //uploadActivity
        upload.render({
            elem: '.uploadActivity'
            ,size: 250
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $("#imgdemo2").attr('src', res.file);
                $(".del-icon2").show();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


         upload.render({
            elem: '.uploadLeftPoster'
            ,size: 100
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $(".imgLeft").attr('src', res.file);

                $(".img-left").append(' <a href="javascript:;" class="del-img"><span>x</span></a>');

                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });



        upload.render({
            elem: '.uploadCenterPoster'
            ,size: 200
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $(".imgCenter").attr('src', res.file);
                $(".img-center").append(' <a href="javascript:;" class="del-img"><span>x</span></a>');
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        upload.render({
            elem: '.uploadCenterPosterMobile'
            ,size: 200
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                // //预览
                $(".imgCenterMo").attr('src', res.file);
                $(".img-center_mo").append(' <a href="javascript:;" class="del-img"><span>x</span></a>');
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });


        //视频
        upload.render({
            elem: '.uploadVideo'
            ,size: 1000*20
            , accept: 'video'
            ,url: url
            , before: function (obj) {
                layer.load();
            }
            , done: function (res, index, upload) {
                $(".videoDemo").attr('href', res.file);
                $(".videoDemo").text(res.file);
                $(".videoDemo").children();
                layer.closeAll('loading'); //关闭loading
            }
            , error: function (index, upload) {
                layer.closeAll('loading'); //关闭loading
            }
        });




    });

    //删除图片
    $(document).on('click', '.del-icon1', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();
        
    });

  $(document).on('click', '.del-icon2', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();

    });


  $(document).on('click', '.del-img', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();

    });


  $(document).on('click', '.delete-img', function() {
        //删除图片
       $(this).prev().removeAttr("src");
       $(this).hide();

    });


  $(document).on('click', '.clone', function() {
     var clone_id = $(this).attr('data-ids')
         , clone_t = $(this).attr('data-data');
          layer.open({
              title:'提示！',
              content: '确定克隆此条数据？'
              ,btn: ['确定','取消']
              ,yes: function(index, layero) {
                  //回调
                  d  = {id: clone_id, t:clone_t};
                  $.fn.repost( '/webadmin/index/clone_field', d);
              }
          });
  });


  $(document).on('click', '#delKeywords_link', function() {
     var id = $(this).attr('data-ids');
          layer.open({
              title:'提示！',
              content: '确定删除此条数据， 删除将无法恢复？'
              ,btn: ['确定','取消']
              ,yes: function(index, layero) {
                  //回调
                  d  = {id: id, do:'delFind'};
                  $.fn.repost( '/webadmin/index/keywords_link', d);
              }
          });
  });


    $(document).on('click', '#addKeywords', function() {
        if (!$("input[name='re_keywords']").val()) {
            layer.msg('内容为空！');
            return false;
        }
        $('.beDemo-k').append( '<span class="layui-self">'+$("input[name='re_keywords']").val()+'</span><a href="javascript:;"><i class="is">x</i></a>');
        $("input[name='re_keywords']").val('');
    });




</script>
