
# 1 把配置从Docker里复制出来
进入 `acore-docker` 目录，打开终端，输入以下命令。
```shell
docker compose cp ac-worldserver:/azerothcore/env/dist/etc/authserver.conf conf
docker compose cp ac-worldserver:/azerothcore/env/dist/etc/worldserver.conf conf
docker compose cp ac-worldserver:/azerothcore/env/dist/etc/dbimport.conf conf
```

这时进到 `acore-docker/conf` 目录，会多出3个文件，这些就是我们后面要修改的配置文件。

# 2 增加 docker-compose.override.yml 文件
在 `acore-docker` 目录下，创建一个 `docker-compose.override.yml` 文件，内容如下：
```yaml
version: '3.9'

services:
  ac-worldserver:
    volumes:
      - ./conf/worldserver.conf:/azerothcore/env/dist/etc/worldserver.conf
      - ./conf/authserver.conf:/azerothcore/env/dist/etc/authserver.conf
      - ./conf/dbimport.conf:/azerothcore/env/dist/etc/dbimport.conf
```

# 3 修改配置
根据自己的需求修改配置文件。

官方文档（英文）：
* [worldserver.conf](https://github.com/azerothcore/azerothcore-wotlk/blob/master/src/server/apps/worldserver/worldserver.conf.dist)
* [authserver.conf](https://github.com/azerothcore/azerothcore-wotlk/blob/master/src/server/apps/authserver/authserver.conf.dist)

中文文档：
* [worldserver.conf](../doc/worldserver.conf.md)

# 4 重启服务器
在 Docker Desktop 里点 restart。
