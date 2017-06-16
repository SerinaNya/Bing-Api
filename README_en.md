# Laji Bing Daily Picture API

如果你想要阅读中文版本，[请点这里](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/blob/master/README.md)。

![PHP](https://img.shields.io/badge/PHP-5.2.0+-blue.svg) ![License](https://img.shields.io/badge/License-GPL--3.0-brightgreen.svg) 

**Developer is a Chinese and his English is not very well, so there may be some errors in this document. If U want help him translate this document, please open an issue to tell me.**

Are U puzzled by how to use Bing Daily Picture in your website or any other purpose?  Now U can use Laji Bing Daily Picture API to do that!

## What is Laji Bing Daily Picture API

It's a PHP program to get Bing Daily Picture. You can use it on many place, such as set Bing Daily Picture to your wallpaper with Wallpaper Engine automatically when you wake your computer up.

## Features???

- There are only 2 PHP files in core part. Including annotations, totaling only 46 lines of code.

- Just give user a HTTP 302 respones to Bing:
  - Very fast.
  - Very little data traffic.
  - U needn't worry about too much pictures use too much storage space.
- It use a magical JSON API, U can even get tomorrow's picture after 16 o'clock in the day!
- Update speed is fast also. U can also check updates easily!
- And more features are waiting you to explore...

## How to install Laji Bing Daily Picture API and use it?

### If you want to install it on your own server, you must have the following conditions:

- A web server, such as Apache, Nginx, IIS or any other web server which support PHP.
- PHP 5.2.0 + with JSON extension

### Install Laji Bing Daily Picture API

1. Download it [here](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/releases) and extract it to your www root.
2. Rename ``settings.php.example`` to ``settings.php`` and edit it.
3. Navigate to ``http://your-domain.com/bingpic.php`` in your browser and check if it returns an error.
4. That's OK! Your API is working now.

### How to use

You can add your API URL(``http://your-domain.com/bingpic.php``) to your program which support add pictures with URL, it will return today's or the number of days ago you set in ``settings.php``. Such as HTML ``<img>`` code:

``<img src="http://your-domain.com/bingpic.php" />``

Or Markdown:

``![Bing Daily Picture](http://your-domain.com/bingpic.php)``

![Bing Daily Pictute](https://www.littleqiu.net/bingpic/bingpic.php)

You can add ``daysago`` query to your API URL to get pictures which is past's. You can even set ``-1`` to this query to get tomorrow's picture after 16 o'clock!

e.g. ``<img src="http://your-domain.com/bingpic.php?daysago=1" /> // Get yesterday's picture``

![Yesterday Picture](https://www.littleqiu.net/bingpic/bingpic.php?daysago=1)

e.g. ``<img src="http://your-domain.com/bingpic.php?daysago=-1" /> // Get tomorrow's picture``

![Tomorrow Picture](https://www.littleqiu.net/bingpic/bingpic.php?daysago=-1)

You can even set Bing Daily Picture to your wallpaper with Wallpaper Engine automatically when you wake your computer up!

![Wallpaper](https://www.littleqiu.net/wp-content/uploads/2017/06/图像-2.png)

![Wallpaper Engine](https://www.littleqiu.net/wp-content/uploads/2017/06/图像-3.png)

### Update

You can navigate to ``http://your-domain.com/check-update`` to check updates since v1.3 release.

You can custom update source in ``settings.php`` since update checker v1.2.

If there is a new version, you need download the new version [here](https://github.com/Minecraft-LittleQiu/laji-bing-pic-api/releases) and extract it to your wwwroot to replace files.

## About test version

Test version is the developing version. It update faster than release version. But it is still developing, you should think carefully before you install test version on your server.

## Copyright and License

Copyright (c) 2017 [@Little_Qiu](https://www.littleqiu.net) - Released under the GUN General Public License v3.0.
