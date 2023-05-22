# 安装
系统环境：CentOS 7 + 宝塔面板

1. 克隆网站代码
```bash
cd /www/wwwroot
git clone https://github.com/masterking32/WoWSimpleRegistration
```

2. 修改config.php
可以通过宝塔的文件管理器修改，会比较方便点

3. 在宝塔面板里添加网站

# 找回密码

我们以126邮箱的SMTP服务举例。
##### 126邮箱SMTP服务设置
1. 网页登录126邮箱，找到邮箱设置
2. 找到SMTP配置项
3. 开启SMTP服务
4. 创建授权码（授权码是用于登录第三方邮件客户端的专用密码）
5. 手机扫描二维码发送短信完成验证，点击我已发送就可以创建新的授权码
6. 生成的授权码要保存好，只能看一次，永久有效

##### 网站后台设置
1. 打开 `application/config/config.php` 文件
2. 根据以下说明填写配置
```php
$config['smtp_host'] = 'smtp.126.com';
$config['smtp_port'] = 587;
$config['smtp_auth'] = true;
$config['smtp_user'] = 'user@example.com'; // 你的邮箱
$config['smtp_pass'] = 'SECRET'; // 上一步生成的授权码
$config['smtp_secure'] = 'tls'; // 如果是ssl，改成ssl
$config['smtp_mail'] = 'no-reply@126.com';
```

参考链接: https://blog.csdn.net/weloveut/article/details/121008718

# HCaptcha
https://www.hcaptcha.com/
