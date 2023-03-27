
# 出生设置

| 配置 | 默认值 | 说明 |
|----|----|----|
| `StartPlayerLevel` | 1 | 角色初始等级 |
| `StartHeroicPlayerLevel` | 55 | 英雄职业初始等级 |
| `StartPlayerMoney` | 0 | 角色初始金钱（铜币） |
| `StartHeroicPlayerMoney` | 2000 | 英雄职业初始金钱（铜币） |
| `StartHonorPoints` | 0 | 角色初始荣誉点数 |
| `StartArenaPoints` | 0 | 角色初始竞技场点数 |

# 上限设置

| 配置 | 取值范围 |默认值 | 说明 |
|----|----|----|----|
| `MaxPlayerLevel` | 1-255 | 80 | 角色最高等级(不建议超过100) |
| `MaxHonorPoints` | | 75000 | 角色最高荣誉点数 |
| `MaxHonorPointsMoneyPerPoint` | | 0 | 如果玩家获得的荣誉超过允许的值，则将多余的荣誉转换为金钱。荣誉点将根据此配置中设置的值转换为金钱 |
| `MaxArenaPoints` | | 10000 | 角色最高竞技场点数 |

# 服务器倍率
## 生命值/魔法值/怒气值/符文能量/集中值/能量值/忠诚度倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Health` | 1 | 生命值倍率 |
| `Rate.Mana` | 1 | 魔法值倍率 |
| `Rate.Rage.Income` | 1 | 怒气值增长倍率 |
| `Rate.Rage.Loss` | 1 | 怒气值下降倍率 |
| `Rate.RunicPower.Income` | 1 | 符文能量增长倍率 |
| `Rate.RunicPower.Loss` | 1 | 符文能量下降倍率 |
| `Rate.Focus` | 1 | 集中值倍率 |
| `Rate.Energy` | 1 | 能量值倍率 |
| `Rate.Loyalty` | 1 | 忠诚度倍率 |

## 技能发现倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Skill.Discovery` | 1 | 技能发现倍率 |

## 基于品质的金钱和物品掉落倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Drop.Item.Poor` | 1 | 粗糙物品掉落倍率 |
| `Rate.Drop.Item.Normal` | 1 | 普通物品掉落倍率 |
| `Rate.Drop.Item.Uncommon` | 1 | 优秀物品掉落倍率 |
| `Rate.Drop.Item.Rare` | 1 | 精良物品掉落倍率 |
| `Rate.Drop.Item.Epic` | 1 | 史诗物品掉落倍率 |
| `Rate.Drop.Item.Legendary` | 1 | 传说物品掉落倍率 |
| `Rate.Drop.Item.Artifact` | 1 | 神器物品掉落倍率 |
| `Rate.Drop.Item.Referenced` | 1 | 引用物品掉落倍率 |
| `Rate.Drop.Money` | 1 | 金钱掉落倍率 |

## 满级玩家的任务奖励金钱倍率
允许进一步调整当玩家处于 MaxPlayerLevel 时任务奖励的额外金钱数额（此数额在 quest_template.RewardBonusMoney 中指定）。
注意：最终金额也会受到 `Rate.Drop.Money` 的影响。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.RewardBonusMoney` | 1 | 满级玩家的任务奖励金钱倍率 |

## 基于品质的物品出售价格倍率

Rate.SellValue.Item.Poor             = 1
Rate.SellValue.Item.Normal           = 1
Rate.SellValue.Item.Uncommon         = 1
Rate.SellValue.Item.Rare             = 1
Rate.SellValue.Item.Epic             = 1
Rate.SellValue.Item.Legendary        = 1
Rate.SellValue.Item.Artifact         = 1
Rate.SellValue.Item.Heirloom         = 1

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.SellValue.Item.Poor` | 1 | 粗糙物品出售价格倍率 |
| `Rate.SellValue.Item.Normal` | 1 | 普通物品出售价格倍率 |
| `Rate.SellValue.Item.Uncommon` | 1 | 优秀物品出售价格倍率 |
| `Rate.SellValue.Item.Rare` | 1 | 精良物品出售价格倍率 |
| `Rate.SellValue.Item.Epic` | 1 | 史诗物品出售价格倍率 |
| `Rate.SellValue.Item.Legendary` | 1 | 传说物品出售价格倍率 |
| `Rate.SellValue.Item.Artifact` | 1 | 神器物品出售价格倍率 |
| `Rate.SellValue.Item.Heirloom` | 1 | 传家宝物品出售价格倍率 |

