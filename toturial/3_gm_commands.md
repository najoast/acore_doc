
# 账号的安全等级
| 值 | 安全等级（GM等级） | 说明 |
| --- | --- | --- |
| 0 | SEC_PLAYER | 普通玩家 |
| 1 | SEC_MODERATOR | 仲裁者 |
| 2 | SEC_GAMEMASTER | GM |
| 3 | SEC_ADMINISTRATOR | 超级管理员 |
| 4 | SEC_CONSOLE | 控制台 |

## 开 GM 权限
1. 附加到终端
```
docker attach acore-docker-ac-worldserver-1
```

2. 输入以下命令，其中：
* 账号名填登陆时的账号名
* GM等级填上面那张表里的值
* 服务器ID是数据库里 realmlist 里的 ID，填-1表示所有服务器
```
account set gmlevel ${账号名} ${$GM等级} ${服务器ID}
```

# 最高安全等级
默认情况下，最高安全级别是 `SEC_CONSOLE` (4)。

该级别有权限创建和删除帐户、关闭服务器等，不建议给游戏内账户使用，应该在服务器的终端上使用。

要将帐户更新为安全级别 4，需要手动编辑数据库中的字段或运行以下查询。

```sql
UPDATE `account_access` AS `access`
INNER JOIN `account` AS `account` ON `access`.`id` = `account`.`id`
SET `gmlevel` = 4 WHERE `username` = '<user>';
```

# GM 命令输入方式
GM命令主要可以通过两种方式输入。 要么直接在世界控制台窗口中输入它。 在世界控制台窗口中，前导点 (.) 不是强制性的，但您可以使用它。 另一种方法是在wow 客户端的聊天窗口中使用。 在那里，所有命令都必须以前导点开头，例如：`.gm on`

注意：某些命令仅在选择玩家或生物时有效。 这些命令不能在世界控制台中使用。

# GM 命令列表
* 官方文档：https://www.azerothcore.org/wiki/gm-commands
* 中文机翻：https://docs.qq.com/sheet/DQVNmcENCdld6T1JE?tab=BB08J2

# 常用GM举例

| GM 命令 | 说明 |
| --- | --- |
| `.character level 60` | 修改角色等级为60级 |
| `.damage 999` | 对目标造成999点伤害 |
| `.modify speed 10` | 加速（默认为1，修改范围0.1 to 50） |
| `.additem 19019` | 加风剑（道具列表在上面的表格里有） |
| `.gm fly on` | 开启飞行模式 |
| `.cheat god on` | 开启无敌模式(不受伤害) |


参考资料：
* https://www.azerothcore.org/wiki/creating-accounts
