# Linux 下使用 acoer-docker 开外网步骤
1. 进入服务器终端，输入 `ifconfig` 查看服务器外网IP地址，记下来。（也可以在服务器管理控制台查看）
2. 运行 `docker exec -it acore-docker-master-ac-database-1 bash` 命令，进入数据库容器。
3. 运行 `mysql -h127.0.0.1 -uroot -ppassword -e "update acore_auth.realmlist set address='123.123.123.123' where id=1"` 命令，将数据库中的外网地址改为服务器外网地址。（把上述命令里的123.123.123.123改为你的外网地址）
4. 运行 `exit` 命令退出数据库容器。
5. 服务器放开 `3724` 和 `8085` 端口的防火墙，这个不用在终端上操作，服务器管理控制台就可以。

这样就可以了，把客户端的 `realmlist.wtf` 改成服务器外网地址就可以连上了。