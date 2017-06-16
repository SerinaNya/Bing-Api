# 辣鸡 Bing 今日美图 API

For English version, please [click here](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/blob/master/README_en.md).

![PHP](https://img.shields.io/badge/PHP-5.2.0+-blue.svg) ![License](https://img.shields.io/badge/License-GPL--3.0-brightgreen.svg)

轻巧的 Bing 今日美图 API，回应您的吩咐。

## 什么是辣鸡 Bing 今日美图 API？

> 辣鸡 Bing 今日美图 API 是由 [@Little_Qiu](https://www.littleqiu.net) 用从 [@GPlane](http://www.gplane.win/) 为 [Blessing Skin Server](https://github.com/printempw/blessing-skin-server) 编写的[多种首页样式](http://plugin.gplane.win/home/market/plugin/1) 插件中抠出来的相关代码加以修改后制成的一个轻量级的获取 Bing 今日美图的 API 程序。感谢 @GPlane 在开发过程中对我的帮助。

因为在写这个程序之前我几乎没有接触过 PHP，所以 Bug 在所难免。如果你在使用中遇到了什么问题，可以提交 Issue（不过八成不会被我解答及解决...）。如果有大佬发现了哪里有虫，也烦请在抓出来后提交个 Pull Request。

### 这是干什么的？

> 精美的图片总是不够多，而 Bing 今日美图则是获取精美的图片的神器。

Bing 今日美图是 Microsoft 公司推出的图片服务，每天更新一张非常精美的图片，Bing 搜索首页的每日更新的背景图片就是 Bing 今日美图。但是 Bing 今日美图并没有提供 API 给那些有需要的人，且在 Bing 首页下载的图片还有 Bing 的水印。虽然已有许多可以自动获取每日的 Bing 今日美图的公众 API 及对应的程序，然而这些公众 API 和程序或多或少有些不足，比如公众 API 的速度和稳定性无法保证、程序会在服务器存储太多图片导致存储空间爆炸等，且许多程序的下载地址已经失效。这让许多小伙伴非常头疼。

而我就是这些小伙伴中的一个。为了解决这些问题，我开发了「辣鸡 Bing 今日美图 API」。你可以使用它获取每天的无水印的 Bing 今日美图，分辨率为 1920*1080。它并不会将每日的图片存储到本地再返回给用户，而是获取每天的 Bing 今日美图的实际地址然后返回一个 HTTP 302 响应给用户，由用户的浏览器跳转到 Bing 今日美图的实际地址加载图片。

### 这个 API 和其他的有什么不一样吗？

当然有。

- 截至目前稳定版核心部分只有 2 个 PHP 文件，包括注释总计仅有 46 行代码，轻巧的不像实力派。
- 只是返回给用户一个 302 到 Bing 的今日美图图片的真实地址：
  - 不在服务器端存储每天的图片，不用担心存储空间爆炸。
  - 耗费流量极少，不用担心一夜之间房子归~~移动~~ IDC。
  - 速度非常快，不用担心图片拖慢网页加载速度。 
- 用途方面简直就是万金油，你甚至可以配合 Wallpaper Engine 自动获取每日的 Bing 今日美图并设置为你的电脑桌面壁纸。
- 使用的是一个非常神奇的 JSON API，你甚至可以在当天 16 时后获取到明天的 Bing 今日美图！
- 可以很方便地检查更新，~~自动更新正在开发中~~辣鸡开发者表示弃坑自动更新啦！不过更新邮件提醒可以有...
- 可能还有更多...

## 我要怎么部署和使用这个 API？

辣鸡 Bing 今日美图 API 对配置的要求非常低且不需要 URL 重写，基本上有 PHP 和 Web 引擎就能跑。

### 环境要求

- 一台带有 Apache 或 Nginx 或 IIS 或其他 Web 引擎的主机
- PHP 版本≥ 5.2.0
- PHP 的 JSON 扩展

### 部署教程

1. 检查你的主机是否符合运行辣鸡 Bing 今日美图 API 的环境要求
2. [在这里](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/releases)下载辣鸡 Bing 今日美图 API 并解压
3. 将 ``settings.php.example`` 重命名为 ``settings.php`` 并修改其中的设置
4. 将所有文件放置在你在 Web 引擎中设置的站点目录（虚拟主机用户是上传至站点根目录）
5. 访问 ``http://your-domain.com/bingpic.php`` 检查是否有报错
6. 还有别的步骤么——没有了！

### 如何使用？

你可以在任何可以使用 URL 添加图片的地方引用 ``http://your-domain.com/bingpic.php``，会直接显示当天的或您在 ``settings.php`` 中设置的天数之前的 Bing 今日美图。

若您没有在 ``settings.php`` 中开启固定时间，您也可以在 URL 后加上 ``?daysago=x`` 或 ``?daysago=-1`` 获取 x 天前或明天的 Bing 今日美图。

e.g.  ``<img src="http://your-domain.com/bingpic.php" />`` 获取当天的 Bing 今日美图

![Eexample](https://www.littleqiu.net/bingpic/bingpic.php)

e.g. ``<img src="http://your-domain.com/bingpic.php?daysago=1" />`` 获取昨天的 Bing 今日美图

![昨天的 Bing 今日美图](https://www.littleqiu.net/bingpic/bingpic.php?daysago=1)

e.g. ``<img src=http://your-domain.com/bingpic.php?daysago=-1 />`` 获取明天的 Bing 今日美图，仅当天下午 16 时后有效

![明天的 Bing 今日美图](https://www.littleqiu.net/bingpic/bingpic.php?daysago=-1)

你也可以这样用：

![Example](https://www.littleqiu.net/wp-content/uploads/2017/06/QQ截图20170531201131.png)

 你甚至可以这么玩：

> （想知道怎么玩的？[戳这里](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/wiki/%E5%B0%86-Bing-%E4%BB%8A%E6%97%A5%E7%BE%8E%E5%9B%BE%E8%AE%BE%E4%B8%BA%E7%94%B5%E8%84%91%E6%A1%8C%E9%9D%A2%E5%A3%81%E7%BA%B8)）

![Wallpaper](https://www.littleqiu.net/wp-content/uploads/2017/06/图像-2.png)

![Wallpaper Engine](https://www.littleqiu.net/wp-content/uploads/2017/06/图像-3.png)

![还有这种操作？！](https://www.littleqiu.net/wp-content/uploads/2017/06/Cache_-604f82923c68bb83..jpg)![就是有这种操作！](https://www.littleqiu.net/wp-content/uploads/2017/06/Cache_6420743cd7bcf867..jpg)

## 更新 API

自稳定版 v1.3开始，你可以通过访问 ``http://your-domain.com/check-update`` 来检查是否有更新。**但不能自动检查更新或自动更新！**

自更新检查工具 v1.2 开始，你可以通过修改 ``settings.php`` 中的相关设置项来更改更新源。更新源列表请看[如何搭建更新源 & 更新源列表](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/wiki/如何搭建更新源-&-更新源列表)。

若有更新版本，你需要从 [Releases](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/releases) 中下载最新版本的压缩包并解压，将所有文件上传至你的 API 目录覆盖所有文件，更新即完成。

## 关于测试版

测试版（``bingpic-test.php``）是开发中的版本，更新速度比稳定版（``bingpic.php``）要快些，但可能会包含一些致命的 Bug 导致无法正常运行。所以请在将测试版部署在生产环境前三思。

测试版的部署方法和用法同稳定版。测试版不会在 [Releases](https://gtihub.com/Minecraft-LittleQiu/laji-bing-pic-api/releases) 中打包发布，你需要使用 Git 从 GitHub 上 Clone 一份即可使用。

~~若无特别说明，测试版的配置文件（``settings.php``）与稳定版的通用。~~

测试版 v1.3-test 开始新增了对配置文件能否兼容的检测（笨办法，我会在开发时在程序中设置兼容性），若能够兼容稳定版的配置文件则会加载稳定版的，若不能兼容则会自动加载开发版的配置文件（``settings-test.php``）。

## **版权**

辣鸡 Bing 今日美图 API 是基于 GUN General Public License v3.0 开放源代码的自由软件，你可以遵照 GPLv3 协议来二次开发并发布这一程序。

而 Bing 今日美图为微软公司的产品，使用时请遵守相关规定及法律。**虽然获取到的图片上没有水印，但是我仍然建议你在醒目的地方加上一句“图片来自 Bing 今日美图”**。 

程序原作者为 [@Little_Qiu](https://www.littleqiu.net/)，转载请注明。
