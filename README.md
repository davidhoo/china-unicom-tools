China unicom tools
=================

The China unicom tools.

Requirement
---------
* PHP 7+
* phpoffice/phpspreadsheet
* symfony/symfony
* Composer [https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx]

Installation - source file
---------

```bash
git clone git@github.com:davidhoo/china-unicom-tools.git
cd china-unicom-tools
composer install
chmod +x ./chut
```

Installation - binary file
---------
```bash
curl -s -o china-unicom-tools.v1.0.0.tar.gz 'https://codeload.github.com/davidhoo/china-unicom-tools/tar.gz/v1.0.0'
tar zxvf china-unicom-tools.v1.0.0.tar.gz
cd china-unicom-tools.v1.0.0/bin
chmod +x chut
mv chut /usr/local/bin/
```

Usage
---------

```bash
./chut --help

Usage:
  ana [options]
  analytic
  analytics
  ana -f file [-i ipfile] [-u urlfile] [-r regex pattern]

Options:
  -i, --ip[=IP]                The full path for ip white list file [default: "./weibo.ip"]
  -f, --file=FILE              File name
  -u, --url[=URL]              The full path for url white list file [default: "./weibo.url"]
  -r, --regex[=REGEX]          The pattern for start time
  -s, --sheetname[=SHEETNAME]  Worksheet's name [default: "移动用户上网记录详单"]
  -h, --help                   Display this help message
  -q, --quiet                  Do not output any message
  -V, --version                Display this application version
      --ansi                   Force ANSI output
      --no-ansi                Disable ANSI output
  -n, --no-interaction         Do not ask any interactive question
  -v|vv|vvv, --verbose         Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  Analytic the chinaunicom access details's file
  
./chut ana -f yourfile [-i whitelist.ip] [-u whitelist.url] [-r pattern]

./chut ana -f ~/Downloads/test.xls -i ~/Downloads/weibo.ip -u ~/Downloads/weibo.url                                                                                                                                    22:38:07
+------------+------------+------------+-------------+
| Stat                                               |
+------------+------------+------------+-------------+
| Out sum    | In sum     | Total      | Out percent |
+------------+------------+------------+-------------+
|  236.49 kb |      49 mb |   49.23 mb |  0.47%      |
+------------+------------+------------+-------------+
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
| Top 5 in the white list                                                                                                                                              |
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
| IP              | Traffic    | Percent | UA                                                                      | Url                                               |
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
| 36.250.76.195   |    25.1 mb | 50.99%  | Dalvik/2.1.0 (Linux; U; Android 5.1; GN3003 Build/LMY47D),okhttp/3.4.1, | wscdn.wbimg.xiaoka.tv                             |
| 153.3.235.100   |   21.87 mb | 44.42%  | ,okhttp/3.4.1,GN3003_5.1_weibo_7.4.0_android                            | alcdn.img.xiaoka.tv,ww1.sinaimg.cn,wx3.sinaimg.cn |
| 218.11.0.14     |   813.3 kb |  1.61%  |                                                                         | api.yizhibo.com                                   |
| 101.71.100.123  |  344.14 kb |  0.68%  |                                                                         | 101.71.100.123,h5.sinaimg.cn                      |
| 123.125.105.231 |  178.78 kb |  0.35%  | ,GN3003_5.1_weibo_7.4.0_android,Mozilla/5.0 (Linux; Android 5.1; GN3003 | 123.125.105.231,api.weibo.cn,m.weibo.cn           |
|                 |            |         | Build/LMY47D; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0    |                                                   |
|                 |            |         | Chrome/47.0.2526.1                                                      |                                                   |
+-----------------+------------+---------+-------------------------------------------------------------------------+---------------------------------------------------+
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
| Top 10 out the white list                                                                                                                        |
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
| IP              | Traffic    | Percent | UA                                                                      | Url                           |
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
| 124.160.136.171 |   45.61 kb |  0.09%  | Mozilla/4.0 (compatible; ZEGO Android 2.0; 3566630470; 9),Mozilla/4.0   | flexible.zego.im              |
|                 |            |         | (compatible; ZEGO Android 2.0; 3566630470; 10),Mozilla/4.0 (compatible; |                               |
|                 |            |         | ZEGO Android 2.0; 3566630470; 11)                                       |                               |
| 101.69.121.102  |    40.1 kb |  0.08%  |                                                                         | 101.69.121.102                |
| 140.205.174.76  |   22.27 kb |  0.04%  |                                                                         | restapi.amap.com              |
| 153.3.235.95    |   21.24 kb |  0.04%  |                                                                         | nbsdk-baichuan.alicdn.com     |
| 60.217.22.137   |   17.44 kb |  0.03%  | okhttp/3.4.1                                                            | sdkoptedge.chinanetcenter.com |
| 183.232.42.230  |   15.71 kb |  0.03%  |                                                                         | stats.jpush.cn                |
| 106.11.13.1     |    7.92 kb |  0.02%  | AMAP_Location_SDK_Android 2.5.1                                         | apilocate.amap.com            |
| 140.205.252.7   |    7.91 kb |  0.02%  | AMAP_Location_SDK_Android 2.5.1                                         | apilocate.amap.com            |
| 106.11.176.5    |    5.34 kb |  0.01%  |                                                                         | wgo.mmstat.com                |
| 123.125.106.226 |    5.33 kb |  0.01%  |                                                                         | 123.125.106.226               |
+-----------------+------------+---------+-------------------------------------------------------------------------+-------------------------------+
```