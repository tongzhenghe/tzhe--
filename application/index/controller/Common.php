<?php/** * Created by PhpStorm. * User: Administrator * Date: 2019/5/9 * Time: 15:56 */namespace app\index\controller;use think\Controller;use think\Db;use think\Request;class Common extends Controller{    public  function  _initialize()    {        //网站设置        $web_setting = Db::name('web_setting')->where('id', 1)->find();        $contact = Db::name('contact')->find();        if (!empty($contact['tel'])) $contact['tel'] = json_decode($contact['tel']);        if (!empty($contact['address'])) $contact['address'] = unserialize($contact['address']);        if (!empty($contact['recruit'])) $contact['recruit'] = json_decode($contact['recruit']);        if (!empty($contact['bus'])) $contact['bus'] = json_decode($contact['bus']);        if ($web_setting['seo_title']) $web_setting['seo_title'] = unserialize($web_setting['seo_title']) ;        if ($web_setting['seo_keywords']) $web_setting['seo_keywords'] = unserialize($web_setting['seo_keywords']) ;        if ($web_setting['seo_description']) $web_setting['seo_description'] = unserialize($web_setting['seo_description']);        //服务项目        $where_a  = ['is_del' => 1, 'state' => 1];        $project  = Db::name('project_cate')->where($where_a)->select();        $project = _reSort($project);        foreach ($project as &$v) {            foreach ($v['children'] as &$vc) {               $pro = Db::name('project')->where($where_a)->where(['is_new' => 1])->where(['cateid'=> $vc['id'], 'is_mobile' => 2])->field('name, is_hot')->limit(4)->order('sort asc')->select();                if (!empty($pro)) {                    $vc['child'] = $pro;                }            }        }        //移动最新活动        $activity_n_yd = Db::name('activity')->where('is_new', 1 )            ->field('img, sort')            ->order('sort asc')            ->where($where_a)            ->where(['is_mobile' => 1 ])            ->select();        $this->assign('web_setting', $web_setting);        $this->assign('contact', $contact);        $this->assign('project', $project);        $this->assign('activity_n_yd', $activity_n_yd);        $this->assign('request_action', Request::instance()->action());        //关键字==》 超链接  =》  字体颜色   =》  字体大小   =》         //具体实现逻辑： 后台生成多条关联关键词，  然后在内容中进行检索， 如果匹配则         // 所需字段： id、 re_keywords、 url、    }}