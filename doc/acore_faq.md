# AzerothCore 常见问题汇总

## 编译问题

### 编译机器人MOD时报错：`错误	C2039	"type": 不是 "LFGDungeonEntry" 的成员`
* 原因：最近机器人MOD使用的 azerothcore 代码更新了，但机器人的代码没有同步更新。
* 修复：等机器人MOD更新代码即可。目前已有人提交了PR，等待作者合并即可。

在合并之前，可以先使用PR作者的代码进行临时修复：

进入 `mod-playerbots` 目录，执行以下命令：
```bash
git remote add fix https://github.com/Embracefate989/mod-playerbots.git
git pull fix patch-1
```

## acore-docker 问题

### service ac-dev-server declares mutually exclusive `network_mode` and `networks`: invalid compose project
* 原因：`docker-compose.yml`文件中 `ac-dev-server` 的`network_mode` 和`networks`冲突。
* 解决办法：删除 `ac-dev-server` 的 `network_mode: service:ac-dev-database` 这一行。

> 注：最新版的 `acore-docker` 已经解决该问题，更新代码即可。

### failed to register layer: Error processing tar file(exit status 1): write /azerothcore/env/dist/data/mmaps/5303316.mmtile: read-only file system
* 原因：硬盘满了，默认会安装到C盘。
* 解决办法：清理下硬盘空间，或者改下docker的镜像路径。

Docker Desktop修改方法：
Settings->Resources->Advanced->Disk image location