## 基于品质的物品购买价格倍率

Rate.BuyValue.Item.Poor             = 1
Rate.BuyValue.Item.Normal           = 1
Rate.BuyValue.Item.Uncommon         = 1
Rate.BuyValue.Item.Rare             = 1
Rate.BuyValue.Item.Epic             = 1
Rate.BuyValue.Item.Legendary        = 1
Rate.BuyValue.Item.Artifact         = 1
Rate.BuyValue.Item.Heirloom         = 1

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.BuyValue.Item.Poor` | 1 | 粗糙物品购买价格倍率 |
| `Rate.BuyValue.Item.Normal` | 1 | 普通物品购买价格倍率 |
| `Rate.BuyValue.Item.Uncommon` | 1 | 优秀物品购买价格倍率 |
| `Rate.BuyValue.Item.Rare` | 1 | 精良物品购买价格倍率 |
| `Rate.BuyValue.Item.Epic` | 1 | 史诗物品购买价格倍率 |
| `Rate.BuyValue.Item.Legendary` | 1 | 传说物品购买价格倍率 |
| `Rate.BuyValue.Item.Artifact` | 1 | 神器物品购买价格倍率 |
| `Rate.BuyValue.Item.Heirloom` | 1 | 传家宝物品购买价格倍率 |

## 引用战利品倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Drop.Item.ReferencedAmount` | 1 | 引用战利品倍率 |

## 战场外的经验倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.XP.Kill` | 1 | 杀怪经验倍率 |
| `Rate.XP.Quest` | 1 | 任务经验倍率 |
| `Rate.XP.Quest.DF` | 1 | 任务经验倍率 (仅限 LFG 任务) |
| `Rate.XP.Explore` | 1 | 探索经验倍率 |
| `Rate.XP.Pet` | 1 | 宠物经验倍率 |

## 战场内的经验倍率
战场荣誉击杀的经验率。 不受 `Rate.XP.Kill` 的影响。 为每个战场定义。 仅在 `Battleground.GiveXPForKills` = 1 时有效。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.XP.BattlegroundKillAV` | 1 | 奥特兰克山谷 |
| `Rate.XP.BattlegroundKillWSG` | 1 | 战歌峡谷 |
| `Rate.XP.BattlegroundKillAB` | 1 | 阿拉希盆地 |
| `Rate.XP.BattlegroundKillEOTS` | 1 | 风暴之眼 |
| `Rate.XP.BattlegroundKillSOTA` | 1 | 战争之矛 |
| `Rate.XP.BattlegroundKillIC` | 1 | 冬拥湖 |

## 修理费倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.RepairCost` | 1 | 修理费倍率 |

## 休息点增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Rest.InGame` | 1 | 在游戏中的休息点增长倍率 |
| `Rate.Rest.Offline.InTavernOrCity` | 1 | 在城镇或旅店中的休息点增长倍率 |
| `Rate.Rest.Offline.InWilderness` | 1 | 在野外的休息点增长倍率 |

## 跌落伤害倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Damage.Fall` | 1 | 跌落伤害倍率 |

Rate.Auction.Time    = 1
Rate.Auction.Deposit = 1
Rate.Auction.Cut     = 1

## 拍卖行倍率(拍卖时间/拍卖开始时获得的押金/拍卖结束时的拍卖减价)

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Auction.Time` | 1 | 拍卖时间倍率 |
| `Rate.Auction.Deposit` | 1 | 拍卖开始时获得的押金倍率 |
| `Rate.Auction.Cut` | 1 | 拍卖结束时的拍卖减价倍率 |

## 荣誉增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Honor` | 1 | 荣誉增长倍率 |

## 竞技场点数增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.ArenaPoints` | 1 | 竞技场点数增长倍率 |

