<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"/www/wwwroot/huamei.jqzxyy.com/public/../application/webadmin/view/index/ask_cate.html";i:1557194675;s:80:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/laytablejs.html";i:1557130084;s:76:"/www/wwwroot/huamei.jqzxyy.com/application/webadmin/view/include/submit.html";i:1559619818;}*/ ?>
<style>
  .layui-table-view{
    height: 100%!important;
  }
  .layui-table-main{
    height: 100%!important;
  }
  .layui-table{    height: 100%!important;}
</style>
<div class="layui-fluid">
  <div class="layui-row">
    <div class="layui-col-xs12">
      <div class="layui-card">


        <blockquote class="layui-elem-quote">
              <span class="layui-breadcrumb">
                    <a href="/">首页</a>
                    <a><cite>问题分类列表</cite></a>
              </span>
        </blockquote>

        <div class="layui-card-header">
          <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
              <li class="layui-this">问题分类列表</li>
              <li>回收站</li>
            </ul>
            <div class="layui-tab-content">
              <div class="layui-tab-item layui-show">

                <div class="layui-card-body">
                  <div class="layui-card-header">
                    <a href="#/website/addask_cate" class="layui-btn layui-btn-xs">
                      <i class="layui-icon">&#xe654;</i>
                      <span>新增分类</span>
                    </a>
                    <a href="javascript:;" class="layui-btn layui-btn-xs layui-btn-primary" id="search_hash">
                      <i class="layui-icon">&#xe615;</i>
                    </a>
                  </div>
                  <div class="layui-card-body" style="top: 10px;">
                    <table lay-filter="demo"  lay-data="{height:315, page:true, id:'test'}" >
                      <thead>
                      <tr>
                        <th lay-data="{field:'id', width:100, sort:true}">(编号id)</th>
                        <th lay-data="{field:'name', width:150}">分类名称</th>
                        <th lay-data="{field:'is_tj', width:100}">推荐</th>
                        <th lay-data="{field:'is_hot', width:80}">热门</th>
                        <th lay-data="{field:'is_new', width:80}">最新</th>
                        <th lay-data="{field:'state', width:80}">状态</th>
                        <th lay-data="{field:'操作', width:80}">操作</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php if(!empty($ask_cate)): if(is_array($ask_cate) || $ask_cate instanceof \think\Collection || $ask_cate instanceof \think\Paginator): $k = 0; $__LIST__ = $ask_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?>
                      <tr>
                        <td><?php echo $v['id']; ?></td>

                        <td><span style="color: #e0e0e0;"><?php if(!empty($v['html'])): ?><?php echo $v['html']; endif; ?></span><span><?php echo $v['name']; ?></span><span><a href="javascript:;"><img src="<?php if(!empty($v['icon'])): ?><?php echo $v['icon']; endif; ?>" onclick="$.fn.preview(this)" width="20px" /></a></span></td>

                        <td>
                          <?php if($v['is_tj'] == 1): ?>
                          <a href="javascript:;">
                            <div class="layui-input-block" style="margin-left:unset;">
                              <input type="checkbox" checked="" data-do="_state"   name="open" lay-skin="switch" data-field="is_tj" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  lay-text="推荐|不推荐">
                            </div>
                          </a>
                          <?php else: ?>
                          <a href="javascript:;">
                            <div class="layui-input-block"  style="margin-left:unset;">
                              <input type="checkbox"  data-do="_state" data-field="is_tj" data-ids="<?php echo $v['id']; ?>"  data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  name="close" lay-skin="switch"  lay-text="推荐|不推荐">
                            </div>
                          </a>
                          <?php endif; ?>
                        </td>
                        <td>
                          <?php if($v['is_hot'] == 1): ?>
                          <a href="javascript:;">
                            <div class="layui-input-block" style="margin-left:unset;">
                              <input type="checkbox" checked="" data-do="_state"  name="open" lay-skin="switch" data-field="is_hot" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  lay-text="是|否">
                            </div>
                          </a>
                          <?php else: ?>
                          <a href="javascript:;">
                            <div class="layui-input-block"  style="margin-left:unset;">
                              <input type="checkbox"  data-do="_state" data-field="is_hot" data-ids="<?php echo $v['id']; ?>"  data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  name="close" lay-skin="switch"  lay-text="是|否">
                            </div>
                          </a>
                          <?php endif; ?>
                        </td>
                        <td>
                          <?php if($v['is_new'] == 1): ?>
                          <a href="javascript:;">
                            <div class="layui-input-block" style="margin-left:unset;">
                              <input type="checkbox" checked="" data-do="_state"  name="open" lay-skin="switch" data-field="is_new" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  lay-text="是|否">
                            </div>
                          </a>
                          <?php else: ?>
                          <a href="javascript:;">
                            <div class="layui-input-block"  style="margin-left:unset;">
                              <input type="checkbox"  data-do="_state" data-field="is_new" data-ids="<?php echo $v['id']; ?>"  data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  name="close" lay-skin="switch"  lay-text="是|否">
                            </div>
                          </a>
                          <?php endif; ?>
                        </td>
                        <td>

                          <?php if($v['state'] == 1): ?>
                          <a href="javascript:;">
                            <div class="layui-input-block" style="margin-left:unset;">
                              <input type="checkbox" checked="" data-do="_state"   name="open" lay-skin="switch" data-field="state" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  lay-text="正常|禁用">
                            </div>
                          </a>
                          <?php else: ?>
                          <a href="javascript:;">
                              <div class="layui-input-block"  style="margin-left:unset;">
                                <input type="checkbox"  data-do="_state" data-field="state" data-ids="<?php echo $v['id']; ?>"  data-url="<?php echo url('index/ask_cate'); ?>"  lay-filter="switchTest_hash"  name="close" lay-skin="switch"  lay-text="正常|禁用">
                              </div>
                          </a>
                          <?php endif; ?>
                        </td>

                        <td>
                          <a href="#/website/addask_cate?id=<?php echo $v['id']; ?>" class="point"><i class="layui-icon" title="编辑数据">&#xe642;</i></a>
                          <a href="javascript:;" data-ids="<?php echo $v['id']; ?>" data-url="<?php echo url('index/ask_cate'); ?>" id="delAsk_cate"><i  class="layui-icon" title="删除数据">&#xe640;</i></a>
                        </td>
                      </tr>
                      <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
              <div class="layui-tab-item">
                ssss
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!--索引表单-->
<script type="text/html" id="search_tpl_hash">
  <form class="layui-form" action="">
    <div class="layui-form-item">
      <label class="layui-form-label">菜单名称/id/</label>
      <div class="layui-input-block">
        <input type="text" name="title" placeholder="请输入用户名.." autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">城市</label>
      <div class="layui-input-block">
        <select name="city">
          <option value=""></option>
          <option value="0">北京</option>
          <option value="1">上海</option>
          <option value="2">广州</option>
          <option value="3">深圳</option>
          <option value="4">杭州</option>
        </select>
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">是否禁用</label>
      <div class="layui-input-block">
        <input type="checkbox" name="switch" lay-skin="switch">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">性别</label>
      <div class="layui-input-block">
        <input type="radio" name="sex" value="男" title="男">
        <input type="radio" name="sex" value="女" title="女" checked>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-input-block">
        <button class="layui-btn" lay-submit lay-filter="formDemo_hash"><i class="layui-icon">&#xe615;</i> 搜索</button>
        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
      </div>
    </div>
  </form>
