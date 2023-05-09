<?php
/**
 * @author Amin Mahmoudi (MasterkinG)
 * @copyright    Copyright (c) 2019 - 2021, MasterkinG32. (https://masterking32.com)
 * @link    https://masterking32.com
 * @Description : It's not masterking32 framework !
 **/

/*===================================================================
baseurl
    That's your website URL. Example: "https://DOMAIN.COM"
    这是你的网站URL。 例如：“https://DOMAIN.COM”
page_title
    That's your website title. Example: "My WOW Private server!"
    这是您的网站标题。 例如：“我的WOW私人服务器！”
language
    Default website language (english/persian/italian/chinese-simplified/chinese-traditional/swedish/french/german/spanish/korean/russian)
    默认网站语言（英语/波斯语/意大利语/简体中文/繁体中文/瑞典语/法语/德语/西班牙语/韩语/俄语）
supported_langs
	List of languages supported, You can remove each language you don't want!
	if you want to disable language changer, Change it to: $config['supported_langs'] = false;
    支持的语言列表，您可以删除不需要的每种语言！
    如果要禁用语言切换器，请将其更改为：$config ['supported_langs'] = false;
=====================================================================*/
// MAKE SURE USE VALID URL, If you have any issue loading images and template please check this field
// 确保使用有效的URL，如果您在加载图像和模板时遇到任何问题，请检查此字段
$config['baseurl'] = "http://localhost"; 
$config['page_title'] = "全栈魔兽";
$config['language'] = "chinese-simplified";
$config['supported_langs'] = [
	'english' => 'English',
	'persian' => 'Persian',
	'italian' => 'Italian',
	'chinese-simplified' => 'Chinese Simplified',
	'chinese-traditional' => 'Chinese Traditional',
	'swedish' => 'Swedish',
	'french' => 'French',
	'german' => 'German',
	'spanish' => 'Spanish',
	'korean' => 'Korean',
	'russian' => 'Russian'
];
/*===================================================================
If you see a white screen or have an issue, you can enable it to see the errors.
Note that after testing, be sure to disable this option.
如果您看到白屏或遇到问题，可以启用它以查看错误。
请注意，在测试之后，请务必禁用此选项。
=====================================================================*/
// ENABLE Debug mode if you got blank screen or 503 error, to see what happen?
// 如果您得到空白屏幕或503错误，请启用调试模式，以查看发生了什么？
$config['debug_mode'] = false; 
/*===================================================================
Your server information.
您的服务器信息。
realmlist
    Server Realmlist
    服务器列表
patch_location
    If have patch set URL to download our patch here or make that empty
    如果有补丁，请在此处设置URL以下载我们的补丁或使其为空
game_version
    Your game version
    您的游戏版本
=====================================================================*/
$config['realmlist'] = 'logon.myserver.com';
$config['patch_location'] = 'http://mypatch.com/patch.mpq';
$config['game_version'] = '3.3.5a (12340)';
/*===================================================================
Select your server expansion.
选择您的服务器扩展。
If you want to use advance template, Your images and backgrounds will be changed for your expansion.
如果要使用高级模板，则图像和背景将更改为您的扩展。
0 = Classic 怀旧服
1 = The Burning Crusade (TBC) 燃烧的远征
2 = Wrath of the Lich King (WotLK) 巫妖王之怒
3 = Cataclysm (CATA) 大地的裂变
4 = Mist of Pandaria (MOP) 熊猫人之谜
5 = Warlords of Draenor (WOD) 德拉诺之王
6 = Legion 军团再临
7 = BFA (I'm not sure about this one!) 战争之矛 (我不确定这个！)
=====================================================================*/
$config['expansion'] = '2';
/*===================================================================
Core Type:
Core类型
0 = TrinityCore
1 = AzerothCore
2 = AshamaneCore
3 = Skyfire Project
4 = OregonCore
5 = CMangos
10 = etc
=====================================================================*/
$config['server_core'] = 1;
/*===================================================================
If your server is WoD/Legion/BFA you should enable it!
如果您的服务器是WoD / Legion / BFA，则应启用它！
=====================================================================*/
$config['battlenet_support'] = false;
/*===================================================================
If your core password encryption is SRP6, you need to enable it.
For last versions of the TrinityCore(3.3.5/master) you need to enable it. https://git.io/JJRH4 and https://git.io/JJrxq
Enable that if you use the last version of TC.
You need to enable the GMP extension for PHP.

如果您的核心密码加密是SRP6，则需要启用它。
对于TrinityCore（3.3.5 / master）的最新版本，您需要启用它。 https://git.io/JJRH4 和 https://git.io/JJrxq
如果使用TC的最新版本，请启用它。
您需要为PHP启用GMP扩展
=====================================================================
***************** GMP REQUIRED ********************
******Uncomment extension=gmp in your php.ini******

**************** GMP 必须安装 ******************
******在php.ini中取消注释extension=gmp******
=====================================================================*/
$config['srp6_support'] = false; // READ COMMENTS, [Please ENABLE GMP]
/*===================================================================
If you have an issue with top players or online players you can disable them!
如果您的顶级玩家或在线玩家有问题，可以禁用它们！
disable_top_players
    Disable server top players page [true: Hide top players page]
    禁用服务器顶级玩家页面[true：隐藏顶级玩家页面]
disable_online_players
    Disable online players page [true: Hide online players page]
    禁用在线玩家页面[true：隐藏在线玩家页面]
disable_changepassword
    Disable change password
    禁用更改密码
    Change this to true, If you are using SOAP for registration.
    如果您使用SOAP进行注册，请将其更改为true。
=====================================================================*/
$config['disable_top_players'] = false;
$config['disable_online_players'] = false;
$config['disable_changepassword'] = false;
/*===================================================================
Allow to users make account with an email for several accounts (Just work for non-battle.net servers)
允许用户使用电子邮件创建多个帐户（仅适用于非战网服务器）
=====================================================================*/
$config['multiple_email_use'] = false;
/*===================================================================
Template name, You can change it to:
模板名称，您可以将其更改为：
light
advance
icecrown
kaelthas
battleforazeroth
=====================================================================*/
$config['template'] = 'light';
/*===================================================================
SMTP config.
We need this part to send an email. (used for restore password and 2FA)
You can use your own SMTP or Gmail/Yahoo/Hotmail and etc
SMTP配置。
我们需要这部分来发送电子邮件。 （用于恢复密码和2FA）
您可以使用自己的SMTP或Gmail / Yahoo / Hotmail等
smtp_host
    Specify main and backup SMTP servers
    指定主要和备用SMTP服务器
smtp_port
    TCP port to connect to
    要连接的TCP端口
smtp_auth
    Enable SMTP authentication
    启用SMTP身份验证
smtp_user
    SMTP username
    SMTP 用户名
smtp_pass
    SMTP password
    SMTP 密码
smtp_secure
    Enable TLS encryption, `ssl` also accepted
    启用TLS加密，`ssl`也接受
smtp_mail
    Send emails by ...
    通过...发送电子邮件
=====================================================================*/
$config['smtp_host'] = 'smtp1.example.com';
$config['smtp_port'] = 587;
$config['smtp_auth'] = true;
$config['smtp_user'] = 'user@example.com';
$config['smtp_pass'] = 'SECRET';
$config['smtp_secure'] = 'tls';
$config['smtp_mail'] = 'no-reply@example.com';
/*===================================================================
vote_system
投票系统
    You can enable/disable vote system.
    Vote system is a simple and don't have postback or something like that to verify the votes
    If you use Cloudflare and you have issue with IPs and voting, Read this: https://support.cloudflare.com/hc/en-us/articles/200170786
    您可以启用/禁用投票系统。
    投票系统是一个简单的，没有回发或类似的东西来验证投票
    如果您使用Cloudflare并且您的IP和投票有问题，请阅读此文档：https://support.cloudflare.com/hc/en-us/articles/200170786
vote_sites
    Your vote sites and images, must be array.
    您的投票网站和图像，必须是数组。
=====================================================================*/
$config['vote_system'] = true;
$config['vote_sites'] = array(
    array(
        'image' => 'http://www.top100arena.com/hit.asp?id=93137&c=WoW&t=2',
        'site_url' => 'http://www.top100arena.com/in.asp?id=93137'
    ),
    array(
        'image' => 'https://topg.org/topg.gif',
        'site_url' => 'https://topg.org/wow-private-servers/in-479394'
    ),
    array(
        'image' => 'http://www.xtremeTop100.com/votenew.jpg',
        'site_url' => 'http://www.xtremetop100.com/in.php?site=1132364316'
    )
);
/*===================================================================
You can use Image captcha or HCaptcha or Recaptcha v2.
If you want to use Recaptcha v2 or HCaptcha required to enable cURL in your PHP.
** We recommend using HCaptcha. **
captcha_type
    0) Image Captcha
    1) HCaptcha
    2) ReCaptcha v2
    +2) Disable captcha. (DON'T DO THAT!)
For image captcha, you don't need to put anything for captcha_key captcha_secret or captcha_language.
captcha_secret/captcha_secret
    To get key and secret for HCaptcha go to https://hCaptcha.com/?r=6d4f9117ba12
    To get key and secret for Recaptcha go to https://www.google.com/recaptcha
captcha_language
    https://docs.hcaptcha.com/languages
    https://developers.google.com/recaptcha/docs/language

你可以使用图像验证码或HCaptcha或Recaptcha v2。
如果要使用Recaptcha v2或HCaptcha，需要在PHP中启用cURL。
**我们建议使用HCaptcha。**
captcha_type
    0）图像验证码
    1）HCaptcha
    2）ReCaptcha v2
    +2）禁用验证码。 （不要这样做！）
对于图像验证码，您不需要为captcha_key captcha_secret或captcha_language放置任何内容。
captcha_secret/captcha_secret
    要获取HCaptcha的密钥和密钥，请转到https://hCaptcha.com/?r=6d4f9117ba12
    要获取Recaptcha的密钥和密钥，请转到https://www.google.com/recaptcha
captcha_language
    https://docs.hcaptcha.com/languages
    https://developers.google.com/recaptcha/docs/language
=====================================================================
******Uncomment extension=gd2 in your php.ini******
******在php.ini中取消注释extension=gd2******
=====================================================================*/
$config['captcha_type'] = 0;
$config['captcha_key'] = '';
$config['captcha_secret'] = '';
$config['captcha_language'] = 'en';
/*===================================================================
soap_for_register
    Don't Enable it for AzerothCore/TrinityCore/SkyFire and AshamaneCore.
    If you enable that you need to disabled change password feature.
    If you want to enable Two-Factor Authentication (2FA) you don't need to enable this option.
    For Two-Factor Authentication (2FA)  just need to config other parts of the SOAP.
    不要为AzerothCore / TrinityCore / SkyFire和AshamaneCore启用它。
    如果您启用了该功能，则需要禁用更改密码功能。
    如果要启用双因素身份验证（2FA），则不需要启用此选项。
    对于双因素身份验证（2FA），只需要配置SOAP的其他部分即可。

SOAP features need to enable soap in your PHP.
SOAP功能需要在PHP中启用soap。

soap_host
    SOAP server address
    SOAP服务器地址
soap_port
    SOAP server port.
    SOAP服务器端口。
soap_uri
    urn:TC for TrinityCore (TrinityCore填TC)
    urn:AC for AzerothCore (AzerothCore填AC)
    urn:MaNGOS for Mangos (Mangos填MaNGOS)
soap_style
    SOAP style
    SOAP样式
soap_username
    SOAP account username
    SOAP 账号用户名
soap_password
    SOAP account password
    SOAP 账号密码
soap_ca_command
    Create account command
    You can use it like this too: '.account create {USERNAME} {PASSWORD} {PASSWORD} {EMAIL}'
    Check create account command in your server!
    创建账号命令
    您也可以这样使用：'.account create {USERNAME} {PASSWORD} {PASSWORD} {EMAIL}'
    检查服务器上的创建帐户命令！
soap_cp_command
    Change password command
    account set password {USERNAME} {PASSWORD} {PASSWORD}
    Check change password command in your server
    修改密码命令
    account set password {USERNAME} {PASSWORD} {PASSWORD}
    检查服务器上的修改密码命令
soap_asa_command
    If you use soap_for_register, You need to set this command.
    This command will be run after soap_ca_command.
    If you don't want to run any command after soap_ca_command you can make it empty like this: ''
    account set addon {USERNAME} {EXPANSION}
    如果您使用soap_for_register，则需要设置此命令。
    此命令将在soap_ca_command之后运行。
    如果您不想在soap_ca_command之后运行任何命令，可以将其设置为空，如下所示：''
    account set addon {USERNAME} {EXPANSION}

=====================================================================
******Uncomment extension=soap in your php.ini******
******在php.ini中取消注释extension=soap******
=====================================================================*/
$config['soap_for_register'] = false;
$config['soap_host'] = '127.0.0.1';
$config['soap_port'] = '7878';
$config['soap_uri'] = 'urn:MaNGOS';
$config['soap_style'] = 'SOAP_RPC';
$config['soap_username'] = 'admin_soap';
$config['soap_password'] = 'admin_soap';
$config['soap_ca_command'] = 'account create {USERNAME} {PASSWORD}';
$config['soap_cp_command'] = 'account set password {USERNAME} {PASSWORD} {PASSWORD}';
$config['soap_asa_command'] = 'account set addon {USERNAME} {EXPANSION}';
/*===================================================================
Two-Factor Authentication (2FA)
Your core must support 2fa.
This feature just works for cores that have 2fa command.
If your core support 2fa but don't have any command, you can check this: https://github.com/masterking32/WoWSimpleRegistration/pull/20 (Support some of the cores, Required to use 2fa for registration.)

You need to config SOAP too but you don't need to enable 'soap_for_register'.
For security reasons, We used email to enable 2fa, You need to enable SMTP config.

2fa_support
    You can enable or disable it. (true/false)
soap_2d_command
    Command to disable 2fa.
    account set 2fa {USERNAME} off
soap_2e_command
    Command to enable 2fa.
    account set 2fa {USERNAME} {SECRET}
=====================================================================*/
$config['2fa_support'] = false;
$config['soap_2d_command'] = 'account set 2fa {USERNAME} off';
$config['soap_2e_command'] = 'account set 2fa {USERNAME} {SECRET}';
/*===================================================================
You Auth/Realmd MySQL information.
你的Auth/Realmd MySQL信息。
db_auth_host
    Auth Database Host
    认证数据库主机
db_auth_port
    Auth Database Port
    认证数据库端口
db_auth_user
    Auth Database Username
    认证数据库用户名
db_auth_pass
    Auth Database Password
    认证数据库密码
db_auth_dbname
    Auth Database DBName
    认证数据库数据库名
=====================================================================*/
$config['db_auth_host'] = '127.0.0.1';
$config['db_auth_port'] = '3306';
$config['db_auth_user'] = 'acore';
$config['db_auth_pass'] = 'acore';
$config['db_auth_dbname'] = 'acore_auth';
/*===================================================================
Your character's databases.
你的角色数据库。
If your server has a lot of realms you can check the example at the bottom of the file.
如果您的服有很多服务器，可以在文件底部查看示例。
=====================================================================*/
$config['realmlists'] = array(
    "1" => array(
        'realmid' => 1, // Realm ID (服务器ID)
        'realmname' => "曼多基尔", // Realm Name (服务器名)
        'db_host' => "127.0.0.1", // MySQL Host IP (MySQL主机IP)
        'db_port' => "3306", // MySQL Host Port (MySQL端口)
        'db_user' => "acore", // MySQL username (MySQL用户名)
        'db_pass' => 'acore', // MySQL password (MySQL密码)
        'db_name' => "acore_characters" // Characters database name (角色数据库名)
    )
);

/*
 **********************************
 * EXMAPLE OF MORE THAN ONE REALM *
 **********************************

$config['realmlists'] = array( // Add your realmlist here
    "1" => array(
        'realmid' => 1,
        'realmname' => "Realm 1",
        'db_host' => "127.0.0.1",
        'db_port' => "3306",
        'db_user' => "root",
        'db_pass' => "root",
        'db_name' => "rm1_chars"
    ),
    "2" => array(
        'realmid' => 2,
        'realmname' => "Realm 2",
        'db_host' => "127.0.0.1",
        'db_port' => "3306",
        'db_user' => "root",
        'db_pass' => "root",
        'db_name' => "rm2_chars"
    ),
    "3" => array(
        'realmid' => 3,
        'realmname' => "Realm 3",
        'db_host' => "127.0.0.1",
        'db_port' => "3306",
        'db_user' => "root",
        'db_pass' => "root",
        'db_name' => "rm3_chars"
    )
);
*/



$config['script_version'] = '2.0.2';
