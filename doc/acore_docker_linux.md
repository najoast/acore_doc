# 为什么服务器要用Linux
* 由于操作系统是免费的，因此无需支付额外的许可费用。
* 更可靠，它很少遇到恶意软件、网络威胁或其他安全错误。
* 对硬件要求不高，资源消耗低。
* 由于其对硬件的要求低，因此表现出出色的性能。
* 系统管理员有自由和机会定制系统。
* 在服务器上无缝使用开源软件。

# 安装 docker
```bash
rpm -qa | grep docker
yum remove dokcer
curl -fsSL https://get.docker.com/ | sh
systemctl restart docker
```

# 安装 docker-compose
```
wget https://github.com/docker/compose/releases/download/v2.18.1/docker-compose-Linux-x86_64
mv ./docker-compose-Linux-x86_64 /usr/local/bin/docker-compose
chmod 755 /usr/local/bin/docker-compose
```

# 克隆代码
```
git clone https://github.com/najoast/acore-docker.git
```

# 启动
```
cd acore-docker
docker-compose up -d
```

# 外网连接数据库
创建一个允许外网连接的数据库用户
```sql
DROP USER IF EXISTS 'acore'@'%';
CREATE USER 'acore'@'%' IDENTIFIED BY 'acore' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0;
GRANT ALL PRIVILEGES ON * . * TO 'acore'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON `acore_world` . * TO 'acore'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON `acore_characters` . * TO 'acore'@'%' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON `acore_auth` . * TO 'acore'@'%' WITH GRANT OPTION;
```

# 不开新数据库账号，直接在终端里修改数据库的方法
1. 进入服务器终端，输入 `ifconfig` 查看服务器外网IP地址，记下来。（也可以在服务器管理控制台查看）
2. 运行 `docker exec -it acore-docker-master-ac-database-1 bash` 命令，进入数据库容器。
3. 运行 `mysql -h127.0.0.1 -uroot -ppassword -e "update acore_auth.realmlist set address='123.123.123.123' where id=1"` 命令，将数据库中的外网地址改为服务器外网地址。（把上述命令里的123.123.123.123改为你的外网地址）
4. 运行 `exit` 命令退出数据库容器。
5. 服务器放开 `3724` 和 `8085` 端口的防火墙，这个不用在终端上操作，服务器管理控制台就可以。

这样就可以了，把客户端的 `realmlist.wtf` 改成服务器外网地址就可以连上了。