## 天赋点数增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Talent` | 1 | 天赋点数增长倍率 |

## 声望增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Reputation.Gain` | 1 | 声望增长倍率 |

## 杀死低等级怪物的声望增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Reputation.LowLevel.Kill` | 1 | 杀死低等级怪物的声望增长倍率 |

## 完成低等级任务的声望增长倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Reputation.LowLevel.Quest` | 1 | 完成低等级任务的声望增长倍率 |

## 招募朋友的声望加成倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Reputation.RecruitAFriendBonus` | 0.1 | 招募朋友的声望加成倍率 |

## 移动速度倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.MoveSpeed` | 1 | 移动速度倍率 |

## 副本重置时间倍率
全局 raid 或英雄副本重置之间的速率乘数（dbc 值）。 较高的值会增加重置之间的时间，较低的值会缩短时间，您需要在字符数据库中清理 instance_reset 才能让新值起作用。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.InstanceResetTime` | 1 | 副本重置时间倍率 |

## 宠物升级所需经验倍率
修改升级宠物所需的经验值。 费率越低，所需经验越少。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.Pet.LevelXP` | 0.05 | 宠物升级所需经验倍率 |

## 水下呼吸时间

玩家在水下呼吸的计时器（以毫秒为单位）。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `WaterBreath.Timer` | 180000 (3分钟) | 水下呼吸时间 |

## 低等级玩家的生命值和法力值回复倍率
大大提高 15 级以下玩家的生命值和法力值恢复率。

* 1 - 打开
* 0 - 关闭

| 配置 | 默认值 | 说明 |
|----|----|----|
| `EnableLowLevelRegenBoost` | 1 | 低等级玩家的生命值和法力值回复开关 |

## 制作/防御/采集/武器技能的获取倍率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `SkillGain.Crafting` | 1 | 制作技能的获取倍率 |
| `SkillGain.Defense` | 1 | 防御技能的获取倍率 |
| `SkillGain.Gathering` | 1 | 采集技能的获取倍率 |
| `SkillGain.Weapon` | 1 | 武器技能的获取倍率 |


## 技能颜色对应的升级率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `SkillChance.Orange` | 100 | 橙色技能的升级率 |
| `SkillChance.Yellow` | 75 | 黄色技能的升级率 |
| `SkillChance.Green` | 25 | 绿色技能的升级率 |
| `SkillChance.Grey` | 0 | 灰色技能的升级率 |

## 剥皮和采矿成功率随着技能等级而降低

* 0 - 关闭(默认)
* 75 - In 2 times each 75 skill points

译者注：没看懂。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `SkillChance.MiningSteps` | 0 | 采矿成功率随着技能等级而降低 |
| `SkillChance.SkinningSteps` | 0 | 剥皮成功率随着技能等级而降低 |

## PVP死亡后装备耐久度是否损失

* 0 - 关闭(默认)
* 1 - 开启

| 配置 | 默认值 | 说明 |
|----|----|----|
| `DurabilityLoss.InPvP` | 0 | PVP死亡后装备耐久度是否损失 |

## 死亡后装备耐久度损失百分比

| 配置 | 默认值 | 说明 |
|----|----|----|
| `DurabilityLoss.OnDeath` | 10 | 死亡后装备耐久度损失百分比 |

注：在3.3.5客户端里，不管配置的值是多少，都会显示“你的物品损失了 10% 的耐久度”。

## 造成伤害时装备失去耐久度的几率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `DurabilityLossChance.Damage` | 0.5 | 造成伤害时装备失去耐久度的几率 |

0.5 表示 100/0.5 = 200，平均造成 200 点伤害就会失去耐久度。

## 吸收伤害时装备失去耐久度的几率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `DurabilityLossChance.Absorb` | 0.5 | 吸收伤害时装备失去耐久度的几率 |

0.5 表示 100/0.5 = 200，平均吸收 200 点伤害就会失去耐久度。

## 格挡攻击时主武器失去耐久度的几率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `DurabilityLossChance.Block` | 0.05 | 格挡攻击时主武器失去耐久度的几率 |

