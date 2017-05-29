# 辣鸡 Bing 今日美图 API

轻巧的 Bing 今日美图 API，等待您的使用。

## 什么是辣鸡 Bing 今日美图 API？

辣鸡 Bing 今日美图 API 是由 [Little_Qiu](https://www.littleqiu.net) 从 [GPlane](http://www.gplane.win/) 为 [Blessing Skin Server](https://github.com/printempw/blessing-skin-server) 编写的[多种首页样式](http://plugin.gplane.win/home/market/plugin/1) 插件中抠出来的相关代码加以修改后制成的一个轻量级的获取 Bing 今日美图的 API 程序。

#### 这是干什么的？

精美的图片总是不够多，所以 Bing 今日美图就出现了。  
但是 Bing 今日美图并没有提供 API 给那些需要的人，且在 Bing 首页下载的图片还有 Bing 的水印。虽然已有许多可以自动获取每日的 Bing 今日美图的公众 API 及对应的程序，然而这些公众 API 和程序或多或少有些缺点，比如公众 API 的速度和稳定性无法保证、程序会在服务器存储太多图片导致存储空间爆炸等。让许多小伙伴非常头疼。  
而我就是这些小伙伴中的一个。为了解决这些问题，我开发了『辣鸡 Bing 今日美图 API』。

#### 这个 API 和其他的有什么不一样吗？

有。

- 只有一个 PHP 文件，轻巧的不像实力派。
- 不在本地存储每日的 Bing 今日美图图片，完全不用担心存储的图片太多而导致存储空间爆炸。
- 只是返回给用户一个 302 到 Bing 的今日美图图片的真实地址，也不用担心服务器流量爆炸。
- 因为只是返回一个 302 请求到 Bing，而 Bing 本身的速度是非常快的，所以不用担心图片拖慢网页加载。
- 可能还有更多...

