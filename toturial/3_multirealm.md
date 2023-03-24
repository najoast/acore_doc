

# 开多个服务器

### 1 复制 docker-compose.override.yml
检查 `acore-docker/conf/dist` 文件夹，其中包含准备好用于开多个服务器的覆盖文件。 将此文件复制粘贴到 `docker-compose.yml` 的同一文件夹中。

### 2 创建 `worldserver2.conf` 文件
进入 `acore-docker` 目录，在此目录下打开终端（在空白处按住 Shift + 右键，选择在此处打开命令窗口），输入以下命令：
```bash
docker compose cp ac-worldserver:/azerothcore/env/dist/etc/worldserver.conf conf/worldserver2.conf
```

这将会在 `acore-docker/conf` 文件夹中创建一个 `worldserver2.conf` 文件。

打开这个文件，修改以下内容：
```
RealmID = 2
LoginDatabaseInfo     = "ac-database;3306;root;password;acore_auth"
WorldDatabaseInfo     = "ac-database;3306;root;password;acore_world2"
CharacterDatabaseInfo = "ac-database;3306;root;password;acore_characters2"
```

### 3 修改数据库 acore_auth.realmlist
1. 使用任意 MySQL 客户端连接到 MySQL 服务器，例如 HeidiSQL。
2. 打开 `acore_auth` 数据库
3. 找到 `realmlist` 表，添加一行，内容如下：
```sql
INSERT INTO `realmlist` (`id`, `name`, `address`, `localAddress`, `localSubnetMask`, `port`, `icon`, `flag`, `timezone`, `allowedSecurityLevel`, `population`, `gamebuild`) VALUES (2, '曼多基尔', '192.168.0.106', '127.0.0.1', '255.255.255.0', 8086, 0, 0, 1, 0, 0, 12340);
```

如果用的 HeidiSQL，也可以直接在1那条记录上右击，选择“带键值地复制行”，然后修改下以下内容即可：
* `id` 改为 2
* `name` 改为你想要的服务器名字
* `address` 改为服务器2的IP（同一台机器上就保持不变）
* `port` 改为服务器2的端口（不能和服务器1的端口一样，这里改成8086）

### 4 重启服务器
进入 `acore-docker` 目录，在此目录下打开终端，输入以下命令：
```bash
docker compose down
docker compose up -d
```