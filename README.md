# 辣鸡 Bing 今日美图 API

轻巧的 Bing 今日美图 API，回应您的吩咐。

## 什么是辣鸡 Bing 今日美图 API？

辣鸡 Bing 今日美图 API 是由 [@Little_Qiu](https://www.littleqiu.net) 用从 [@GPlane](http://www.gplane.win/) 为 [Blessing Skin Server](https://github.com/printempw/blessing-skin-server) 编写的[多种首页样式](http://plugin.gplane.win/home/market/plugin/1) 插件中抠出来的相关代码加以修改后制成的一个轻量级的获取 Bing 今日美图的 API 程序。感谢 @GPlane 在开发过程中对我的帮助。

因为在写这个程序之前我几乎没有接触过 PHP，所以 Bug 在所难免。如果你在使用中遇到了什么问题，可以提交 Issue（不过八成不会被我解答及解决...）。如果有大佬发现了哪里有虫，也烦请在抓出来后提交个 Pull Request。

### 这是干什么的？

精美的图片总是不够多，所以 Bing 今日美图就出现了。

但是 Bing 今日美图并没有提供 API 给那些有需要的人，且在 Bing 首页下载的图片还有 Bing 的水印。虽然已有许多可以自动获取每日的 Bing 今日美图的公众 API 及对应的程序，然而这些公众 API 和程序或多或少有些不足，比如公众 API 的速度和稳定性无法保证、程序会在服务器存储太多图片导致存储空间爆炸等。这让许多小伙伴非常头疼。

而我就是这些小伙伴中的一个。为了解决这些问题，我开发了「辣鸡 Bing 今日美图 API」。你可以使用它获取每天的无水印的 Bing 今日美图，分辨率为 1920*1080。它并不会将每日的图片存储到本地再返回给用户，而是获取每天的 Bing 今日美图的实际地址然后返回一个 HTTP 302 响应给用户，由用户的浏览器跳转到 Bing 今日美图的实际地址加载图片。

### 这个 API 和其他的有什么不一样吗？

当然有。

- 只有一个 PHP 文件，代码仅有 25 行，轻巧的不像实力派。
- 只是返回给用户一个 302 到 Bing 的今日美图图片的真实地址：
  - 不在服务器端存储每天的图片，不用担心存储空间爆炸。
  - 耗费流量极少，不用担心一夜之间房子归~~移动~~ IDC。
  - 速度非常快，不用担心图片拖慢网页加载速度。
- 可能还有更多...

## 我要怎么部署和使用这个 API？

辣鸡 Bing 今日美图 API 对配置的要求非常低且不需要 URL 重写，基本上有 PHP 和 Web 引擎就能跑。

### 环境要求

- 一台带有 Apache 或 Nginx 或 IIS 或其他 Web 引擎的主机
- PHP 版本≥ 5.2.0
- PHP 的 JSON 扩展

### 部署教程

1. 检查你的主机是否符合运行辣鸡 Bing 今日美图 API 的环境要求
2. [在这里](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/releases)下载辣鸡 Bing 今日美图 API，并放置到你的 Web 引擎的站点目录下
3. 安装完成后，访问 ``http://your-domain.com/bingpic.php`` 检查是否有报错
4. 还有别的步骤么——没有了！

### 如何使用？

你可以在任何需要的地方引用 ``bingpic.php``，会直接显示当天的 Bing 今日美图。

e.g. ``<img src="http://your-domain.com/bingpic.php" />``

![Example](https://www.littleqiu.net/bingpic.php)

你也可以这样用：

![Example](https://www.littleqiu.net/wp-content/uploads/2017/05/QQ截图20170531201131.png)

总之，能使用链接引用图片的地方就能用！
## **版权**

辣鸡 Bing 今日美图 API 是基于 GUN General Public License v3.0 开放源代码的自由软件，你可以遵照 GPLv3 协议来二次开发并发布这一程序。

而 Bing 今日美图为微软公司的产品，使用时请遵守相关规定及法律。**虽然获取到的图片上没有水印，但是我仍然建议你在醒目的地方加上一句“图片来自 Bing 今日美图”**。 

程序原作者为 [@Little_Qiu](https://www.littleqiu.net/)，转载请注明。
