# Ubuntu 编译 AzerothCore

> 注：
> Ubuntu 版本必须 >= 22.04
> 旧版本系统会遇到大量软件版本过旧的问题，需要自己手动升级，不建议使用。

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
make -j $(nproc --all) # 编译
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

3. [允许外网访问MySQL服务器](https://www.digitalocean.com/community/tutorials/how-to-allow-remote-access-to-mysql)
* 使用宝塔文件浏览器，进入 `/etc/mysql/mysql.conf.d` 目录
* 修改 `mysqld.cnf` 文件，把 `bind-address` 的值由 `127.0.0.1` 改成 `0.0.0.0`
* 在终端输入 `sudo systemctl restart mysql` 重启MySQL服务

4. Ubuntu 防火墙打开3306端口
```bash
sudo ufw allow 3306
```

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
```

```bash
# 1. 以 nohup 方式启动，标准输出和错误输出都重定向到 /dev/null
# 2. 启动前检查是否有 Auth.log/DBErrors.log/Server.log，如果有先备份，格式为 log/YYMMDD_HHMMSS/原文件名.log
function backupLog() {
	# 把log/YYMMDD_HHMMSS目录名存到一个变量里
	dirName=log/`date +%y%m%d_%H%M%S`
	# 判断 dirName 目录是否存在，不存在则创建
	if [ ! -d $dirName ]; then
		mkdir -p $dirName
	fi
	# 判断 $1.log 是否存在，存在则备份
	if [ -f $1.log ]; then
		mv $1.log $dirName/$1.log
	fi
}
backupLog Auth
backupLog DBErrors
backupLog Server

# 启动服务器
function launch() {
	nohup ./$1 > /dev/null 2>&1 &
}
launch authserver
launch worldserver
```

为了方便，可以把上面两条命令写到一个脚本里，比如 `~/azeroth-server/bin/start.sh`，然后执行 `chmod +x ~/azeroth-server/bin/start.sh`，这样就可以通过 `~/azeroth-server/bin/start.sh` 来启动服务器了。

Ubuntu 防火墙打开3724和8085端口
```bash
sudo ufw allow 3724
sudo ufw allow 8085
```

## 7 关闭服务器
```bash
pkill authserver
pkill worldserver
```

为了方便，可以把上面两条命令写到一个脚本里，比如 `~/azeroth-server/bin/stop.sh`，然后执行 `chmod +x ~/azeroth-server/bin/stop.sh`，这样就可以通过 `~/azeroth-server/bin/stop.sh` 来关闭服务器了。

# screen 方式启动服务器
```bash
# 安装 screen
sudo apt install screen

# 创建 authserver screen 会话
screen -S authserver
# 启动 authserver
cd ~/azeroth-server/bin
./authserver
# 按 Ctrl+A Ctrl+D 退出 screen 会话

# 创建 worldserver screen 会话
screen -S worldserver
# 启动 worldserver
cd ~/azeroth-server/bin
./worldserver
# 按 Ctrl+A Ctrl+D 退出 screen 会话

# 查看 screen 会话
screen -ls

# 进入 screen 会话
screen -r authserver
screen -r worldserver
```

参考文档：https://linuxize.com/post/how-to-use-linux-screen/
