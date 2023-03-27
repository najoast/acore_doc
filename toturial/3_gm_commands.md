# 开 GM 权限

方法一：
1. 附加到终端 `docker attach acore-docker-ac-worldserver-1`
2. 输入 `account set gmlevel ${账号名} {$GM等级}`。GM等级从0到3，0是普通玩家，3是最高权限的GM。

方法二：
可以直接在游戏内的聊天窗口输入 `.account set gmlvl ${账号名} {$GM等级}`。
注意：
1. 在游戏内输入时，前面多了个点
2. 在游戏内设置GM权限时，GM等级不能高于自身

# GM 指令列表
官方文档：https://www.azerothcore.org/wiki/gm-commands
中文机翻：https://docs.qq.com/sheet/DQVNmcENCdld6T1JE?tab=BB08J2

# 常用GM举例

.account set gmlevel 1111 4 # 设置GM权限
.character level 1 # 修改角色等级
.damage 999 # 对目标造成999点伤害
.modify speed 10 # 加速
.additem 19019 #加风剑

| GM 指令 | 说明 |
| --- | --- |
| `.character level 60` | 修改角色等级为60级 |
| `.damage 999` | 对目标造成999点伤害 |
| `.modify speed 10` | 加速（默认为1，修改范围0.1 to 50） |
| `.additem 19019` | 加风剑（道具列表在上面的表格里有） |
| `.gm fly on` | 开启飞行模式 |