</script>

<!--依赖-->
<script type="text/javascript" src="/static/admin/layui_rely.js"></script>
<script>

    layui.config({
        base: '/src/js/'
    }).use(['jquery', 'mockjs', 'table', 'sidebar', 'form'], function () {
        var $ = layui.jquery,
            sidebar = layui.sidebar,
            form = layui.form;
        var table = layui.table;
        //转换静态表格
        table.init('demo', {
            size: 'sm'
            ,height: 500 //设置高度
            ,limit: 10 //注意：请务必确保 limit 参数（默认：10）是与你服务端限定的数据条数一致
            //支持所有基础参数
        });

        $('#search_hash').on('click', function () {
            var that = this;
            // console.log($('#search_tpl_hash').html());
            sidebar.render({
                elem: that,
                content: $('#search_tpl_hash').html(),
                title: '搜索',
                shade: true,
                // shadeClose:false,
                // direction: 'left'
                // dynamicRender: false,
                // url: 'views/member/all/search.html',
                width: '500px', //可以设置百分比和px
                done: function () {
                    console.log('ccc');
                    form.render();

                    //监听提交
                    form.on('submit(formDemo_hash)', function (data) {
                        // layer.msg(JSON.stringify(data.field));
                        table.reload('demo_hash', {
                            where: data.field
                        });
                        return false;
                    });
                }
            });
        });
    });

</script>

<script>
    $(".layui-tab-title li").click(function(){
        var picTabNum = $(this).index();
        // console.log("当前图片标题下标是："+picTabNum);
        sessionStorage.setItem("picTabNum",picTabNum);
    });
    $(function(){
        var getPicTabNum = sessionStorage.getItem("picTabNum");
        $(".layui-tab-title li").eq(getPicTabNum).addClass("layui-this").siblings().removeClass("layui-this");
        $(".layui-tab-content>div").eq(getPicTabNum).addClass("layui-show").siblings().removeClass("layui-show");
    })
</script>
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
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delPro', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });
    $(document).on('click', '#delPro_cate', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delBanner', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity_cate', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delActivity', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNews_cate', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNews', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delReal_show', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });


   $(document).on('click', '#delAsk', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delNotes', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

    $(document).on('click', '#delVideo', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delMachine', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
    });

   $(document).on('click', '#delUser', function() {
        $.fn.repost( $(this).attr('data-url'),{ do: 'delFind', id: $(this).attr('data-ids')});
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
            ,size: 200
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



</script>
