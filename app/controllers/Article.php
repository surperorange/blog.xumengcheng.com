<?php
namespace app\controllers;

use thinkview\base\Controller;
use yunyinqing\datacenter\ArticleModule;
use yunyinqing\datacenter\ObjectModule;

class Article extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index($id = 0)
    {
        $siteTitle = ObjectModule::getObject('博客名称');
        $siteBottom = ObjectModule::getObject('博客底部');

        $article = ArticleModule::getArticle($id);

        $this->data['bottom'] = $siteBottom['data']['content'];

        $this->data['article'] = $article['data'];
        $this->data['title'] = $article['data']['title'].' - '.$siteTitle['data']['content'];
        $this->data['description'] = $article['data']['description'];
        $this->render($this->data);
    }
}