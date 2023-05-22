# Ubuntu 编译 AzerothCore

## 1 [安装所需软件](https://www.azerothcore.org/wiki/linux-requirements)

```bash
sudo apt-get update && sudo apt-get install git cmake make gcc g++ clang libmysqlclient-dev libssl-dev libbz2-dev libreadline-dev libncurses-dev mysql-server libboost-all-dev
```

## 2 [编译](https://www.azerothcore.org/wiki/linux-core-installation)

```bash
mkdir ~/dev
cd ~/dev
git clone https://github.com/azerothcore/azerothcore-wotlk.git
cd azerothcore-wotlk
mkdir build
cd build
cmake ../ -DCMAKE_INSTALL_PREFIX=$HOME/azeroth-server/ -DCMAKE_C_COMPILER=/usr/bin/clang -DCMAKE_CXX_COMPILER=/usr/bin/clang++ -DWITH_WARNINGS=1 -DTOOLS_BUILD=all -DSCRIPTS=static -DMODULES=static
nproc --all # 检查CPU有几个核心
make -j 4 # 把4改成你实际的核心数，这样能最大化利用CPU的多核优势，加快编译速度
make install # 安装
```

## 3 [服务器设置](https://www.azerothcore.org/wiki/server-setup)
1. 下载 [data.zip](https://github.com/wowgaming/client-data/releases/)，如果之前已经下过了，就不用再下了，可以通过宝塔上传到Ubuntu里
2. 把 data.zip 解压到 `~/azeroth-server/data` 目录下
3. 把 `~/azeroth-server/etc/worldserver.conf.dist` 复制一份到 `~/azeroth-server/etc/worldserver.conf`，然后编辑 `~/azeroth-server/etc/worldserver.conf`，把 `DataDir = "."` 改成 `DataDir = "/home/你的用户名/azeroth-server/data"`
4. 把 `~/azeroth-server/etc/authserver.conf.dist` 复制一份到 `~/azeroth-server/etc/authserver.conf`

## 4 [初始化数据库](https://www.azerothcore.org/wiki/database-installation)
1. 执行 `sudo mysql` 进入数据库的终端

2. 执行以下SQL语句，创建acore用户，创建acore_world、acore_characters、acore_auth三个数据库，并授权acore用户拥有这三个数据库的所有权限
```sql
DROP USER IF EXISTS 'acore'@'%';
CREATE USER 'acore'@'%' IDENTIFIED BY 'acore' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0;

GRANT ALL PRIVILEGES ON * . * TO 'acore'@'%' WITH GRANT OPTION;

DROP DATABASE IF EXISTS `acore_world`;
CREATE DATABASE `acore_world` DEFAULT CHARACTER SET UTF8MB4 COLLATE utf8mb4_general_ci;

DROP DATABASE IF EXISTS `acore_characters`;
CREATE DATABASE `acore_characters` DEFAULT CHARACTER SET UTF8MB4 COLLATE utf8mb4_general_ci;

DROP DATABASE IF EXISTS `acore_auth`;
CREATE DATABASE `acore_auth` DEFAULT CHARACTER SET UTF8MB4 COLLATE utf8mb4_general_ci;

GRANT ALL PRIVILEGES ON `acore_world` . * TO 'acore'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON `acore_characters` . * TO 'acore'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON `acore_auth` . * TO 'acore'@'%' WITH GRANT OPTION;
```
> 注：如果执行过 `sudo mysql_secure_installation`，并且安装了 `validate_password` 插件，那么创建用户时需要设置一个复杂的密码，否则会报错。可以在[这里](https://stackoverflow.com/questions/36301100/how-do-i-turn-off-the-mysql-password-validation)找到关闭 `validate_password` 插件的方法。

> [这篇文章](https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04)讲了怎么样完整的初始化MySQL，如果是服务器，建议按照这篇文章的步骤来初始化MySQL，可以增强安全性。

## 5 [网络设置](https://www.azerothcore.org/wiki/networking)
1. 使用 HeidiSQL 连接数据库
	* IP: 服务器的公网IP（如果是虚拟机就填虚拟机的IP）
	* 端口：3306
	* 用户名：acore
	* 密码：acore
2. 修改 `acore_auth.realmlist` 表里的 `address` 字段，改为服务器的公网IP（如果是虚拟机就填虚拟机的IP）

## 6 启动服务器
```bash
cd ~/azeroth-server/bin
# 以 nohup 方式启动，并把日志输出到 ${进程名}.log 文件里
nohup ./authserver > authserver.log 2>&1 &
nohup ./worldserver > worldserver.log 2>&1 &
```
为了方便，可以把上面两条命令写到一个脚本里，比如 `~/azeroth-server/bin/start.sh`，然后执行 `chmod +x ~/azeroth-server/bin/start.sh`，这样就可以通过 `~/azeroth-server/bin/start.sh` 来启动服务器了。

## 7 关闭服务器
```bash
pkill authserver
pkill worldserver
```

为了方便，可以把上面两条命令写到一个脚本里，比如 `~/azeroth-server/bin/stop.sh`，然后执行 `chmod +x ~/azeroth-server/bin/stop.sh`，这样就可以通过 `~/azeroth-server/bin/stop.sh` 来关闭服务器了。