0.5 表示 100/0.05 = 2000，平均格挡 2000 点伤害就会失去耐久度。

## 格挡攻击时盾牌失去耐久度的几率

| 配置 | 默认值 | 说明 |
|----|----|----|
| `DurabilityLossChance.Parry` | 0.05 | 格挡攻击时盾牌失去耐久度的几率 |

0.5 表示 100/0.05 = 2000，平均格挡 2000 点伤害就会失去耐久度。

## 复活后虚弱时间的开始等级

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Death.SicknessLevel` | 11 | 复活后的虚弱时间 |

当值为11时，表示等级1-10的角色不会受到影响，等级11-19的角色会受到1分钟的影响，等级20-最大等级的角色会受到10分钟的影响。

示例：
* 11 （打开，具体参考上面的说明）
* MaxPlayerLevel+1 （关闭）
* -10 （打开，任何等级的角色都会受到10分钟的影响）

## 增加 PvP/PvE 死亡时的尸体回收延迟

* 0 - 关闭
* 1 - 开启（默认）

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Death.CorpseReclaimDelay.PvP` | 1 | 增加 PvP 死亡时的尸体回收延迟 |
| `Death.CorpseReclaimDelay.PvE` | 0 | 增加 PvE 死亡时的尸体回收延迟 |

## 在野外、副本、战场或竞技场中复活时创建骨头而不是尸体

* 0 - 关闭
* 1 - 开启（默认）

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Death.Bones.World` | 1 | 在野外或副本复活时创建骨头而不是尸体 |
| `Death.Bones.BattlegroundOrArena` | 1 | 在战场或竞技场中复活时创建骨头而不是尸体 |

## .die 命令是否会触发战利品

* 0 - 关闭
* 1 - 开启（默认）

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Die.Command.Mode` | 1 | .die 命令是否会触发战利品 |

## 差3级时的命中率修正

说明：当目标比玩家高3级以上时，命中几率由公式决定：

```
94 - (等级差 - 2) * Rate.MissChanceMultiplier
```

`Rate.MissChanceMultiplier` 常数越高，miss几率越高。

注意：当玩家与目标的等级相差小于 3 级时，这不会影响，此时使用此（线性）公式来计算命中几率：
```
96 - 等级差
```

如果您只想影响玩家的命中率，您可以将 Rate.MissChanceMultiplier.OnlyAffectsPlayer 设置为 1。 这样你就不会影响怪物的命中率。

示例：如果您希望有机会保持线性增长，请使用 1。

| 配置 | 默认值 | 说明 |
|----|----|----|
| `Rate.MissChanceMultiplier.TargetCreature` | 11 | 目标为怪物时的命中率修正 |
| `Rate.MissChanceMultiplier.TargetPlayer` | 7 | 目标为玩家时的命中率修正 |
| `Rate.MissChanceMultiplier.OnlyAffectsPlayer` | 0 | 是否只影响玩家的命中率 |

# 功能开放等级

| 配置 | 默认值 | 说明 |
|----|----|----|
| `LevelReq.Trade` | 1 | 交易的等级要求 |
| `LevelReq.Ticket` | 1 | 工单的等级要求（给GM写信） |
| `LevelReq.Auction` | 1 | 拍卖行的等级要求 |
| `LevelReq.Mail` | 1 | 邮件的等级要求 |

# 其他配置

PlayerStart.AllReputation = 0

| 配置 | 默认值 | 说明 |
|----|----|----|
| `PlayerStart.String` | "" | 新角色第一次登录时显示的信息 |
| `PlayerStart.AllReputation` | 0 | 新角色是否开满声望（0关闭，1开启） |
| `PlayerStart.MapsExplored` | 0 | 新角色是否所有地图已探索（0关闭，1开启） |
| `HonorPointsAfterDuel` | 0 | 决斗获胜者在决斗后将获得的荣誉点数 |
| `AlwaysMaxWeaponSkill` | 0 | 玩家登陆或下线时，武器和防御技能自动满级 |
| `NoResetTalentsCost` | 0 | 重置天赋时不消耗金钱(0关闭，1开启) |
