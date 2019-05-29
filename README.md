## 茗记 · 博客系统

### #体验

https://blog.xumengcheng.com

![茗记截图](https://github.com/surperorange/remember-blog/blob/master/screenshot.png)

### #优势

易于使用：无论您是开发人员还是普通用户都可以非常方便的使用。

二次开发：得益于thinkview、twig模板引擎和云引擎的优势，茗记博客系统的二次开发非常简单，哪怕你是一个新手也可以轻松打造出自己适合自己的样式。

响应式设计：文章内容使用markdown渲染，在任何设备上都能确保完美的浏览体验。

手机端管理：即便是在旅行途中也可以轻松的上传和更新文章。

服务端渲染：茗记博客系统的网页端采用服务端渲染，对于seo非常有利，你可能会好奇为什么叫网页端渲染因为如果你想使用前端渲染也是完全可行的，因为所有的一切都是基于接口开发的。

不断更新：只要您跟踪我们的git仓库，随时更新到最棒的体验。

### #安装手册

如果您是一个开发人员可以参考下方安装方法部署至自己的服务器。

- 申请一个云引擎（云引擎官网：https://yunyinqing.com ）

- 将本代码clone到您的服务器并且在根目录下运行

        composer install

- 服务器要求：PHP7.0+,开启CURL扩展。

- 将/vendor/yunyinqing/datacenter/yunyinqing/datacenter/config.php中的appid改为你的云引擎appid

- 在云引擎助手上的对象模块创建三个对象
    
    - 博客名称 （类型为文字）
    - 博客描述（类型为文字）
    - 博客首页Banner图（类型为图片）

- 大功告成！
