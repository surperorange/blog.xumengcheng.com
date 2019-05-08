<?php
namespace app\controllers;

use thinkview\base\Controller;

use yunyinqing\datacenter\ArticleModule;
use yunyinqing\datacenter\ObjectModule;

class article extends Controller
{
    protected $data = [
        'title'=>'',
        'description'=>''
    ];

    // 首页方法，测试框架自定义DB查询
    public function index($id = 0)
    {
        $siteTitle = ObjectModule::getObject('博客名称');
        $article = ArticleModule::getArticle($id);

        $this->data['article'] = $article['data'];
        $this->data['title'] = $article['data']['title'].' - '.$siteTitle['data']['content'];
        $this->data['description'] = $article['data']['description'];
        $this->render($this->data);
    }
}