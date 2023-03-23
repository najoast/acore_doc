# mysql

# 开外网步骤

## 服务端

### 1 连接 MySQL
使用任意 MySQL 客户端连接到 MySQL 服务器，例如 HeidiSQL。
连接信息如下：
* IP: 127.0.0.1
* 端口: 63306
* 用户: root
* 密码: password

### 2 修改 realmlist 表里的服务器IP
1. 打开 `acore_auth` 数据库
2. 找到 `realmlist` 表，修改 `address` 字段的值为外网IP（如果是局域网联机，使用局域网IP也是可以的）


### 3 开放端口
服务器需要开放以下端口
* 认证服务器：3724
* 游戏服务器：8085

## 客户端
修改 `Data/zh-TW/realmlist.wtf` 文件，把IP改为外网IP。
