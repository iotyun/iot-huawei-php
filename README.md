# 项目说明

<a name="rkl83"></a>
## 一、项目说明
适用于华为、中国电信物联网平台北向应用对接的PHP版本SDK。
<a name="C7uLv"></a>
## 二、项目由来
项目由原华为提供的PHP版SDK继续开发而来，不知道什么原因华为官方平台的PHP版本SDK下线了，我们依照以前版本的SDK开发了本项目。与原华为SDK相比主要改变为：<br />1、取消了华为原项目中的日志记录功能，现在一般的开发框架都自带了日志功能，如果您需要记录日志，请使用您自己框架的日志功能自行实现。<br />2、改为composer安装，遵循psr-4自动加载。
<a name="Sb3ac"></a>
## 三、项目限制
1、本项目只实现了华为与电信物联网平台的调用，返回的信息将不会进行存储。例如获取到平台的accessToken后您需要自行存储到自己的系统；调用接口是必须提供正确的accessToken；accessToken到期不会自动刷新。<br />2、本项目返回的数据全部为对象，你可以根据自己项目的需要自行进行数据格式转换。<br />3、本项目不实现物联网平台的回调接口，回调接口需要您自己实现。<br />4、本项目不依托于任何PHP开发框架，但我们仅在我们自己的物联网开发框架及thinkphp框架进行了测试，如果您使用中发现任何问题，请向我们提交，我们将尽快修复。<br />5、由于本项目移植于华为已下架的SDK，我们对物联网平台API进行了更新，但是不保证使用最新技术、最高性能的编码方式。<br />_后期我们将提供一个完整的框架，实现__accessToken的自动存储及刷新、回调信息直接输出、日志存储、多用户支持等。新框架将以本项目作为依赖包，我们分为两个项目是为了方便使用自己开发框架，因此您现在使用本项目并不影响您以后使用我们的完整框架。_
<a name="m38Mn"></a>
## 四、安装方法
composer安装
```bash
$ composer require iotyun/iot-huawei-php
```
<a name="JDpvD"></a>
## 五、使用方法
使用use导入命名空间。例如以下是获取accessToken及刷新Token的示例。
```php
<?php
declare (strict_types = 1);

namespace app\index\controller;

use iotyun\huaweiiot\Huaweiiot;
use iotyun\huaweiiot\Auth;
class Index
{
    public function index()
    {
		$Authorization = array('platformIp' => '180.101.147.89', 'platformPort' => '8743', 'appId' => 'nPJmWXRg28FyLUAyd9jlixOmq0Ya', 'secret' => 'WsSHJrBKq8mDfsr_zAuQwAIFOMQa', );

		echo Huaweiiot::getVersion();
		echo '<br>';
		$auth = Auth::login($Authorization);
		echo $auth;
		echo '<br>';
		$Authorization['refreshToken'] = $auth->refreshToken;
		$refreshToken = Auth::refreshToken($Authorization);
		echo $refreshToken;
		echo '<br>';
    }
}
```
<a name="o1Ycx"></a>
## 六、技术支持
1、开发文档<br />[https://www.yuque.com/iotyun.vip/iot-huawei-php/bko2qi](https://www.yuque.com/iotyun.vip/iot-huawei-php/bko2qi)<br />2、微信交流群<br />![contact_me_qr (1).png](https://cdn.nlark.com/yuque/0/2020/png/1093907/1587578479538-b0d434ab-50d1-4ac6-9017-ece96df3e356.png#align=left&display=inline&height=396&margin=%5Bobject%20Object%5D&name=contact_me_qr%20%281%29.png&originHeight=396&originWidth=396&size=101102&status=done&style=none&width=396)<br />

<a name="DIaU7"></a>
## 七、关于我们
一个有着多年物联网应用产品开发的团队，拥有GPRS、WIFI、zigbee、蓝牙、NB-IOT、modbus、lora通讯开发经验，开发成功并正在运营的项目有共享充电桩、共享陪护床、远程抄表、空调节能控制、自助售卖机、移动跟踪等。
