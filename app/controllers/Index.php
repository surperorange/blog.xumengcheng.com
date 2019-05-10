<?php
namespace app\controllers;

use thinkview\base\Controller;
use yunyinqing\datacenter\ArticleModule;
use yunyinqing\datacenter\ObjectModule;

class Index extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
        $siteTitle = ObjectModule::getObject('博客名称');
        $siteDescription = ObjectModule::getObject('博客描述');
        $siteBottom = ObjectModule::getObject('博客底部');

        $articleList = ArticleModule::getArticleList();
        $banner = ObjectModule::getObject('博客首页Banner图');

        $this->data['title'] = $siteTitle['data']['content'];
        $this->data['description'] = $siteDescription['data']['content'];
        $this->data['bottom'] = $siteBottom['data']['content'];

        $this->data['banner'] = $banner['data']['content'];
        $this->data['articlelist'] = $articleList['data'];

        $this->render($this->data);
    }
}