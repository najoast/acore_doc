| 命令 | 安全等级 | 语法 | 描述 | Description | 
| --- | --- | --- | --- | --- | 
| account addon | 1 | `.account addon #addon` | 设置允许的扩展插件级别。插件值：0 - 正常，1 - tbc，2 - wotlk。 | Set expansion addon level allowed. Addon values: 0 - normal, 1 - tbc, 2 - wotlk. |
| account 2fa setup | 0 | `.account 2fa setup` | 设置 2fa 身份验证。使用 .account 2fa setup 1 接收令牌。将令牌应用于身份验证器应用程序（区分大小写）。使用带有 .account 2fa setup PIN 的应用中的 pin 来确认设置。 | Setup 2fa authentication. Use .account 2fa setup 1 to receive token. Apply token to authenticator app (case sensitive). Use the pin from app with .account 2fa setup PIN to confirm setup. |
| account 2fa remove | 0 | `.account 2fa remove` | 删除 2fa 身份验证。 | Remove 2fa authentication. |
| account create | 4 | `.account create $account $password` | 创建帐户并为其设置密码。 | Create account and set password to it. |
| account delete | 4 | `.account delete $account` | 删除所有字符的帐户。 | Delete account with all characters. |
| account lock country | 0 | `.account lock country [on/off]` | 仅允许从当前使用的国家/地区的帐户登录或删除此要求。 | Allow login from account only from current used Country or remove this requirement. |
| account lock | 0 | `.account lock [on/off]` | 仅允许从当前使用的 IP 的帐户登录或删除此要求。 | Allow login from account only from current used IP or remove this requirement. |
| account onlinelist | 4 | `.account onlinelist` | 显示在线帐户列表。 | Show list of online accounts. |
| account password | 0 | `.account password $old_password $new_password $new_password` | 更改您的帐户密码。 | Change your account password. |
| account set addon | 2 | `.account set addon [$account] #addon` | 设置允许的用户（可能的目标）扩展插件级别。插件值：0 - 正常，1 - tbc，2 - wotlk。 | Set user (possible targeted) expansion addon level allowed. Addon values: 0 - normal, 1 - tbc, 2 - wotlk. |
| account set gmlevel | 4 | `.account set gmlevel [$account] #level [#realmid]` | 将目标玩家（不能在自己使用）或帐户 $name 的安全级别设置为领域#realmID 上的#level 级别。 #level 的范围可以从 0 到 3。对于所有领域，#reamID 可能是 -1。 | Set the security level for targeted player (can't be used at self) or for account $name to a level of #level on the realm #realmID. #level may range from 0 to 3. #reamID may be -1 for all realms. |
| account set password | 4 | `.account set password $account $password $password` | 为帐户设置密码。 | Set password for account. |
| account set | 2 | `.account set $subcommand` | 键入 .account set 以查看可能的子命令列表或 .help account set $subcommand 以查看有关子命令的信息 | Type .account set to see the list of possible subcommands or .help account set $subcommand to see info on subcommands |
| account | 0 | `.account` | 显示您帐户的访问级别。 | Display the access level of your account. |
| achievement add | 2 | `.achievement add $achievement` | 为目标玩家添加成就。 $achievement：可以是成就ID或成就链接 | Add an achievement to the targeted player. $achievement: can be either achievement id or achievement link |
| achievement checkall | 3 | `.achievement checkall` | 检查所选玩家的所有成就标准。 | Check all achievement criteria of the selected player. |
| achievement | 2 | `.achievement $subcommand` | 键入 .achievement 以查看可能的子命令列表或 .help 成就 $subcommand 以查看有关子命令的信息 | Type .achievement to see the list of possible subcommands or .help achievement $subcommand to see info on subcommands |
| additem | 2 | `.additem #itemid/[#itemname]/#shift-click-item-link #itemcount` | 将指定数量的 id #itemid（或括号中的准确 (!) 名称 $itemname，或通过在物品栏或配方中按住 shift 单击物品创建的链接）的物品添加到您或选定的角色物品栏中。如果省略#itemcount，则只会添加一项。如果#itemcount 为负数，它将从角色中删除项目。 | Adds the specified number of items of id #itemid (or exact (!) name $itemname in brackets, or link created by shift-click at item in inventory or recipe) to your or selected character inventory. If #itemcount is omitted, only one item will be added. If #itemcount is negative, it will remove the item(s) from the character. |
| additem set | 2 | `.additem set #itemsetid` | 将 ID 为 #itemsetid 的项目集中的项目添加到您或选定的角色库存中。将通过一个示例添加项目集中的每个项目。 | Add items from itemset of id #itemsetid to your or selected character inventory. Will add by one example each item from itemset. |
| announce | 2 | `.announce $MessageToBroadcast` | 在聊天记录中向所有在线玩家发送全局消息。 | Send a global message to all players online in chat log. |
| appear | 1 | `.appear [$charactername]` | 传送到给定的角色。指定角色名称或单击角色的肖像，例如当你在一个组中。角色可以离线。 | Teleport to the given character. Either specify the character name or click on the character's portrait,e.g. when you are in a group. Character can be offline. |
| arena captain | 3 | `.arena captain #TeamID $name` | 为团队设置新队长的命令。 $name 必须在团队中 | A command to set new captain to the team. $name must be in the team |
| arena create | 3 | `.arena create $name "arena name" [2/3/5]` | 命令在游戏中创建一个新的竞技场团队。 | Command to create a new Arena-team in game. |
| arena disband | 3 | `.arena disband #TeamID` | 命令在游戏中解散竞技场团队。 | Command to disband Arena-team in game. |
| arena info | 2 | `.arena info #TeamID` | 显示竞技场团队信息的命令 | Command that show info about arena team |
| arena lookup | 2 | `.arena lookup $name` | 给出具有给定 $name 的 arenateam 列表的命令 | Command that give a list of arenateam with the given $name |
| arena rename | 3 | `.arena rename "oldname" "newname"` | 命令重命名 Arena-team 名称。 | Command to rename Arena-team name. |
| aura | 2 | `.aura #spellid` | 将法术#spellid 的光环添加到所选单位。 | Add the aura from spell #spellid to the selected Unit. |
| bags | 2 | `.bags $subcommand` | 键入 .bags 以查看所有子命令的列表。 | Type .bags to see a list of all subcommands. |
| bags clear | 2 | `.bags clear $itemquality` | 从玩家的包中清除所有物品，包括 $itemQuality 及以下。 | Clear from players' bags all items including and below $itemQuality. |
| bags clear all | 2 | `.bags clear all` | 清除玩家的所有物品 | Clear all items from player |
| ban account | 2 | `.ban account $account_name $bantime $reason` | 如果在任何角色上进行游戏，则禁止帐户并踢出玩家。 $bantime：负值导致 permban，否则使用 4d20h3s 之类的时间字符串。 | Ban account and kick the player if ingame on any character. $bantime: negative value leads to permban, otherwise use a timestring like 4d20h3s. |
| ban character | 2 | `.ban character $character_name $bantime $reason` | 禁止角色并在游戏中踢该角色。 $bantime：负值导致 permban，否则使用 4d20h3s 之类的时间字符串。 | Ban character and kick that character if ingame. $bantime: negative value leads to permban, otherwise use a timestring like 4d20h3s. |
| ban ip | 2 | `.ban ip $Ip $bantime $reason` | 禁止IP。 $bantime：负值导致 permban，否则使用 4d20h3s 之类的时间字符串。 | Ban IP. $bantime: negative value leads to permban, otherwise use a timestring like 4d20h3s. |
| ban playeraccount | 2 | `.ban playeraccount $character_name $bantime $reason` | 根据角色的名字禁止一个帐户，并在游戏中踢该角色。 $bantime：负值导致 permban，否则使用 4d20h3s 之类的时间字符串。 | Ban an account based on the character's name and kick that character if ingame. $bantime: negative value leads to permban, otherwise use a timestring like 4d20h3s. |
| ban | 2 | `.ban $subcommand` | 键入 .ban 以查看可能的子命令列表或 .help ban $subcommand 以查看有关子命令的信息 | Type .ban to see the list of possible subcommands or .help ban $subcommand to see info on subcommands |
| baninfo account | 2 | `.baninfo account $accountid` | 观看有关特定禁令的完整信息。 | Watch full information about a specific ban. |
| baninfo character | 2 | `.baninfo character $charactername` | 观看有关特定禁令的完整信息。 | Watch full information about a specific ban. |
| baninfo ip | 2 | `.baninfo ip $ip` | 观看有关特定禁令的完整信息。 | Watch full information about a specific ban. |
| baninfo | 2 | `.baninfo $subcommand` | 键入 .baninfo 以查看可能的子命令列表或 .help baninfo $subcommand 以查看有关子命令的信息 | Type .baninfo to see the list of possible subcommands or .help baninfo $subcommand to see info on subcommands |
| banlist account | 2 | `.banlist account [$Name]` | 在禁止列表中搜索帐户名称模式或显示完整的帐户禁止列表。 | Searches the banlist for a account name pattern or show full list account bans. |
| banlist character | 2 | `.banlist character $Name` | 在禁止列表中搜索角色名称模式。需要图案。 | Searches the banlist for a character name pattern. Pattern required. |
| banlist ip | 2 | `.banlist ip [$Ip]` | 在禁止列表中搜索 IP 模式或显示 IP 禁止的完整列表。 | Searches the banlist for a IP pattern or show full list of IP bans. |
| banlist | 2 | `.banlist $subcommand` | 键入 .banlist 以查看可能的子命令列表或 .help banlist $subcommand 以查看有关子命令的信息 | Type .banlist to see the list of possible subcommands or .help banlist $subcommand to see info on subcommands |
| bf enable | 3 | `.bf enable #battleid` |  |  |
| bf start | 3 | `.bf start #battleid` |  |  |
| bf stop | 3 | `.bf stop #battleid` |  |  |
| bf switch | 3 | `.bf switch #battleid` |  |  |
| bf timer | 3 | `.bf timer #battleid #timer` |  |  |
| bindsight | 3 | `.bindsight` | 将视野无限期地绑定到所选单位。当前持有目标时无法使用。 | Binds vision to the selected unit indefinitely. Cannot be used while currently possessing a target. |
| cache | 2 | `.cache $subcommand` | 启动期间缓存的字符数据。键入 .cache 以查看子命令列表或键入 .help $subcommand 以查看有关子命令的信息。 | Character data cached during start up. Type .cache to see a list of subcommands or .help $subcommand to see info on subcommands. |
| cache delete | 3 | `.cache delete $playername` | 删除选定字符的缓存数据。仅用于调试！ | Deletes the cached data for the selected character. Use for debugging only! |
| cache info | 2 | `.cache info $playerNameDisplays` | 所选字符的缓存数据。 | cached data for the selected character. |
| cache refresh | 2 | `.cache refresh $playerName` | 删除当前缓存并使用更新的数据刷新它。 | Deletes the current cache and refreshes it with updated data. |
| cast back | 2 | `.cast back #spellid [triggered]` | 选定的目标会对你的角色施放#spellid。如果提供了“触发”或部分，则使用触发标志施法。 | Selected target will cast #spellid to your character. If 'trigered' or part provided then spell casted with triggered flag. |
| cast dest | 2 | `.cast dest #spellid #x #y #z [triggered]` | 选定的目标将在提供的目的地施放#spellid。如果提供了“触发”或部分，则使用触发标志施法。 | Selected target will cast #spellid at provided destination. If 'trigered' or part provided then spell casted with triggered flag. |
| cast dist | 2 | `.cast dist #spellid [#dist [triggered]]` | 您将在距离#dist 施法品脱。如果提供了“触发”或部分，则使用触发标志施法。并非所有法术都可以作为区域法术施放。 | You will cast spell to pint at distance #dist. If 'trigered' or part provided then spell casted with triggered flag. Not all spells can be casted as area spells. |
| cast self | 2 | `.cast self #spellid [triggered]` | 按目标对目标本身施放#spellid。如果提供了“触发”或部分，则使用触发标志施法。 | Cast #spellid by target at target itself. If 'trigered' or part provided then spell casted with triggered flag. |
| cast target | 2 | `.cast target #spellid [triggered]` | 选定的目标会对他的受害者施放#spellid。如果提供了“触发”或部分，则使用触发标志施法。 | Selected target will cast #spellid to his victim. If 'trigered' or part provided then spell casted with triggered flag. |
| cast | 2 | `.cast #spellid [triggered]` | 将#spellid 施放到选定的目标。如果没有选择目标施法给自己。如果提供了“触发”或部分，则使用触发标志施法。 | Cast #spellid to selected target. If no target selected cast to self. If 'trigered' or part provided then spell casted with triggered flag. |
| character changefaction | 2 | `.character changefaction $name` | 改变角色派系。 | Change character faction. |
| character changerace | 2 | `.character changerace $name` | 改变性格种族。 | Change character race. |
| character check bag | 2 | `.character check bag [$target_player] #bagSlot 1 - 4` | | |
| character check bank | 2 | `.character check bank` | | |
| character check profession | 2 | `.character check profession [$target_player]` | | |
| character customize | 2 | `.character customize [$name]` | 在游戏中标记选择或在命令字符中标记为 $name 以便在下次登录时进行自定义。 | Mark selected in game or by $name in command character for customize at next login. |
| character deleted delete | 4 | `.character deleted delete #guid\$name` | 完全删除选定的字符。如果提供了 $name，则仅删除名称中包含该字符串的字符，如果提供了 #guid，则仅删除具有该 GUID 的字符。 | Completely deletes the selected characters. If $name is supplied, only characters with that string in their name will be deleted, if #guid is supplied, only the character with that GUID will be deleted. |
| character deleted list | 3 | `.character deleted list [#guid\$name]` | 显示包含所有已删除字符的列表。如果提供了 $name，则仅选择名称中包含该字符串的字符，如果提供了 #guid，则仅选择具有该 GUID 的字符。 | Shows a list with all deleted characters. If $name is supplied, only characters with that string in their name will be selected, if #guid is supplied, only the character with that GUID will be selected. |
| character deleted purge | 4 | `.character deleted purge [#keepDays]` | 完全删除数据库中删除时间超过 #keepDays 的所有字符。如果 #keepDays 未提供来自 worldserver.conf 选项“CharDelete.KeepDays”的使用值。如果禁用了“CharDelete.KeepDays”选项（设置为值 0），则在没有指定 #keepDays 参数的情况下无法使用此命令。 | Completely removes all characters from the database that where deleted more than #keepDays ago. If #keepDays not provided the used value from worldserver.conf option 'CharDelete.KeepDays'. If 'CharDelete.KeepDays' option is disabled (set to value 0) then this command can't be used without the specifying #keepDays parameter. |
| character deleted restore | 3 | `.character deleted restore #guid\$name [$newname] [#new account]` | 恢复已删除的字符。如果提供了 $name，则只会恢复名称中包含该字符串的字符，如果提供了 $guid，则只会恢复具有该 GUID 的字符。如果设置了 $newname，则字符将恢复为该名称而不是原始名称。如果设置了#newaccount，角色将恢复到特定帐户角色列表。这仅适用于一个字符！ | Restores deleted characters. If $name is supplied, only characters with that string in their name will be restored, if $guid is supplied, only the character with that GUID will be restored. If $newname is set, the character will be restored with that name instead of the original one. If #newaccount is set, the character will be restored to specific account character list. This works only with one character! |
| character erase | 4 | `.character erase $name` | 删除字符 $name。字符最终被删除，以防有任何删除选项。 | Delete character $name. Character finally deleted in case any deleting options. |
| character level | 3 | `.character level [$playername] [#level]` | 通过#numberoflevels 设置带有$playername 的角色级别（如果没有提供名称，则选择），如果没有提供#numberoflevels，则+1）。如果省略#numberoflevels，则级别将增加1。如果#numberoflevels 为0，则重新启动相同级别。如果未选择任何角色且未提供名称，请​​提高您的等级。命令可用于离线字符。重新计算所有统计数据和相关值。如果需要，可以在级别降低天赋时重置。此外，在等级降低时，具有更高等级要求的装备物品可能会丢失。 | Set the level of character with $playername (or the selected if not name provided) by #numberoflevels Or +1 if no #numberoflevels provided). If #numberoflevels is omitted, the level will be increase by 1. If #numberoflevels is 0, the same level will be restarted. If no character is selected and name not provided, increase your level. Command can be used for offline character. All stats and dependent values recalculated. At level decrease talents can be reset if need. Also at level decrease equipped items with greater level requirement can be lost. |
| character rename | 2 | `.character rename [$character_name] [1]` | 标记在游戏中选择或在命令字符中由 $character_name 标记，以便在下次登录时重命名。在末尾添加 1 会将旧名称保存到 characters.reserved_name 表中，并防止 GMlevel 0 的帐户重新使用所述旧名称。 | Mark selected in game or by $character_name in command character for rename at next login. Adding an 1 at the end saves the old name into the characters.reserved_name table and prevents accounts with GMlevel 0 from re-using said old name. |
| character reputation | 2 | `.character reputation [$player_name]` | 显示所选玩家或通过 $player_name 找到的玩家的声望信息。 | Show reputation information for selected player or player find by $player_name. |
| character titles | 2 | `.character titles [$player_name]` | 显示选定玩家或按 $player_name 查找的玩家的已知标题列表。 | Show known titles list for selected player or player find by $player_name. |
| cheat casttime | 2 | `.cheat casttime [on/off]` | 启用或禁用角色的施法时间。 | Enables or disables your character's spell cast times. |
| cheat cooldown | 2 | `.cheat cooldown [on/off]` | 启用或禁用角色的法术冷却时间。 | Enables or disables your character's spell cooldowns. |
| cheat god | 2 | `.cheat god [on/off]` | 启用或禁用角色承受伤害的能力。 | Enables or disables your character's ability to take damage. |
| cheat power | 2 | `.cheat power [on/off]` | 启用或禁用角色的法术消耗（例如法力）。 | Enables or disables your character's spell cost (e.g mana). |
| cheat status | 2 | `.cheat status` | 显示您当前启用的作弊。 | Shows the cheats you currently have enabled. |
| cheat taxi | 2 | `.cheat taxi on/off` | 临时授权或移除所选角色的所有出租车路线。如果未选择任何角色，则隐藏或向您显示所有路线。访问的出租车节点在移除访问权限后仍可访问。 | Temporary grant access or remove to all taxi routes for the selected character. If no character is selected, hide or reveal all routes to you.Visited taxi nodes sill accessible after removing access. |
| cheat waterwalk | 2 | `.cheat waterwalk on/off` | 如果没有选择玩家，则为选定的玩家或自己设置开/关水上行走状态。 | Set on/off waterwalk state for selected player or self if no player selected. |
| cheat | 2 | `.cheat $subcommand` | 键入 .cheat 以查看可能的子命令列表或 .help cheat $subcommand 以查看有关子命令的信息 | Type .cheat to see the list of possible subcommands or .help cheat $subcommand to see info on subcommands |
| combatstop | 2 | `.combatstop [$playername]` | 停止选定角色的战斗。如果选择非玩家，则命令应用于自身。如果提供了 $playername，则尝试应用于在线玩家 $playername。 | Stop combat for selected character. If selected non-player then command applied to self. If $playername provided then attempt applied to online player $playername. |
| cometome | 3 | `.cometome $parameter` | 使选定的生物来到您当前的位置（新位置未保存到数据库）。 | Make selected creature come to your current location (new position not saved to DB). |
| commands | 0 | `.commands` | 显示您帐户级别的可用命令列表。 | Display a list of available commands for your account level. |
| cooldown | 2 | `.cooldown [#spell_id]` | 从所选角色或您（如果未选择）中移除所有（如果未提供 spell_id）或#spel_id 法术冷却时间。 | Remove all (if spell_id not provided) or #spel_id spell cooldown from selected character or you (if no selection). |
| damage | 2 | `.damage $damage_amount [$school [$spellid]]` | 对目标施加$damage。如果没有提供 $school 和 $spellid ，那么这个干净的近战伤害没有任何修饰符。如果 $school 提供，那么伤害会被护甲减少（如果学校物理）修正，目标吸收修正和结果作为对目标的近战伤害应用。如果提供了法术，则伤害修改并作为法术伤害应用。 $spellid 可以是移位链接。 | Apply $damage to target. If not $school and $spellid provided then this flat clean melee damage without any modifiers. If $school provided then damage modified by armor reduction (if school physical), and target absorbing modifiers and result applied as melee damage to target. If spell provided then damage modified and applied as spell damage. $spellid can be shift-link. |
| debug areatriggers | 3 | `.debug areatriggers` | 切换区域触发器的调试模式。在调试模式下，如果到达区域触发器，GM 将收到通知 | Toggle debug mode for areatriggers. In debug mode GM will be notified if reaching an areatrigger |
| debug arena | 3 | `.debug arena` | 切换竞技场的调试模式。在调试模式下，GM 可以单人启动竞技场。 | Toggle debug mode for arenas. In debug mode GM can start arena with single player. |
| debug bg | 3 | `.debug bg` | 切换战场的调试模式。在调试模式下，GM 可以单人开始战场。 | Toggle debug mode for battlegrounds. In debug mode GM can start battleground with single player. |
| debug entervehicle | 3 |  | 输入目标车辆。 | Enter targeted vehicle. |
| debug getitemstate | 3 | `.debug getitemstate [unchanged\changed\new\removed\queue\check_all]` | 获取所选玩家的物品的指定物品状态。 | Get specified item state of the items of the selected player. |
| debug getitemvalue | 3 | `.debug getitemvalue $guid $index` | 在 $index 处使用 $guid 从项目中获取价值。 | Get value from item with $guid at $index. |
| debug getvalue | 3 | `.debug $field [1\0]` | 1：获取所选单元的$field的uint32值； 0：获取所选单位的 $field 的浮点值 | 1: get uint32 value of $field of the selected unit; 0: get float value of $field of the selected unit |
| debug hostil | 1 |  | 获取所选单位的敌对参考列表。 | Get hostile reference list of the selected unit. |
| debug itemexpire | 3 | `.debug itemexpire $guid` | 使用 $guid 删除项目。 | Delete the item with $guid. |
| debug lfg | 3 | `.debug lfg` | 切换 lfg 的调试模式。在调试模式下，GM 可以与一名玩家一起启动 lfg 队列。 | Toggle debug mode for lfg. In debug mode GM can start lfg queue with one player. |
| debug lootrecipient | 3 | `.debug lootrecipient` | 获取所选生物的战利品接收者。 | Get loot recipient of the selected creature. |
| debug los | 3 | `.debug los` | 显示有关视线状态的信息。 | Show information about the line of sight status. |
| debug Mod32Value | 3 | `.debug Mod32Value #field #value` | 将#value 添加到角色的#field 字段。 | Add #value to field #field of your character. |
| debug moveflags | 3 | `.debug moveflags [$newMoveFlags [$newMoveFlags2]]` | 没有给定参数将输出目标的当前移动标志 | No params given will output the current moveflags of the target |
| debug objectcount | 3 | `.debug objectcount <optional map id>` | 显示指定地图 ID 或所有地图（如果未指定）的生物和游戏对象的数量 | Shows the number of Creatures and GameObjects for the specified map id or for all maps if none is specified |
| debug play cinematic | 1 | `.debug play cinematic #cinematicid` | 为您播放电影#cinematicid。当你的思绪飞扬时，你呆在原地。 | Play cinematic #cinematicid for you. You stay at place while your mind fly. |
| debug play movie | 1 | `.debug play movie #movieid` | 为您播放电影#movieid。 | Play movie #movieid for you. |
| debug play sound | 1 | `.debug play sound #soundid` | 使用#soundid 播放声音。声音只会为您播放。其他玩家听不到。警告：客户端可能有超过 5000 个声音... | Play sound with #soundid. Sound will be play only for you. Other players do not hear this. Warning: client may have more 5000 sounds... |
| debug send buyerror | 3 | `.debug send buyerror #errorid` | 测试购买错误 ID。 | Test buy error id. |
| debug send channelnotify | 3 | `.debug send channelnotify #notifytype` | 将#notifytype 发送到频道“test”。 | Send #notifytype to the channel "test". |
| debug send chatmmessage | 3 | `.debug send chatmmessage #msgtype` | 发送#msgtype 类型的消息“testtest”。 | Send a message "testtest" of type #msgtype. |
| debug send equiperror | 3 | `.debug send equiperror #errorid` | 测试设备错误 ID。 | Test equip error id. |
| debug send largepacket | 3 | `.send largepacket` | 发送大数据包（>128000 字节）。 | Send large packet (>128000 bytes). |
| debug send opcode | 3 | `.debug send opcode` | 按照文件“opcode.txt”中的指定向当前播放器发送一个数据包，该文件必须位于服务器的工作目录中。文件内容示例：631 uint32 6146 在客户端启动不同的背景音乐：操作码“SMSG_PLAY_MUSIC”（dec 631，十六进制 0x277）在这种情况下需要一个 uint32 来指定声音 ID（此处：6146“Zone - 奥格瑞玛02")。 | Sends a packet to the current player as specified in the file "opcode.txt" which has to lie in the server's working directory. Example for the content of the file: 631 uint32 6146 which starts a different background music on the client: Opcode "SMSG_PLAY_MUSIC" (dec 631, hex 0x277) which needs in this case an uint32 to specify the sound ID (here: 6146 "Zone - Orgrimmar02"). |
| debug send qinvalidmsg | 3 | `.debug send qinvalidmsg #questfailedreasons` | 向当前玩家发送#questfailedreasons 类型的任务失败消息。 | Send a quest failed message of type #questfailedreasons to the current player. |
| debug send qpartymsg | 3 | `.debug send qpartymsg #questsharemessages` | 向当前玩家发送#questsharemessages 类型的任务共享消息。 | Send a quest share message of type #questsharemessages to the current player. |
| debug send sellerror | 3 | `.debug send sellerror #errorid` | 测试销售错误 ID。 | Test sell error id. |
| debug send setphaseshift | 3 | `.debug send setphaseshift #phaseshift` | 向当前播放器发送相移数据包。 | Send phase shift packet to the current player. |
| debug send spellfail | 3 | `.debug send spellfail #resultid [#arg1] [#arg2]` | 使用拼写结果#resultid 和可选参数#arg1 和#arg2 向当前玩家发送拼写失败数据包。 | Send spell fail packet to the current player using spell result #resultid and optional arguments #arg1 and #arg2. |
| debug setaurastate | 3 | `.debug setaurastate #aurastatetype` | 修改所选单位的光环状态 (#aurastatetype > 0) 或重置状态 (#aurastatetype = 0)。 | Modify aura state of the selected unit (#aurastatetype > 0) or reset the state (#aurastatetype = 0). |
| debug setbit | 3 | `.debug setbit #fieldnumber #bitnumber` | 为选定的单元设置位#bitnumber of field #fieldnumber。 | Set bit #bitnumber of field #fieldnumber for the selected unit. |
| debug setitemvalue | 3 | `.debug getitemvalue $guid $index $value` | 在 $index 处为具有 $guid 的项目设置 $value。 | Set $value for item with $guid at $index. |
| debug setvalue | 3 | `.debug $field $value [1\0]` | 1：为所选单位的$field设置uint32 $value； 0：为所选单位的$field设置float $value | 1: set uint32 $value for $field of the selected unit; 0: set float $value for $field of the selected unit |
| debug spawnvehicle | 3 | `.debug spawnvehicle #entry [#vehicleid]` | 使用生物模板#entry 和可选的#vehicleid 生成载具。 | Spawn vehicle with creature template #entry and optional #vehicleid. |
| debug unitstate | 3 | `.debug unitstate [#unitstate]` | 为选定的单位设置#unitstate。如果未指定参数，则显示单元状态和单元的反应状态。 | Set #unitstate for the selected unit. If no parameter is specified show the unit state and the react state of the unit. |
| debug uws | 3 | `.debug uws #worldstate #value` | 将#worldstate 和#value 的更新世界状态发送给当前玩家。 | Send update world state for #worldstate and #value to the current player. |
| debug | 2 | `.debug $subcommand` | 键入 .debug 以查看可能的子命令列表或 .help debug $subcommand 以查看有关子命令的信息 | Type .debug to see the list of possible subcommands or .help debug $subcommand to see info on subcommands |
| deserter bg add | 3 | `.deserter bg add [$playerName] [$time]` | 为玩家或目标添加 bg 逃兵减益，持续时间为 $time。默认$时间：15m | Adds the bg deserter debuff to a player or your target with $time duration. Default $time: 15m |
| deserter bg remove | 3 | `.deserter bg remove [$playerName]` | 移除玩家或目标的 bg 逃兵减益。 | Removes the bg deserter debuff from a player or your target. |
| deserter bg remove all | 3 | `.deserter bg remove all [$maxDuration]` | 移除所有在线和离线玩家的 bg 逃兵减益。 $maxDuration 设置要删除的最大持续时间。默认：15m | Removes the bg deserter debuff from all online and offline players. $maxDuration sets the maximum duration to be removed. Default: 15m |
| deserter instance add | 3 | `.deserter instance add [$playerName] [$time]` | 为玩家或目标添加实例逃兵减益，持续时间为 $time。默认$时间：30m | Adds the instance deserter debuff to a player or your target with $time duration. Default $time: 30m |
| deserter instance remove | 3 | `.deserter instance remove [$playerName]` | 从玩家或目标身上移除实例逃兵减益。 | Removes the instance deserter debuff from a player or your target. |
| deserter instance remove all | 3 | `.deserter instance remove all [$maxDuration]` | 移除所有在线和离线玩家的实例逃兵减益。 $maxDuration 设置要删除的最大持续时间。默认：30m | Removes the instance deserter debuff from all online and offline players. $maxDuration sets the maximum duration to be removed. Default: 30m |
| dev | 3 | `.dev [on/off]` | 如果未提供开/关，则在游戏开发标签中启用或禁用或显示当前状态。 | Enable or Disable in game Dev tag or show current state if on/off not provided. |
| die | 2 | `.die` | 杀死选定的玩家。如果没有玩家被选中，它会杀了你。 | Kill the selected player. If no player is selected, it will kill you. |
| disable add battleground | 3 | `.disable add battleground $entry $flag $comment` |  |  |
| disable add map | 3 | `.disable add map $entry $flag $comment` |  |  |
| disable add outdoorpvp | 3 | `.disable add outdoorpvp $entry $flag $comment` |  |  |
| disable add quest | 3 | `.disable add quest $entry $flag $comment` |  |  |
| disable add spell | 3 | `.disable add spell $entry $flag $comment` |  |  |
| disable add vmap | 3 | `.disable add vmap $entry $flag $comment` |  |  |
| disable remove battleground | 3 | `.disable remove battleground $entry` |  |  |
| disable remove map | 3 | `.disable remove map $entry` |  |  |
| disable remove outdoorpvp | 3 | `.disable remove outdoorpvp $entry` |  |  |
| disable remove quest | 3 | `.disable remove quest $entry` |  |  |
| disable remove spell | 3 | `.disable remove spell $entry` |  |  |
| disable remove vmap | 3 | `.disable remove vmap $entry` |  |  |
| dismount | 0 | `.dismount` | 卸下你，如果你已登上。 | Dismount you, if you are mounted. |
| distance | 3 | `.distance` | 显示从你的角色到所选生物的距离。 | Display the distance from your character to the selected creature. |
| event activelist | 2 | `.event activelist` | 显示当前活动事件的列表。 | Show list of currently active events. |
| event start | 2 | `.event start #event_id` | 开始事件#event_id。将事件的开始时间设置为当前时刻（更改未保存在数据库中）。 | Start event #event_id. Set start time for event to current moment (change not saved in DB). |
| event stop | 2 | `.event stop #event_id` | 停止事件#event_id。将事件的开始时间设置为过去的时间，使当前时刻为事件停止时间（更改未保存在 DB 中）。 | Stop event #event_id. Set start time for event to time in past that make current moment is event stop time (change not saved in DB). |
| event | 2 | `.event #event_id` | 使用#event_id 显示有关事件的详细信息。 | Show details about event with #event_id. |
| flusharenapoints | 3 | `.flusharenapoints` | 使用它来根据竞技场团队评级分配竞技场积分，并开始新的一周。 | Use it to distribute arena points based on arena team ratings, and start a new week. |
| freeze | 2 | `.freeze (#player)` | “冻结”#player 并禁用他的聊天。在没有#name 的情况下使用它时，它会冻结你的目标。 | "Freezes" #player and disables his chat. When using this without #name it will freeze your target. |
| gear repair | 2 | `.gear repair` | 修复所有选定玩家的物品。 | Repair all selected player's items. |
| gear stats | 0 | `.gear stats` | 显示目标玩家的平均物品等级 | Shows targeted players' average itemlevel |
| gm chat | 2 | `.gm chat [on/off]` | 启用或禁用聊天 GM 模式（在消息中显示 gm 徽章）或显示当前未提供的开/关状态。 | Enable or disable chat GM MODE (show gm badge in messages) or show current state of on/off not provided. |
| gm fly | 2 | `.gm fly [on/off]` | 启用/禁用 gm 飞行模式。 | Enable/disable gm fly mode. |
| gm ingame | 0 | `.gm ingame` | 显示游戏 Game Masters 中可用的列表。 | Display a list of available in game Game Masters. |
| gm list | 3 | `.gm list` | 显示所有 Game Masters 帐户和安全级别的列表。 | Display a list of all Game Masters accounts and security levels. |
| gm visible | 2 | `.gm visible on/off` | 输出当前可见状态或使 GM 对其他玩家可见（开）和不可见（关）。 | Output current visibility state or make GM visible(on) and invisible(off) for other players. |
| gm | 1 | `.gm [on/off]` | 在游戏 GM 模式中启用或禁用或显示当前的开/关状态未提供。 | Enable or Disable in game GM MODE or show current state of on/off not provided. |
| gmannounce | 2 | `.gmannounce $announcement` | 向在线游戏管理员发送通知。 | Send an announcement to online Gamemasters. |
| gmnameannounce | 2 | `.gmnameannounce $announcement` | 向所有在线 GM 发送通知，显示发件人的姓名。 | Send an announcement to all online GM's, displaying the name of the sender. |
| gmnotify | 2 | `.gmnotify $notification` | 在所有在线 GM 的屏幕上显示通知。 | Displays a notification on the screen of all online GM's. |
| go creature | 1 | `.go creature #creature_guid` | 将您的角色传送到具有 guid 的生物 #creature_guid..go 生物 #creature_nameTeleport 将您的角色传送到具有此名称的生物..go 生物 id #creature_entryTeleport 将您的角色传送到从具有此条目的模板中生成的生物。如果有多个生物找到，然后您将被传送到在数据库中找到的第一个。 | Teleport your character to creature with guid #creature_guid..go creature #creature_nameTeleport your character to creature with this name..go creature id #creature_entryTeleport your character to a creature that was spawned from the template with this entry.If more than one creature is found, then you are teleported to the first that is found inside the database. |
| go gobject | 1 | `.go gobject #object_guid` | 使用 guid #object_guid 将您的角色传送到游戏对象 | Teleport your character to gameobject with guid #object_guid |
| go graveyard | 1 | `.go graveyard #graveyardId` | 传送到指定墓地 ID 的墓地。 | Teleport to graveyard with the graveyardId specified. |
| go grid | 1 | `.go grid #gridX #gridY [#mapId]` | 使用地图#mapId（或当前地图，如果未提供）提供的索引将 gm 传送到网格中心。 | Teleport the gm to center of grid with provided indexes at map #mapId (or current map if it not provided). |
| go taxinode | 1 | `.go taxinode #taxinode` | 将玩家传送到taxnode坐标。您可以使用 .lookup taxnode $namepart 查找区域 | Teleport player to taxinode coordinates. You can look up zone using .lookup taxinode $namepart |
| go ticket | 2 | `.go ticket #ticketid` | 将用户传送到创建 $ticketid 的位置。 | Teleports the user to the location where $ticketid was created. |
| go trigger | 1 | `.go trigger #trigger_id` | 将您的角色传送到 ID 为 #trigger_id 的 areatrigger。如果选择的区域触发是传送触发，角色将被传送到触发目标。 | Teleport your character to areatrigger with id #trigger_id. Character will be teleported to trigger target if selected areatrigger is telporting trigger. |
| go xyz | 1 | `.go xyz #x #y [#z [#mapid [#orientation]]]` | 将玩家传送到地图#mapid 上的（#x，#y，#z）坐标，方向为#orientation。如果没有提供 z，将使用地面/水位。如果未提供 mapid，则将使用当前地图。如果未提供#orientation，将使用当前方向。 | Teleport player to point with (#x,#y,#z) coordinates at map #mapid with orientation #orientation. If z is not provided, ground/water level will be used. If mapid is not provided, the current map will be used. If #orientation is not provided, the current orientation will be used. |
| go zonexy | 1 | `.go zonexy #x #y [#zone]` | 如果未提供#zoneid，则将玩家传送到区域#zoneid 或当前区域中地面（水）水平的（#x，#y）客户端坐标点。您可以使用 .lookup area $namepart 查找区域 | Teleport player to point with (#x,#y) client coordinates at ground(water) level in zone #zoneid or current zone if #zoneid not provided. You can look up zone using .lookup area $namepart |
| go | 1 | `.go $subcommand` | 键入 .go 查看可能的子命令列表或 .help go $subcommand 查看有关子命令的信息 | Type .go to see the list of possible subcommands or .help go $subcommand to see info on subcommands |
| gobject activate | 2 | `.gobject activate #guid` | 激活门或按钮等对象。 | Activates an object like a door or a button. |
| gobject add temp | 2 |  | 添加未保存到数据库的临时游戏对象。 | Adds a temporary gameobject that is not saved to DB. |
| gobject add | 3 | `.gobject add #id` | 使用#id 将游戏对象模板中的游戏对象添加到您当前位置的世界。 spawntimesecs 设置生成时间，它是可选的。注意：这是 .gameobject 的副本。 | Add a game object from game object templates to the world at your current location using the #id. spawntimesecs sets the spawntime, it is optional. Note: this is a copy of .gameobject. |
| gobject delete | 3 | `.gobject delete #go_guid` | 使用 guid #go_guid 删除游戏对象。 | Delete gameobject with guid #go_guid. |
| gobject info | 1 | `.gobject info [$object_entry]` | 查询所选游戏对象或给定条目的游戏对象信息。 | Query Gameobject information for selected gameobject or given entry. |
| gobject move | 3 | `.gobject move #goguid [#x #y #z]` | 将游戏对象#goguid 移动到角色坐标（如果提供，则移动到 (#x,#y,#z) 坐标）。 | Move gameobject #goguid to character coordinates (or to (#x,#y,#z) coordinates if its provide). |
| gobject near | 3 | `.gobject near [#distance]` | 在距离玩家#distance 处输出游戏对象。输出按与角色的距离排序的游戏对象 guid 和坐标。如果未提供 #distance，则使用 10 作为默认值。 | Output gameobjects at distance #distance from player. Output gameobject guids and coordinates sorted by distance from character. If #distance not provided use 10 as default value. |
| gobject set | 3 | `.gobject set` | 去做 | TODO |
| gobject set phase | 3 | `.gobject set phase #guid #phasemask` | 具有 DB guid #guid phasemask 的游戏对象更改为 #phasemask，并为玩家提供相关的世界视野更新。游戏对象状态保存到数据库并持久化。 | Gameobject with DB guid #guid phasemask changed to #phasemask with related world vision update for players. Gameobject state saved to DB and persistent. |
| gobject set state | 3 |  | 去做 | TODO |
| gobject target | 1 | `.gobject target [#go_id\#go_name_part]` | 定位并显示最近的游戏对象的位置。如果 #go_id 或 #go_name_part 提供，则定位并显示最近的游戏对象的位置，游戏对象模板 ID 为 #go_id 或名称包括 #go_name_part 作为一部分。 | Locate and show position nearest gameobject. If #go_id or #go_name_part provide then locate and show position of nearest gameobject with gameobject template id #go_id or name included #go_name_part as part. |
| gobject turn | 3 | `.gobject turn #goguid` | 为游戏对象设置 #goguid 方向与当前角色方向相同。 | Set for gameobject #goguid orientation same as current character orientation. |
| gobject | 2 | `.gobject $subcommand` | 键入 .gobject 以查看可能的子命令列表或 .help gobject $subcommand 以查看有关子命令的信息 | Type .gobject to see the list of possible subcommands or .help gobject $subcommand to see info on subcommands |
| gps | 1 | `.gps [$name\$shift-link]` | 显示所选角色或生物的位置信息（如果为命名玩家提供了玩家名称 $name，或者如果提供了生物/游戏对象 shift-link 则如果加载了则指向的生物/游戏对象）。位置信息包括 X、Y、Z 和方位、地图 Id 和区域 Id | Display the position information for a selected character or creature (also if player name $name provided then for named player, or if creature/gameobject shift-link provided then pointed creature/gameobject if it loaded). Position information includes X, Y, Z, and orientation, map Id and zone Id |
| group disband | 2 | `.group disband [$characterName]` | 解散给定角色的组。 | Disbands the given character's group. |
| group join | 2 | `.group join $AnyCharacterNameFromGroup [$CharacterName]` | 添加到玩家组 $AnyCharacterNameFromGroup 玩家 $CharacterName（或选定）。 | Adds to group of player $AnyCharacterNameFromGroup player $CharacterName (or selected). |
| group leader | 2 | `.group leader [$characterName]` | 将给定角色设置为其组的领导者。 | Sets the given character as his group's leader. |
| group list | 2 | `.group list [$CharacterName]` | 列出玩家所在的组/派对的所有成员。 | Lists all the members of the group/party the player is in. |
| group remove | 2 | `.group remove [$characterName]` | 从他的组中删除给定的角色。 | Removes the given character from his group. |
| group | 2 | `.group $subcommand` | 键入 .group 以查看可能的子命令列表或键入 .help group $subcommand 以查看有关子命令的信息 | Type .group to see the list of possible subcommands or .help group $subcommand to see info on subcommands |
| groupsummon | 2 | `.groupsummon [$charactername]` | 将给定的角色和他的团队传送给你。只传送在线角色，但原选定的组员可以离线。 | Teleport the given character and his group to you. Teleported only online characters but original selected group member can be offline. |
| guid | 2 | `.guid` | 显示所选字符的 GUID。 | Display the GUID for the selected character. |
| guild create | 2 | `.guild create [$GuildLeaderName] "$GuildName"` | 创建一个名为 $GuildName 的公会，将玩家 $GuildLeaderName（或选定的）作为领导者。公会名称必须用引号引起来。 | Create a guild named $GuildName with the player $GuildLeaderName (or selected) as leader. Guild name must in quotes. |
| guild delete | 2 | `.guild delete "$GuildName"` | 删除公会 $GuildName。公会名称必须用引号引起来。 | Delete guild $GuildName. Guild name must in quotes. |
| guild info | 2 | `.guild info` | 显示有关目标公会或给定公会 ID 或名称的信息。 | Shows information about the target's guild or a given Guild Id or Name. |
| guild invite | 2 | `.guild invite [$CharacterName] "$GuildName"` | 将玩家 $CharacterName（或选定的）添加到公会 $GuildName。公会名称必须用引号引起来。 | Add player $CharacterName (or selected) into a guild $GuildName. Guild name must in quotes. |
| guild rank | 2 | `.guild rank [$CharacterName] #Rank` | 为玩家 $CharacterName（或选定的）在公会中排名#Rank 设置。 | Set for player $CharacterName (or selected) rank #Rank in a guild. |
| guild rename | 2 | `.guild rename "$GuildName" "$NewGuildName"` | 用 $NewGuildName 重命名一个名为 $GuildName 的公会。公会名称和新公会名称必须用引号引起来。 | Rename a guild named $GuildName with $NewGuildName. Guild name and new guild name must in quotes. |
| guild uninvite | 2 | `.guild uninvite [$CharacterName]` | 从公会中移除玩家 $CharacterName（或选择的）。 | Remove player $CharacterName (or selected) from a guild. |
| guild | 2 | `.guild $subcommand` | 键入 .guild 以查看可能的子命令列表或 .help guild $subcommand 以查看有关子命令的信息 | Type .guild to see the list of possible subcommands or .help guild $subcommand to see info on subcommands |
| help | 0 | `.help [$command]` | 显示给定 $command 的使用说明。如果没有 $command 提供显示列表可用的命令。 | Display usage instructions for the given $command. If no $command provided show list available commands. |
| hidearea | 3 | `.hidearea #areaid` | 将#areaid 的区域隐藏到选定的字符。如果没有选择任何字符，请将此区域隐藏给您。 | Hide the area of #areaid to the selected character. If no character is selected, hide this area to you. |
| honor add kill NOT IMPLEMENTED | 2 | gi.honor add kill | 将目标单位添加为您今天的 pvp 击杀之一（只有当它是种族领袖或玩家时，您才会获得荣誉） | Add the targeted unit as one of your pvp kills today (you only get honor if it's a racial leader or a player) |
| honor add | 2 | `.honor add $amount` | 为选定的玩家增加一定数量的荣誉（今天获得）。 | Add a certain amount of honor (gained today) to the selected player. |
| honor update | 2 | `.honor update` | 强制使用今天的数据更新昨天的荣誉字段，这将为所选玩家重置。 | Force the yesterday's honor fields to be updated with today's data, which will get reset for the selected player. |
| honor | 2 | `.honor $subcommand` | 键入 .honor 以查看可能的子命令列表或 .help Honor $subcommand 以查看有关子命令的信息 | Type .honor to see the list of possible subcommands or .help honor $subcommand to see info on subcommands |
| instance getbossstate | 1 | `.instance getbossstate $bossId [$Name]` | 获取提供的老板 ID 的当前 EncounterState。如果没有提供角色名称，则当前地图将用作目标。 | Gets the current EncounterState for the provided boss id. If no character name is provided, the current map will be used as target. |
| instance listbinds | 1 | `.instance listbinds` | 列出选定播放器的绑定。 | Lists the binds of the selected player. |
| instance savedata | 3 | `.instance savedata` | 将当前玩家地图的 InstanceData 保存到数据库。 | Save the InstanceData for the current player's map to the DB. |
| instance setbossstate | 2 | `.instance setbossstate $bossId $encounterState [$Name]` | 将给定老板 ID 的 EncounterState 设置为新值。 EncounterStates 范围从 0 到 5。如果没有提供角色名称，则当前地图将用作目标。 | Sets the EncounterState for the given boss id to a new value. EncounterStates range from 0 to 5. If no character name is provided, the current map will be used as target. |
| instance stats | 1 | `.instance stats` | 显示有关实例的统计信息。 | Shows statistics about instances. |
| instance unbind | 2 | `.instance unbind <mapid\all> [difficulty]` | 清除所有/部分玩家绑定 | Clear all/some of player's binds |
| instance | 1 | `.instance $subcommand` | 键入 .instance 以查看可能的子命令列表或键入 .help instance $subcommand 以查看有关子命令的信息 | Type .instance to see the list of possible subcommands or .help instance $subcommand to see info on subcommands |
| item move | 2 | `.itemmove #sourceslotid #destinationslotid` | 将物品从库存中的插槽#sourceslotid 移动到#destinationslotid 尚未实施 | Move an item from slots #sourceslotid to #destinationslotid in your inventory Not yet implemented |
| inventory count | 1 | `.inventory count $playerName or $playerGuid` | 计算袋子中的免费插槽，这些袋子分为不同的袋子类型。 | Count free slots in bags divided into different bag types. |
| item refund | 3 | `.item refund <name> <item> <extendedCost>` | 移除物品并根据扩展成本恢复荣誉/竞技场/物品。 | Removes the item and restores honor/arena/items according to extended cost. |
| item restore | 2 | `.item restore [#recoveryItemId] [#playername]` | 为指定玩家恢复已处置的物品。 | Restore an disposed item for the specified player. |
| item restore list | 2 | `.item restore list [#playername]` | 查看指定玩家的可恢复物品。 | See restorable items for the specified player. |
| kick | 2 | `.kick [$charactername] [$reason]` | 无论有没有理由，从世界上踢出给定的角色名称。如果没有提供角色名称，则选择的玩家（除了你自己）将被踢出。如果未提供原因，则默认为“No Reason”。 | Kick the given character name from the world with or without reason. If no character name is provided then the selected player (except for yourself) will be kicked. If no reason is provided, default is "No Reason". |
| learn all crafts | 2 | `.learn crafts` | 学习所有专业和食谱。 | Learn all professions and recipes. |
| learn all default | 2 | `.learn all default [$playername]` | 为选定/$playername 玩家了解他的种族/职业的所有默认法术以及完成任务奖励的法术。 | Learn for selected/$playername player all default spells for his race/class and spells rewarded by completed quests. |
| learn all gm | 2 | `.learn all gm` | 了解游戏大师的所有默认咒语。 | Learn all default spells for Game Masters. |
| learn all lang | 2 | `.learn all lang` | 学习所有语言 | Learn all languages |
| learn all my class | 2 | `.learn all my class` | 学习他的班级可用的所有法术和天赋。 | Learn all spells and talents available for his class. |
| learn all my pettalents | 2 | `.learn all my pettalents` | 了解你的宠物可用于他的生物类型的所有天赋（仅适用于猎人宠物）。 | Learn all talents for your pet available for his creature type (only for hunter pets). |
| learn all my spells | 2 | `.learn all my spells` | 学习他的班级可用的所有法术（除了天赋和作为天赋学习的第一级法术）。 | Learn all spells (except talents and spells with first rank learned as talent) available for his class. |
| learn all my talents | 2 | `.learn all my talents` | 学习他的班级可用的所有天赋（以及作为天赋学习的第一等级的法术）。 | Learn all talents (and spells with first rank learned as talent) available for his class. |
| learn all recipes | 2 | `.learn all recipes [$profession]` | 学习指定职业的所有食谱并将技能等级设置为最高。示例：.learn 所有迷人的食谱 | Learns all recipes of specified profession and sets skill level to max. Example: .learn all recipes enchanting |
| learn | 2 | `.learn #spell [all]` | 被选中的角色学习一个ID为#spell的法术。如果提供了“全部”，则所有等级都已学习。 | Selected character learn a spell of id #spell. If 'all' provided then all ranks learned. |
| levelup | 2 | `.levelup [$playername] [#numberoflevels]` | 通过#numberoflevels 或+1 如果没有提供#numberoflevels 增加/减少具有$playername 的角色的级别（或如果没有提供名称则选择）。如果省略#numberoflevels，则级别将增加1。如果#numberoflevels 为0，则重新启动相同级别。如果未选择任何角色且未提供名称，请​​提高您的等级。命令可用于离线字符。重新计算所有统计数据和相关值。如果需要，可以在级别降低天赋时重置。此外，在等级降低时，具有更高等级要求的装备物品可能会丢失。 | Increase/decrease the level of character with $playername (or the selected if not name provided) by #numberoflevels Or +1 if no #numberoflevels provided). If #numberoflevels is omitted, the level will be increase by 1. If #numberoflevels is 0, the same level will be restarted. If no character is selected and name not provided, increase your level. Command can be used for offline character. All stats and dependent values recalculated. At level decrease talents can be reset if need. Also at level decrease equipped items with greater level requirement can be lost. |
| lfg clean | 3 | `.lfg clean` | 清理当前队列，仅用于调试目的。 | Cleans current queue, only for debugging purposes. |
| lfg group | 1 | `.lfg group` | 显示组中所有玩家的信息（状态、角色、评论、选择的地下城）。 | Shows information about all players in the group (state, roles, comment, dungeons selected). |
| lfg options | 2 | `.lfg options [new value]` | 显示当前 lfg 选项。如果存在额外的参数，则设置新值。 | Shows current lfg options. New value is set if extra param is present. |
| lfg player | 1 | `.lfg player` | 显示有关玩家的信息（状态、角色、评论、选择的地下城）。 | Shows information about player (state, roles, comment, dungeons selected). |
| lfg queue | 1 | `.lfg queue` | 显示有关当前 lfg 队列的信息。 | Shows info about current lfg queues. |
| linkgrave | 3 | `.linkgrave #graveyard_id [alliance\horde]` | 将当前区域链接到任何（或联盟/部落派系幽灵）的墓地。如果墓地离连接到区域最近，这会让角色在死后从区域传送到墓地，并接受该派系的幽灵。仅在另一张地图上添加单个墓地，并且仅在没有墓地链接（或计划在同一地图上链接）的情况下添加。 | Link current zone to graveyard for any (or alliance/horde faction ghosts). This let character ghost from zone teleport to graveyard after die if graveyard is nearest from linked to zone and accept ghost of this faction. Add only single graveyard at another map and only if no graveyards linked (or planned linked at same map). |
| list auras | 1 | `.list auras` | 列出所选生物或玩家的光环（被动和主动）。如果没有选择任何生物或玩家，请列出您自己的光环。 | List auras (passive and active) of selected creature or player. If no creature or player is selected, list your own auras. |
| list creature | 1 | `.list creature #creature_id [#max_count]` | 输出在世界中找到的生物 id 为 #creature_id 的生物。输出按与角色的距离排序的生物向导和坐标。将输出最大#max_count 个生物。如果未提供 #max_count，则使用 10 作为默认值。 | Output creatures with creature id #creature_id found in world. Output creature guids and coordinates sorted by distance from character. Will be output maximum #max_count creatures. If #max_count not provided use 10 as default value. |
| list gobject | 1 | `.list gobject #gameobject_id [#max_count]` | 输出在世界中找到的游戏对象 ID #gameobject_id 的游戏对象。输出按与角色的距离排序的游戏对象 guid 和坐标。将输出最大#max_count 游戏对象。如果未提供 #max_count，则使用 10 作为默认值。 | Output gameobjects with gameobject id #gameobject_id found in world. Output gameobject guids and coordinates sorted by distance from character. Will be output maximum #max_count gameobject. If #max_count not provided use 10 as default value. |
| list item | 1 | `.list item #item_id [#max_count]` | 在所有角色库存、邮件、拍卖和公会银行中找到具有项目 ID #item_id 的输出项目。输出项目 guid、项目所有者 guid、所有者帐户和所有者名称（公会名称和公会银行中的 guid）。将输出最大#max_count 个项目。如果未提供 #max_count，则使用 10 作为默认值。 | Output items with item id #item_id found in all character inventories, mails, auctions, and guild banks. Output item guids, item owner guid, owner account and owner name (guild name and guid in case guild bank). Will be output maximum #max_count items. If #max_count not provided use 10 as default value. |
| list | 1 | `.list $subcommand` | 键入 .list 以查看可能的子命令列表或 .help list $subcommand 以查看有关子命令的信息 | Type .list to see the list of possible subcommands or .help list $subcommand to see info on subcommands |
| lookup area | 1 | `.lookup area $namepart` | 通过 $namepart 查找区域，并返回所有匹配的区域 ID。 | Looks up an area by $namepart, and returns all matches with their area ID's. |
| lookup creature | 1 | `.lookup creature $namepart` | 通过 $namepart 查找一个生物，并返回所有带有其生物 ID 的匹配项。 | Looks up a creature by $namepart, and returns all matches with their creature ID's. |
| lookup event | 1 | `.lookup event $name` | 尝试使用提供的 $name 查找事件的 ID。 | Attempts to find the ID of the event with the provided $name. |
| lookup faction | 1 | `.lookup faction $name` | 尝试使用提供的 $name 查找派系的 ID。 | Attempts to find the ID of the faction with the provided $name. |
| lookup gobject | 1 | `.lookup gobject $objname` | 返回匹配 $objname 的游戏对象 ID。 | Return gameobject(s) ID matching $objname. |
| lookup item | 1 | `.lookup item $itemname` | 通过 $itemname 查找项目，并返回所有匹配项及其项目 ID。 | Looks up an item by $itemname, and returns all matches with their Item ID's. |
| lookup itemset | 1 | `.lookup itemset $itemname` | 查找由 $itemname 设置的项目，并返回所有匹配项及其项目集 ID。 | Looks up an item set by $itemname, and returns all matches with their Item set ID's. |
| lookup map | 1 | `.lookup map $namepart` | 通过 $namepart 查找地图，并返回所有匹配的地图 ID。 | Looks up a map by $namepart, and returns all matches with their map ID's. |
| lookup player account | 2 | `.lookup player account $account ($limit)` | 搜索玩家，账户用户名是$account，可选参数$limit of results。 | Searchs players, which account username is $account with optional parametr $limit of results. |
| lookup player email | 2 | `.lookup player email $email ($limit)` | 搜索玩家，哪个帐户电子邮件是 $email ，可选参数 $limit of results。 | Searchs players, which account email is $email with optional parametr $limit of results. |
| lookup player ip | 2 | `.lookup player ip $ip ($limit)` | 搜索玩家，其中帐户 ast_ip 为 $ip，可选参数 $limit of results。 | Searchs players, which account ast_ip is $ip with optional parametr $limit of results. |
| lookup quest | 1 | `.lookup quest $namepart` | 通过 $namepart 查找任务，并返回所有匹配的任务 ID。 | Looks up a quest by $namepart, and returns all matches with their quest ID's. |
| lookup skill | 1 | `.lookup skill $$namepart` | 通过 $namepart 查找技能，并返回所有匹配项及其技能 ID。 | Looks up a skill by $namepart, and returns all matches with their skill ID's. |
| lookup spell id | 1 | `.lookup spell id #spellid` | 通过#spellid 查找一个咒语，并返回匹配的咒语名称。 | Looks up a spell by #spellid, and returns the match with its spell name. |
| lookup spell | 1 | `.lookup spell $namepart` | 通过 $namepart 查找一个拼写，并返回所有匹配的拼写 ID。 | Looks up a spell by $namepart, and returns all matches with their spell ID's. |
| lookup taxinode | 1 | `.lookup taxinode $substring` | 搜索并输出名称为提供 $substring 的所有taxnode。 | Search and output all taxinodes with provide $substring in name. |
| lookup teleport | 1 | `.lookup teleport $substring` | 搜索并输出名称中带有提供 $substring 的所有 .teleport 命令位置。 | Search and output all .teleport command locations with provide $substring in name. |
| lookup title | 1 | `.lookup title $$namepart` | 通过 $namepart 查找标题，并返回所有匹配的标题 ID 和索引。 | Looks up a title by $namepart, and returns all matches with their title ID's and index's. |
| lookup | 1 | `.lookup $subcommand` | 键入 .lookup 以查看可能的子命令列表或 .help lookup $subcommand 以查看有关子命令的信息 | Type .lookup to see the list of possible subcommands or .help lookup $subcommand to see info on subcommands |
| mailbox | 1 | `.mailbox` | 打开邮箱。 | Open mailbox. |
| maxskill | 2 | `.maxskill` | 将目标玩家的所有技能设置为其当前等级的最大值。 | Sets all skills of the targeted player to their maximum values for its current level. |
| mmap loadedtiles | 3 | `.mmap loadedtiles` | 显示当前加载了哪些图块。 | To show which tiles are currently loaded. |
| mmap loc | 3 | `.mmap loc` | 打印在哪个瓷砖上。 | To print on which tile one is. |
| mmap path | 3 | `.mmap path` | 计算并显示当前选择单元的路径。 | To calculate and show a path to current select unit. |
| mmap stats | 3 | `.mmap stats` | 显示有关 mmap 的当前状态的信息。 | To show information about current state of mmaps. |
| mmap testarea | 3 | `.mmap testarea` | 计算所有附近 NPC 到玩家的路径。 | To calculate paths for all nearby npcs to player. |
| modify arenapoints | 1 | `.modify arenapoints #value` | 为所选玩家添加 $amount 竞技场点数。 | Add $amount arena points to the selected player. |
| modify bit | 2 | `.modify bit #field #bit` | 切换所选玩家的#field 字段的#bit 位。如果没有选择任何玩家，请修改您的角色。 | Toggle the #bit bit of the #field field for the selected player. If no player is selected, modify your character. |
| modify drunk | 2 | `.modify drunk #value` | 将醉酒级别设置为#value (0..100)。值 0 删除醉酒状态，100 是最大醉酒状态。 | Set drunk level to #value (0..100). Value 0 remove drunk state, 100 is max drunked state. |
| modify energy | 2 | `.modify energy #energy` | 修改所选玩家的能量。如果没有玩家被选中，修改你的能量。 | Modify the energy of the selected player. If no player is selected, modify your energy. |
| modify faction | 3 | `.modify faction #factionid #flagid #npcflagid #dynamicflagid` | 修改所选生物的派系和旗帜。没有参数，显示所选生物的派系和旗帜。 | Modify the faction and flags of the selected creature. Without arguments, display the faction and flags of the selected creature. |
| modify gender | 2 | `.modify gender male/female` | 更改所选玩家的性别。 | Change gender of selected player. |
| modify honor | 2 | `.modify honor $amount` | 为所选玩家添加 $amount 荣誉点数。 | Add $amount honor points to the selected player. |
| modify hp | 2 | `.modify hp #newhp` | 修改所选玩家的生命值。如果没有选择任何玩家，请修改您的 hp。 | Modify the hp of the selected player. If no player is selected, modify your hp. |
| modify mana | 2 | `.modify mana #newmana` | 修改所选玩家的法力值。如果没有玩家被选中，修改你的法术力。 | Modify the mana of the selected player. If no player is selected, modify your mana. |
| modify money | 2 | `.modify money #money` | 向选定的玩家添加或移除资金。如果没有玩家被选中，修改你的钱。 #gold 可以为负数以移除资金。 | Add or remove money to the selected player. If no player is selected, modify your money. #gold can be negative to remove money. |
| modify mount | 2 | `.modify mount #id #speed` | 将所选玩家显示为安装在#id 生物并将速度设置为#speed 值。 | Display selected player as mounted at #id creature and set speed to #speed value. |
| modify phase | 2 | `.modify phase #phasemask` | 选定的角色相位掩码更改为#phasemask，并具有相关的世界视野更新。更改活动直到在游戏阶段更改，或 GM 模式启用/禁用，或重新登录。字符点 pasemask 更新为相同的值。 | Selected character phasemask changed to #phasemask with related world vision update. Change active until in game phase changed, or GM-mode enable/disable, or re-login. Character pts pasemask update to same value. |
| modify rage | 2 | `.modify rage #newrage` | 修改选中玩家的怒气。如果没有玩家被选中，修改你的怒气。 | Modify the rage of the selected player. If no player is selected, modify your rage. |
| modify reputation | 2 | `.modify reputation #repId (#repvalue \ $rankname [#delta])` | 将所选玩家在派系#repId 中的声望设置为#repvalue 或$reprank。如果提供了信誉等级名称，则生成的信誉将是该等级的最低信誉加上增量量（如果指定）。您可以使用 '.pinfo rep' 列出所有已知的声望 id，或使用 '.lookup faction $name' 来定位特定的派系 id。 | Sets the selected players reputation with faction #repId to #repvalue or to $reprank. If the reputation rank name is provided, the resulting reputation will be the lowest reputation for that rank plus the delta amount, if specified. You can use '.pinfo rep' to list all known reputation ids, or use '.lookup faction $name' to locate a specific faction id. |
| modify runicpower | 2 | `.modify runicpower #newrunicpower` | 修改所选玩家的符文能量。如果没有玩家被选中，修改你的符文能量。 | Modify the runic power of the selected player. If no player is selected, modify your runic power. |
| modify scale | 2 | `.modify scale #scale` | 将所选玩家或生物的大小修改为“正常比例”*rate。如果没有玩家或生物被选中，修改你的体型。 #rate 的范围可以从 0.1 到 10。 | Modify size of the selected player or creature to "normal scale"*rate. If no player or creature is selected, modify your size. #rate may range from 0.1 to 10. |
| modify speed all | 2 | `.modify speed #rate` | 将所选玩家的所有速度 - 跑步、游泳、向后跑、向后游泳 - 修改为“此移动类型的正常基本速度”*rate。如果没有选择任何玩家，请修改您的速度。 #rate 的范围可以从 0.1 到 50。 | Modify all speeds -run,swim,run back,swim back- of the selected player to "normalbase speed for this move type"*rate. If no player is selected, modify your speed. #rate may range from 0.1 to 50. |
| modify speed backwalk | 2 | `.modify speed backwalk #rate` | 将所选玩家向后跑时的速度修改为“正常后退速度”*rate。如果没有选择任何玩家，请修改您的速度。 #rate 的范围可以从 0.1 到 50。 | Modify the speed of the selected player while running backwards to "normal walk back speed"*rate. If no player is selected, modify your speed. #rate may range from 0.1 to 50. |
| modify speed fly | 2 | `.modify speed fly #rate` | 将所选玩家的飞行速度修改为“正常飞行速度”*rate。如果没有选择任何玩家，请修改您的速度。 #rate 的范围可以从 0.1 到 50。 | Modify the flying speed of the selected player to "normal flying speed"*rate. If no player is selected, modify your speed. #rate may range from 0.1 to 50. |
| modify speed swim | 2 | `.modify speed swim #rate` | 将所选玩家的游泳速度修改为“正常游泳速度”*rate。如果没有选择任何玩家，请修改您的速度。 #rate 的范围可以从 0.1 到 50。 | Modify the swim speed of the selected player to "normal swim speed"*rate. If no player is selected, modify your speed. #rate may range from 0.1 to 50. |
| modify speed walk | 2 | `.modify speed bwalk #rate` | 将所选玩家在跑步时的速度修改为“正常步行速度”*rate。如果没有选择任何玩家，请修改您的速度。 #rate 的范围可以从 0.1 到 50。 | Modify the speed of the selected player while running to "normal walk speed"*rate. If no player is selected, modify your speed. #rate may range from 0.1 to 50. |
| modify speed | 2 | `.modify speed $speedtype #rate` | 将选中玩家的跑动速度修改为“正常基础跑动速度”=1。如果没有玩家被选中，修改你的速度。 $speedtypes 可以是fly、all、walk、backwalk 或swim。 #rate 的范围可以从 0.1 到 50。 | Modify the running speed of the selected player to "normal base run speed"= 1. If no player is selected, modify your speed. $speedtypes may be fly, all, walk, backwalk, or swim. #rate may range from 0.1 to 50. |
| modify spell | 2 |  | 去做 | TODO |
| modify standstate | 2 | `.modify standstate #emoteid` | 站立时更改角色的表情为#emoteid。 | Change the emote of your character while standing to #emoteid. |
| modify talentpoints | 2 | `.modify talentpoints #amount` | 为选定的角色或角色的宠物设置免费天赋点。它将在下一次升级/登录/任务奖励时重置为预期的默认值。 | Set free talent points for selected character or character's pet. It will be reset to default expected at next levelup/login/quest reward. |
| modify | 2 | `.modify $subcommand` | 键入 .modify 以查看可能的子命令列表或 .help modify $subcommand 以查看有关子命令的信息 | Type .modify to see the list of possible subcommands or .help modify $subcommand to see info on subcommands |
| morph reset | 1 | `.morph reset` | 重置所选目标的原始模型。 | Reset the original model for the selected target. |
| morph | 1 | `.morph #displayid` | 将您当前的模型 ID 更改为 #displayid。 | Change your current model id to #displayid. |
| movegens | 3 | `.movegens` | 显示所选生物或玩家的运动发生器堆栈。 | Show movement generators stack for selected creature or player. |
| mute | 2 | `.mute [$playerName] $timeInMinutes [$reason]` | 在 $timeInMinutes 分钟内禁用角色 $playerName（或当前选定）帐户中的任何角色的聊天消息。播放器可以离线。 | Disible chat messaging for any character from account of character $playerName (or currently selected) at $timeInMinutes minutes. Player can be offline. |
| mutehistory | 2 | `.mutehistory #accountname` | 显示帐户#accountname 的静音历史记录。 | Show mute history for account #accountname. |
| nameannounce | 2 | `.nameannounce $announcement` | 向所有在线玩家发送通知，显示发送者的姓名。 | Send an announcement to all online players, displaying the name of the sender. |
| neargrave | 2 | `.neargrave [alliance\horde]` | 找到与区域相连的最近的墓地（或仅离接受联盟或部落派系鬼魂最近的墓地）。 | Find nearest graveyard linked to zone (or only nearest from accepts alliance or horde faction ghosts). |
| notify | 2 | `.notify $MessageToBroadcast` | 在屏幕上向所有在线玩家发送全球消息。 | Send a global message to all players online in screen. |
| npc add formation | 3 | `.npc add formation $leader` | 将选定的生物添加到领导者的阵型中。 | Add selected creature to a leader's formation. |
| npc add item | 3 | `.npc add item #itemId <#maxcount><#incrtime><#extendedcost>r` | 将项目#itemid 添加到所选供应商的项目列表中。还可以选择在供应商项目列表中设置最大项目数和项目计数恢复时间和项目扩展成本。 | Add item #itemid to item list of selected vendor. Also optionally set max count item in vendor item list and time to item count restoring and items ExtendedCost. |
| npc add move | 3 | `.npc add move #creature_guid [#waittime]` | 将您当前的位置添加为具有 guid #creature_guid 的生物的航路点。并且可选添加等待时间。 | Add your current location as a waypoint for creature with guid #creature_guid. And optional add wait time. |
| npc add temp | 3 | `.npc add temp` | 添加临时 NPC，不保存到数据库。 | Adds temporary NPC, not saved to database. |
| npc add | 3 | `.npc add #creatureid` | 通过#creatureid 的给定模板ID 生成一个生物。 | Spawn a creature by the given template id of #creatureid. |
| npc delete item | 3 | `.npc delete item #itemId` | 从选定供应商的项目列表中删除项目#itemid。 | Remove item #itemid from item list of selected vendor. |
| npc delete | 3 | `.npc delete [#guid]` | 删除带有 guid #guid 的生物（如果没有提供 guid，则选择该生物） | Delete creature with guid #guid (or the selected if no guid is provided) |
| npc follow stop | 2 | `.npc follow stop` | 选定的生物（非宠物）停止跟随你。 | Selected creature (non pet) stop follow you. |
| npc follow | 2 | `.npc follow start` | 选定的生物开始跟随你直到死亡/战斗/等。 | Selected creature start follow you until death/fight/etc. |
| npc info | 1 | `.npc info` | 显示所选生物的详细信息列表。该列表包括：- GUID、派系、NPC 标志、条目 ID、模型 ID、- 级别、- 健康（当前/最大值）、- 字段标志、动态标志、派系模板，- 位置信息，- 和生物类型，例如如果该生物是供应商。 | Display a list of details for the selected creature. The list includes: - GUID, Faction, NPC flags, Entry ID, Model ID, - Level, - Health (current/maximum), - Field flags, dynamic flags, faction template, - Position information, - and the creature type, e.g. if the creature is a vendor. |
| npc move | 3 | `.npc move [#creature_guid]` | 将目标生物重生点移动到您的坐标。 | Move the targeted creature spawn point to your coordinates. |
| npc playemote | 3 | `.npc playemote #emoteid` | 使用 id 为 #emoteid 的表情使选定的生物表情。 | Make the selected creature emote with an emote of id #emoteid. |
| npc say | 2 | `.npc say $message` | 让选定的生物说出指定的信息。 | Make selected creature say specified message. |
| npc set allowmove | 3 | `.npc set allowmove` | 启用或禁用世界中的移动生物。未实现。 | Enable or disable movement creatures in world. Not implemented. |
| npc set data | 3 | `.npc set data $field $data` | 设置所选生物的数据。用于测试脚本 | Sets data for the selected creature. Used for testing Scripting |
| npc set entry | 3 | `.npc set entry $entry` | 将所选生物与另一种生物模板中的条目进行切换。 - 未保存到数据库中的新的 monster.id 值。 | Switch selected creature with another entry from creature_template. - New creature.id value not saved to DB. |
| npc set faction original | 3 | `.npc set faction original` | 恢复所选生物的时间派系。 | Revert the temporal faction of the selected creature. |
| npc set faction permanent | 3 | `.npc set faction permanent #factionid` | 将所选生物的派系永久设置为#factionid。 | Permanently set the faction of the selected creature to #factionid. |
| npc set faction temp | 3 | `.npc set faction temp #factionid` | 暂时将所选生物的派系设置为#factionid。 | Temporarily set the faction of the selected creature to #factionid. |
| npc set flag | 3 | `.npc set flag #npcflag` | 将所选生物和所选生物的生物模板的NPC标志设置为#npcflag。在服务器重新启动或网格卸载/加载后，NPC 标志将应用于所选生物模板的所有生物。 | Set the NPC flags of creature template of the selected creature and selected creature to #npcflag. NPC flags will applied to all creatures of selected creature template after server restart or grid unload/load. |
| npc set level | 3 | `.npc set level #level` | 将所选生物的等级更改为#level。 #level 的范围可以从 1 到 (CONFIG_MAX_PLAYER_LEVEL) + 3。 | Change the level of the selected creature to #level. #level may range from 1 to (CONFIG_MAX_PLAYER_LEVEL) + 3. |
| npc set link | 3 | `.npc set link $creatureGUID` | 将选定生物的重生链接到 $creatureGUID 定义的条件为活动状态。 | Links respawn of selected creature to the condition that $creatureGUID defined is alive. |
| npc set model | 3 | `.npc set model #displayid` | 将所选生物的模型 ID 更改为 #displayid。 | Change the model id of the selected creature to #displayid. |
| npc set movetype | 3 | `.npc set movetype [#creature_guid] stay/random/way [NODEL]` | 为#creature_guid 指向的生物设置（或如果未提供#creature_guid 则选择）移动类型并将其移动到重生位置（如果生物活着）。如果您不使用 NODEL，任何现有的生物航路点都将从数据库中删除。如果该生物已经死亡，那么移动类型将在生物重生时应用。如果要保留航点，请确保使用 NODEL。 | Set for creature pointed by #creature_guid (or selected if #creature_guid not provided) movement type and move it to respawn position (if creature alive). Any existing waypoints for creature will be removed from the database if you do not use NODEL. If the creature is dead then movement type will applied at creature respawn. Make sure you use NODEL, if you want to keep the waypoints. |
| npc set phase | 3 | `.npc set phase #phasemask` | 选定的单位或宠物相位掩码更改为#phasemask，并为玩家提供相关的世界视野更新。在生物情况下，状态保存到数据库并持久化。在宠物情况下，更改活动直到在游戏阶段更改为所有者、所有者重新登录或 GM 模式启用/禁用.. | Selected unit or pet phasemask changed to #phasemask with related world vision update for players. In creature case state saved to DB and persistent. In pet case change active until in game phase changed for owner, owner re-login, or GM-mode enable/disable.. |
| npc set spawntime | 3 | `.npc set spawntime #time` | 将所选生物的生成时间调整为时间。 | Adjust spawntime of selected creature to time. |
| npc set wanderdistance | 3 | `.npc set wanderdistance #dist` | 将所选生物的漫游距离调整为 dist。 | Adjust wanderdistance of selected creature to dist. |
| npc tame | 2 | `.npc tame` | 驯服选定的生物（如果它是可驯服的）。 | Tame the selected creature (if it is tameable). |
| npc textemote | 2 | `.npc textemote #emoteid` | 使选定的生物使用 id 为 #emoteid 的表情进行文本表情。 | Make the selected creature to do textemote with an emote of id #emoteid. |
| npc whisper | 2 | `.npc whisper #playerguid #text` | 让选定的 npc 向 #playerguid 低语 #text。 | Make the selected npc whisper #text to #playerguid. |
| npc yell | 2 | `.npc yell $message` | 让选定的生物喊出指定的信息。 | Make selected creature yell specified message. |
| npc | 2 | `.npc $subcommand` | 键入 .npc 以查看可能的子命令列表或 .help npc $subcommand 以查看有关子命令的信息 | Type .npc to see the list of possible subcommands or .help npc $subcommand to see info on subcommands |
| pdump load | 3 | `.pdump load $filename $account [$newname] [$newguid]` | 将转储文件中的字符转储加载到 $account 的字符列表中，使用已保存或 $newname、已保存（或第一个免费）或 $newguid guid。 | Load character dump from dump file into character list of $account with saved or $newname, with saved (or first free) or $newguid guid. |
| pdump write | 3 | `.pdump write $filename $playerNameOrGUID` | 将带有名称/guid $playerNameOrGUID 的字符转储写入文件 $filename。 | Write character dump with name/guid $playerNameOrGUID to file $filename. |
| pdump | 3 | `.pdump $subcommand` | 键入 .pdump 以查看可能的子命令列表或 .help pdump $subcommand 以查看有关子命令的信息 | Type .pdump to see the list of possible subcommands or .help pdump $subcommand to see info on subcommands |
| pet create | 2 | `.pet create` | 创造一个选定生物的宠物。 | Creates a pet of the selected creature. |
| pet learn | 2 | `.pet learn` | 学习#spellid 来宠爱。 | Learn #spellid to pet. |
| pet unlearn | 2 | `.pet unlean` | 取消学习#spellid 来宠爱。 | unLearn #spellid to pet. |
| pet | 2 | `.pet $subcommand` | 键入 .pet 以查看可能的子命令列表或 .help pet $subcommand 以查看有关子命令的信息 | Type .pet to see the list of possible subcommands or .help pet $subcommand to see info on subcommands |
| pinfo | 2 | `.pinfo [$player_name/#GUID]` | 输出所选玩家的帐户信息或按 $player_name 或 #GUID 查找的玩家。 | Output account information for selected player or player find by $player_name or #GUID. |
| playall | 2 | `.playall #soundid` | 向整个服务器播放声音。 | Player a sound to whole server. |
| player learn | 2 | `.player learn #playername #spell [all]` | 为指定的玩家学习法术#spell。如果添加了“all”，则学习所有等级。 | Learn spell #spell for the specified player. If 'all' is added then all ranks are learned. |
| player unlearn | 2 | `.player unlearn #playername #spell [all]` | 取消指定玩家的法术#spell。如果添加了“全部”，则所有等级都不会被学习。 | Unlearn spell #spell for the specified player. If 'all' is added then all ranks are unlearned. |
| possess | 2 | `.possess` | 无限期地拥有选定的生物。 | Possesses indefinitely the selected creature. |
| quest add | 2 | `.quest add #quest_id` | 添加到角色任务日志任务#quest_id。此命令无法添加从项目开始的任务，但命令输出中提供了正确的 .additem 调用。 | Add to character quest log quest #quest_id. Quest started from item can't be added by this command but correct .additem call provided in command output. |
| quest complete | 2 | `.quest complete #questid` | 将目标角色主动任务的所有任务目标标记为已完成。之后这个目标人物就可以去领取任务奖励了。 | Mark all quest objectives as completed for target character active quest. After this target character can go and get quest reward. |
| quest remove | 2 | `.quest remove #quest_id` | 将所选玩家的任务#quest_id 状态设置为未完成且未激活（并从激活的任务列表中删除）。 | Set quest #quest_id state to not completed and not active (and remove from active quest list) for selected player. |
| quest reward | 2 | `.quest reward #questId` | 向选定的玩家授予任务奖励并从他的日志中删除任务（任务必须处于完成状态）。 | Grants quest reward to selected player and removes quest from his log (quest must be in completed state). |
| quest | 2 | `.quest $subcommand` | 键入 .quest 以查看可能的子命令列表或 .help quest $subcommand 以查看有关子命令的信息 | Type .quest to see the list of possible subcommands or .help quest $subcommand to see info on subcommands |
| recall | 2 | `.recall [$playername]` | 将 $playername 或选定的玩家传送到他上次使用传送命令之前所在的位置。如果没有输入 $playername 并且没有选择任何玩家，它会传送你。 | Teleport $playername or selected player to the place where he has been before last use of a teleportation command. If no $playername is entered and no player is selected, it will teleport you. |
| reload access_requirement | 3 | `.reload access_requirement` | 重新加载 access_requirement 表。 | Reload access_requirement table. |
| reload achievement_reward_locale | 3 | `.reload achievement_reward_locale` | 重新加载成就奖励语言环境表。 | Reload achievement_reward_locale table. |
| reload achievement_reward | 3 | `.reload achievement_reward` | 重新加载成就奖励表。 | Reload achievement_reward table. |
| reload acore_string | 3 | `.reload acore_string` | 重新加载 acore_string 表。 | Reload acore_string table. |
| reload all achievement | 3 | `.reload all achievement` | 重新加载成就奖励、成就标准数据表。 | Reload achievement_reward, achievement_criteria_data tables. |
| reload all area | 3 | `.reload all area` | 重新加载 areatrigger_teleport、areatrigger_tavern、game_graveyard_zone 表。 | Reload areatrigger_teleport, areatrigger_tavern, game_graveyard_zone tables. |
| reload all gossips | 3 | `.reload all gossips` | 重新加载 gossip_menu、gossip_menu_option、gossip_scripts、points_of_interest 表。 | Reload gossip_menu, gossip_menu_option, gossip_scripts, points_of_interest tables. |
| reload all item | 3 | `.reload all item` | 重新加载 page_text、item_enchantment_table 表。 | Reload page_text, item_enchantment_table tables. |
| reload all locales | 3 | `.reload all locales` | 重新加载所有添加了重新加载支持的 locales_* 表，并且可以安全地重新加载。 | Reload all locales_* tables with reload support added and that can be safe reloaded. |
| reload all loot | 3 | `.reload all loot` | 重新加载所有 *_loot_template 表。这可能是服务器运行滞后的缓慢操作。 | Reload all *_loot_template tables. This can be slow operation with lags for server run. |
| reload all npc | 3 | `.reload all npc` | 重新加载 npc_option、npc_trainer、npc 供应商、兴趣点表。 | Reload npc_option, npc_trainer, npc vendor, points of interest tables. |
| reload all quest | 3 | `.reload all quest` | 如果为该表添加了重新加载支持并且可以安全地重新加载该表，则重新加载所有与任务相关的表。 | Reload all quest related tables if reload support added for this table and this table can be safe reloaded. |
| reload all scripts | 3 | `.reload all scripts` | 重新加载 gameobject_scripts、event_scripts、quest_end_scripts、quest_start_scripts、spell_scripts、db_script_string、waypoint_scripts 表。 | Reload gameobject_scripts, event_scripts, quest_end_scripts, quest_start_scripts, spell_scripts, db_script_string, waypoint_scripts tables. |
| reload all spell | 3 | `.reload all spell` | 重新加载所有添加了重新加载支持的 spell_* 表，并且可以安全地重新加载。 | Reload all spell_* tables with reload support added and that can be safe reloaded. |
| reload all | 3 | `.reload all` | 重新加载添加了重新加载支持的所有表，并且可以安全地重新加载。 | Reload all tables with reload support added and that can be safe reloaded. |
| reload areatrigger_involvedrelation | 3 | `.reload areatrigger_involvedrelation` | 重新加载 areatrigger_involved 关系表。 | Reload areatrigger_involvedrelation table. |
| reload areatrigger_tavern | 3 | `.reload areatrigger_tavern` | 重新加载 areatrigger_tavern 表。 | Reload areatrigger_tavern table. |
| reload areatrigger_teleport | 3 | `.reload areatrigger_teleport` | 重新加载 areatrigger_teleport 表。 | Reload areatrigger_teleport table. |
| reload auctions | 3 | `.reload auctions` | 从数据库重新加载动态数据表。 | Reload dynamic data tables from the database. |
| reload autobroadcast | 3 | `.reload autobroadcast` | 重新加载自动广播表。 | Reload autobroadcast table. |
| reload battleground_template | 3 | `.reload battleground_template` | 重新加载battleground_template 表。 | Reload battleground_template table. |
| reload broadcast_text | 3 | `.reload broadcast_text` | 重新加载广播文本表。 | Reload broadcast_text table. |
| reload command | 3 | `.reload command` | 重新加载命令表。 | Reload command table. |
| reload conditions | 3 |  | 重新加载条件表。 | Reload conditions table. |
| reload config | 3 | `.reload config` | 重新加载配置设置（默认存储在 worldserver.conf 中）。并非所有设置都可以在重新加载时更改：某些新设置值将在重新启动之前被忽略，某些值将延迟应用或仅应用于新对象/地图，某些值将在重新加载时明确拒绝更改。 | Reload config settings (by default stored in worldserver.conf). Not all settings can be change at reload: some new setting values will be ignored until restart, some values will applied with delay or only to new objects/maps, some values will explicitly rejected to change at reload. |
| reload creature_linked_respawn | 2 | `.reload creature_linked_respawn` | 重新加载 animal_linked_respawn 表。 | Reload creature_linked_respawn table. |
| reload creature_loot_template | 3 | `.reload creature_loot_template` | 重新加载生物战利品模板表。 | Reload creature_loot_template table. |
| reload creature_onkill_reputation | 3 | `.reload creature_onkill_reputation` | 重新加载 bio_onkill_reputation 表。 | Reload creature_onkill_reputation table. |
| reload creature_questender | 3 | `.reload creature_questender` | 重新加载 bio_questender 表。 | Reload creature_questender table. |
| reload creature_queststarter | 3 | `.reload creature_queststarter` | 重新加载 animal_queststarter 表。 | Reload creature_queststarter table. |
| reload creature_template_locale | 3 | `.reload creature_template_locale` | 重新加载生物模板语言环境表。 | Reload creature_template_locale table. |
| reload creature_template | 3 | `.reload creature_template $entry` | 重新加载指定生物的模板。 | Reload the specified creature's template. |
| reload creature_text_locale | 3 | `.reload creature_text_locale` | 重新加载 bio_text_locale 表。 | Reload creature_text_locale table. |
| reload creature_text | 3 | `.reload creature_text` | 重新加载生物文本表。 | Reload creature_text table. |
| reload disables | 3 | `.reload disables` | 重新加载禁用表。 | Reload disables table. |
| reload disenchant_loot_template | 3 | `.reload disenchant_loot_template` | 重新加载 disenchant_loot_template 表。 | Reload disenchant_loot_template table. |
| reload event_scripts | 3 | `.reload event_scripts` | 重新加载 event_scripts 表。 | Reload event_scripts table. |
| reload fishing_loot_template | 3 | `.reload fishing_loot_template` | 重新加载 fishing_loot_template 表。 | Reload fishing_loot_template table. |
| reload game_tele | 3 | `.reload game_tele` | 重新加载 game_tele 表。 | Reload game_tele table. |
| reload gameobject_loot_template | 3 | `.reload gameobject_loot_template` | 重新加载 gameobject_loot_template 表。 | Reload gameobject_loot_template table. |
| reload gameobject_questender | 3 | `.reload gameobject_questender` | 重新加载 gameobject_questender 表。 | Reload gameobject_questender table. |
| reload gameobject_queststarter | 3 | `.reload gameobject_queststarter` | 重新加载 gameobject_queststarter 表。 | Reload gameobject_queststarter table. |
| reload gameobject_template_locale | 3 | `.reload gameobject_template_locale` | 重新加载 gameobject_template_locale 表。 | Reload gameobject_template_locale table. |
| reload gm_tickets | 3 | `.reload gm_tickets` | 重新加载 gm_tickets 表。 | Reload gm_tickets table. |
| reload gossip_menu_option_locale | 3 | `.reload gossip_menu_option_locale` | 重新加载 gossip_menu_option_locale 表。 | Reload gossip_menu_option_locale table. |
| reload gossip_menu_option | 3 | `.reload gossip_menu_option` | 重新加载 gossip_menu_option 表。 | Reload gossip_menu_option table. |
| reload gossip_menu | 3 | `.reload gossip_menu` | 重新加载 gossip_menu 表。 | Reload gossip_menu table. |
| reload item_loot_template | 3 | `.reload item_loot_template` | 重新加载 item_loot_template 表。 | Reload item_loot_template table. |
| reload item_set_name_locale | 3 | `.reload item_set_name_locale` | 重新加载 item_set_name_locale 表。 | Reload item_set_name_locale table. |
| reload item_set_names | 3 | `.reload item_set_names` | 重新加载 item_set_names 表。 | Reload item_set_names table. |
| reload item_template_locale | 3 | `.reload item_template_locale` | 重新加载 item_template_locale 表。 | Reload item_template_locale table. |
| reload lfg_dungeon_rewards | 3 | `.reload lfg_dungeon_rewards` | 重新加载 lfg_dungeon_rewards 表。 | Reload lfg_dungeon_rewards table. |
| reload mail_level_reward | 3 | `.reload mail_level_reward` | 重新加载 mail_level_reward 表。 | Reload mail_level_reward table. |
| reload mail_loot_template | 3 | `.reload quest_mail_loot_template` | 重新加载 quest_mail_loot_template 表。 | Reload quest_mail_loot_template table. |
| reload milling_loot_template | 3 | `.reload milling_loot_template` | 重新加载milling_loot_template 表。 | Reload milling_loot_template table. |
| reload npc_spellclick_spells | 3 | `.reload npc_spellclick_spells` | 重新加载 npc_spellclick_spells 表。 | Reload npc_spellclick_spells table. |
| reload npc_text_locale | 3 | `.reload npc_text_locale` | 重新加载 npc_text_locale 表。 | Reload npc_text_locale table. |
| reload npc_trainer | 3 | `.reload npc_trainer` | 重新加载 npc_trainer 表。 | Reload npc_trainer table. |
| reload npc_vendor | 3 | `.reload npc_vendor` | 重新加载 npc_vendor 表。 | Reload npc_vendor table. |
| reload page_text_locale | 3 | `.reload page_text_locale` | 重新加载 page_tex_locale 表。 | Reload page_tex_locale table. |
| reload page_text | 3 | `.reload page_text` | 重新加载 page_text 表。 | Reload page_text table. |
| reload pickpocketing_loot_template | 3 | `.reload pickpocketing_loot_template` | 重新加载pickpocketing_loot_template 表。 | Reload pickpocketing_loot_template table. |
| reload points_of_interest_locale | 3 | `.reload points_of_interest_locale` | 重新加载 points_of_interest_locale 表。 | Reload points_of_interest_locale table. |
| reload points_of_interest | 3 | `.reload points_of_interest` | 重新加载 points_of_interest 表。 | Reload points_of_interest table. |
| reload prospecting_loot_template | 3 | `.reload prospecting_loot_template` | 重新加载prospecting_loot_template 表。 | Reload prospecting_loot_template table. |
| reload quest_offer_reward_locale | 3 | `.reload quest_offer_reward_locale` | 重新加载 quest_offer_reward_locale 表。 | Reload quest_offer_reward_locale table. |
| reload quest_poi | 3 | `.reload quest_poi` | 重新加载 quest_poi 表。 | Reload quest_poi table. |
| reload quest_request_item_locale | 3 | `.reload quest_request_item_locale` | 重新加载 quest_request_item_locale 表。 | Reload quest_request_item_locale table. |
| reload quest_template_locale | 3 | `.reload quest_template_locale` | 重新加载 quest_template_locale 表。 | Reload quest_template_locale table. |
| reload quest_template | 3 | `.reload quest_template` | 重新加载 quest_template 表。 | Reload quest_template table. |
| reload reference_loot_template | 3 | `.reload reference_loot_template` | 重新加载 reference_loot_template 表。 | Reload reference_loot_template table. |
| reload reputation_reward_rate | 3 | `.reload reputation_reward_rate` | 重新加载reputation_reward_rate 表。 | Reload reputation_reward_rate table. |
| reload reputation_spillover_template | 3 | `.reload reputation_spillover_template` | 重新加载credit_spillover_template 表。 | Reload reputation_spillover_template table. |
| reload reserved_name | 3 | `.reload reserved_name` | 重新加载 reserved_name 表。 | Reload reserved_name table. |
| reload skill_discovery_template | 3 | `.reload skill_discovery_template` | 重新加载 Skill_discovery_template 表。 | Reload skill_discovery_template table. |
| reload skill_extra_item_template | 3 | `.reload skill_extra_item_template` | 重新加载 Skill_extra_item_template 表。 | Reload skill_extra_item_template table. |
| reload skill_fishing_base_level | 3 | `.reload skill_fishing_base_level` | 重新加载 Skill_fishing_base_level 表。 | Reload skill_fishing_base_level table. |
| reload skinning_loot_template | 3 | `.reload skinning_loot_template` | 重新加载 skinning_loot_template 表。 | Reload skinning_loot_template table. |
| reload smart_scripts | 3 | `.reload smart_scripts` | 重新加载 smart_scripts 表。 | Reload smart_scripts table. |
| reload spell_area | 3 | `.reload spell_area` | 重新加载 spell_area 表。 | Reload spell_area table. |
| reload spell_bonus_data | 3 | `.reload spell_bonus_data` | 重新加载 spell_bonus_data 表。 | Reload spell_bonus_data table. |
| reload spell_group_stack_rules | 3 | `.reload spell_group` | 重新加载 spell_group_stack_rules 表。 | Reload spell_group_stack_rules table. |
| reload spell_group | 3 | `.reload spell_group` | 重新加载 spell_group 表。 | Reload spell_group table. |
| reload spell_linked_spell | 3 | `.reload spell_linked_spell` | 重新加载 spell_linked_spell 数据库表。 | Reloads the spell_linked_spell DB table. |
| reload spell_loot_template | 3 | `.reload spell_loot_template` | 重新加载 spell_loot_template 表。 | Reload spell_loot_template table. |
| reload spell_pet_auras | 3 | `.reload spell_pet_auras` | 重新加载 spell_pet_auras 表。 | Reload spell_pet_auras table. |
| reload spell_proc_event | 3 | `.reload spell_proc_event` | 重新加载 spell_proc_event 表。 | Reload spell_proc_event table. |
| reload spell_proc | 3 | `.reload spell_proc` | 重新加载 spell_proc 表。 | Reload spell_proc table. |
| reload spell_required | 3 | `.reload spell_required` | 重新加载 spell_required 表。 | Reload spell_required table. |
| reload spell_scripts | 3 | `.reload spell_scripts` | 重新加载 spell_scripts 表。 | Reload spell_scripts table. |
| reload spell_target_position | 3 | `.reload spell_target_position` | 重新加载 spell_target_position 表。 | Reload spell_target_position table. |
| reload spell_threats | 3 | `.reload spell_threats` | 重新加载 spell_threats 表。 | Reload spell_threats table. |
| reload vehicle_accessory | 3 | `.reload vehicle_accessory` | 从数据库重新加载基于 GUID 的车辆附件定义。 | Reloads GUID-based vehicle accessory definitions from the database. |
| reload vehicle_template_accessory | 3 | `.reload vehicle_template_accessory` | 从数据库重新加载基于条目的车辆附件定义。 | Reloads entry-based vehicle accessory definitions from the database. |
| reload waypoint_data | 3 | `.reload waypoint_data` | 将重新加载 waypoint_data 表。 | Will reload waypoint_data table. |
| reload waypoint_scripts | 3 | `.reload waypoint_scripts` | 重新加载 waypoint_scripts 表。 | Reload waypoint_scripts table. |
| reload | 3 | `.reload $subcommand` | 键入 .reload 以查看可能的子命令列表或 .help reload $subcommand 以查看有关子命令的信息 | Type .reload to see the list of possible subcommands or .help reload $subcommand to see info on subcommands |
| reset achievements | 4 | `.reset achievements [$playername]` | 重置选定或命名（在线或离线）角色的成就数据。持久性进度数据的成就，如已完成的任务/等，在重置时重新填充。诸如击杀/施放/等事件的成就将丢失。 | Reset achievements data for selected or named (online or offline) character. Achievements for persistance progress data like completed quests/etc re-filled at reset. Achievements for events like kills/casts/etc will lost. |
| reset all | 4 | `.reset all [spells/talents]` | 下次登录每个已存在的角色时，请求重置法术或天赋（包括所有角色宠物的天赋，如果有的话）。 | Request reset spells or talents (including talents for all character's pets if any) at next login each existed character. |
| reset honor | 3 | `.reset honor [Playername]` | 重置目标角色的所有荣誉数据。 | Reset all honor data for targeted character. |
| reset level | 3 | `.reset level [Playername]` | 将等级重置为 1，包括重置统计数据和天赋。具有更高等级要求的装备物品可能会丢失。 | Reset level to 1 including reset stats and talents. Equipped items with greater level requirement can be lost. |
| reset spells | 3 | `.reset spells [Playername]` | 从法术书中移除所有非原始法术。 .玩家名可以是离线角色的名字。 | Removes all non-original spells from spellbook. . Playername can be name of offline character. |
| reset stats | 3 | `.reset stats [Playername]` | 将目标玩家的所有统计数据重置（重新计算）到其当前级别的原始值。 | Resets(recalculate) all stats of the targeted player to their original VALUESat current level. |
| reset talents | 3 | `.reset talents [Playername]` | 移除目标玩家或宠物的所有天赋或命名玩家玩家名称可以是离线角色的名称。如果有玩家天赋，所有角色宠物的天赋也会被重置。 | Removes all talents of the targeted player or pet or named player Playername can be name of offline character. With player talents also will be reset talents for all character's pets if any. |
| reset | 3 | `.reset $subcommand` | 键入 .reset 以查看可能的子命令列表或 .help reset $subcommand 以查看有关子命令的信息 | Type .reset to see the list of possible subcommands or .help reset $subcommand to see info on subcommands |
| respawn | 2 | `.respawn` | 重生目标生物并 GO，无需等待重生时间到期。如果没有提供目标，则重生所有最近的生物。 | Respawn target creature and GO without waiting for respawn time expiration. If no target provided, respawn all nearest creatures. |
| revive | 2 | `.revive` | 复活选中的玩家。如果没有玩家被选中，它会让你复活。 | Revive the selected player. If no player is selected, it will revive you. |
| save | 0 | `.save` | 拯救你的性格。 | Saves your character. |
| saveall | 2 | `.saveall` | 保存游戏中的所有角色。 | Save all characters in game. |
| send items | 2 | `.send items #playername "#subject" "#text" itemid1[:count1] itemid2[:count2] ... itemidN[:countN]` | 向玩家发送邮件。主题和邮件文本必须在“”中。如果为 itemid 未提供相关计数值，则预期为 1，如果计数 > 堆栈中的最大项目，则项目将以所需数量的堆栈发送。邮件中的所有堆叠数量限制为 12。 | Send a mail to a player. Subject and mail text must be in "". If for itemid not provided related count values then expected 1, if count > max items in stack then items will be send in required amount stacks. All stacks amount in mail limited to 12. |
| send mail | 2 | `.send mail #playername "#subject" "#text"` | 向玩家发送邮件。主题和邮件文本必须在“”中。 | Send a mail to a player. Subject and mail text must be in "". |
| send message | 3 | `.send message $playername $message` | 从管理员向播放器发送屏幕消息。如果播放器离线，将返回错误（例如，SOAP 可能会出现问题）！ | Send screen message to player from ADMINISTRATOR. Will return an error if player is offline (can be problematic with SOAP for example)! |
| send money | 2 | `.send money #playername "#subject" "#text" #money` | 向玩家发送带有金钱的邮件。主题和邮件文本必须在“”中。 | Send mail with money to a player. Subject and mail text must be in "". |
| server corpses | 2 | `.server corpses` | 触发尸体在世界中过期检查。 | Triggering corpses expire check in world. |
| server debug | 3 | `.server debug` | 显示有关服务器设置的详细信息，在报告错误时很有用。 | Shows detailed information about the server setup, useful when reporting a bug. |
| server exit | 4 | `.server exit` | 立即终止世界服务器。退出代码 0。 | Terminate worldserver NOW. Exit code 0. |
| server idlerestart cancel | 3 | `.server idlerestart cancel` | 如果有，请取消重启/关机计时器。 | Cancel the restart/shutdown timer if any. |
| server idlerestart | 4 | `.server idlerestart #delay [#exit_code]` | 如果没有活动连接（没有玩家），则在 #delay 秒后重新启动服务器。使用 #exit_code 更改退出代码，默认 = 2。 | Restart the server after #delay seconds if no active connections are present (no players). Use #exit_code to change the exit code, default = 2. |
| server idleshutdown cancel | 4 | `.server idleshutdown cancel` | 如果有，请取消重启/关机计时器。 | Cancel the restart/shutdown timer if any. |
| server idleshutdown | 3 | `.server idleshutdown #delay [#exit_code]` | 如果没有活动连接（没有玩家），则在#delay 秒后关闭服务器。使用 #exit_code 更改退出代码，默认 = 0。 | Shut the server down after #delay seconds if no active connections are present (no players). Use #exit_code to change the exit code, default = 0. |
| server info | 0 | `.server info` | 显示服务器版本和连接的玩家数量。 | Display server version and the number of connected players. |
| server motd | 0 | `.server motd` | 显示当天的服务器消息。 | Show server Message of the day. |
| server restart cancel | 3 | `.server restart cancel` | 如果有，请取消重启/关机计时器。 | Cancel the restart/shutdown timer if any. |
| server restart | 3 | `.server restart #delay [#exit_code]` | #delay 秒后重新启动服务器。使用 #exit_code 更改退出代码，默认 = 2。 | Restart the server after #delay seconds. Use #exit_code to change the exit code, default = 2. |
| server set closed | 4 | `.server set closed [on/off]` | 设置世界是否接受新的客户端连接。 | Sets whether the world accepts new client connectsions. |
| server set difftime | 4 | `.server set difftime $time` | $time（以毫秒为单位）更新时间差异被写入日志文件。 | $time (in milliseconds) update time diff is written to the log file. |
| server set loglevel | 4 | `.server set loglevel $facility $name $loglevel` | $facility 可以取值：appender (a) 或 logger (l)。 $loglevel 可以取值：禁用 (0)、跟踪 (1)、调试 (2)、信息 (3)、警告 (4)、错误 (5) 或致命 (6) | $facility can take the values: appender (a) or logger (l). $loglevel can take the values: disabled (0), trace (1), debug (2), info (3), warn (4), error (5) or fatal (6) |
| server set motd | 3 | `.server set motd $MOTD` | 设置当天的服务器消息。 | Set server Message of the day. |
| server shutdown cancel | 3 | `.server shutdown cancel` | 如果有，请取消重启/关机计时器。 | Cancel the restart/shutdown timer if any. |
| server shutdown | 3 | `.server shutdown #delay [#exit_code]` | #delay 秒后关闭服务器。使用 #exit_code 更改退出代码，默认 = 0。 | Shut the server down after #delay seconds. Use #exit_code to change the exit code, default = 0. |
| server togglequerylog | 4 | `.server togglequerylog` | 打开/关闭 SQL 查询日志。 | Toggle SQL query log on/off. |
| server | 3 | `.server $subcommand` | 键入 .server 以查看可能的子命令列表或 .help server $subcommand 以查看有关子命令的信息 | Type .server to see the list of possible subcommands or .help server $subcommand to see info on subcommands |
| setskill | 2 | `.setskill #skill #level [#max]` | 为所选角色设置一个ID为#skill的技能，当前技能值为#level，最大值为#max（或等于当前最大值，如果未提供）。如果没有选择角色，您将学习该技能。 | Set a skill of id #skill with a current skill value of #level and a maximum value of #max (or equal current maximum if not provide) for the selected character. If no character is selected, you learn the skill. |
| showarea | 2 | `.showarea #areaid` | 将#areaid 的区域显示给选定的角色。如果没有选择任何角色，请向您展示该区域。 | Reveal the area of #areaid to the selected character. If no character is selected, reveal this area to you. |
| skirmish | 3 | `.skirmish [arena] [XvX] [Nick1] [Nick2] ... [NickN]` | [arena] 可以是“所有”或逗号分隔的可能竞技场列表（NA、BE、RL、DS、RV）。 [XvX]可以是1v1、2v2、3v3、5v5。在 [XvX] 之后为该模式指定足够的昵称。 | [arena] can be "all" or comma-separated list of possible arenas (NA,BE,RL,DS,RV). [XvX] can be 1v1, 2v2, 3v3, 5v5. After [XvX] specify enough nicknames for that mode. |
| spect leave | 0 | `.spect leave` | 离开竞技场观众。 | Leave arena spectator. |
| spect reset | 0 | `.spect reset` | 重置竞技场观众。 | Reset arena spectator. |
| spect spectate | 0 | `.spect spectate #playername` | 开始竞技场观众，观看#playername。 | Start arena spectator, watch #playername. |
| spect version | 0 | `.spect version` | 检查旁观者插件版本。 | Check spectator addon version. |
| spect watch | 0 | `.spect watch #playername` | 观看#playername。 | Watch #playername. |
| summon | 2 | `.summon [$charactername]` | 将给定的角色传送给您。角色可以离线。 | Teleport the given character to you. Character can be offline. |
| teleport add | 3 | `.teleport add $name` | 将当前您的位置添加到名称为 $name 的 .teleport 命令目标位置列表。 | Add current your position to .teleport command target locations list with name $name. |
| teleport del | 3 | `.teleport del $name` | 为 .teleport 命令位置列表删除名称为 $name 的位置。 | Remove location with name $name for .teleport command locations list. |
| teleport group | 2 | `.teleport group#location` | 将选定的玩家和他的团队成员传送到给定的位置。 | Teleport a selected player and his group members to a given location. |
| teleport name | 2 | `.teleport name [#playername] #location` | 将给定角色传送到给定位置。角色可以离线。要传送到 homebind，请将#location 设置为“$home”（不带引号）。 | Teleport the given character to a given location. Character can be offline. To teleport to homebind, set #location to "$home" (without quotes). |
| teleport | 1 | `.teleport #location` | 将玩家传送到给定位置。 | Teleport player to a given location. |
| ticket assign | 2 | `.ticket assign $ticketid $gmname` | 将指定的票分配给指定的 Game Master。 | Assigns the specified ticket to the specified Game Master. |
| ticket close | 2 | `.ticket close $ticketid` | 关闭指定的工单。不会永久删除。 | Closes the specified ticket. Does not delete permanently. |
| ticket closedlist | 2 |  | 显示已关闭的 GM 工单列表。 | Displays a list of closed GM tickets. |
| ticket comment | 2 | `.ticket comment $ticketid $comment` | 允许添加或修改对指定工单的评论。 | Allows the adding or modifying of a comment to the specified ticket. |
| ticket delete | 3 | `.ticket delete $ticketid` | 永久删除指定的票证。票必须先关闭。 | Deletes the specified ticket permanently. Ticket must be closed first. |
| ticket escalate | 2 | `.ticket escalate $ticketid` | 将指定的工单放入升级队列。 | Place the specified ticket in the escalation queue. |
| ticket escalatedlist | 2 |  | 显示升级队列中的所有工单。 | Show all tickets in the escalation queue. |
| ticket list | 2 |  | 显示打开的 GM 工单列表。 | Displays a list of open GM tickets. |
| ticket onlinelist | 2 |  | 显示所有者在线的开放 GM 工单列表。 | Displays a list of open GM tickets whose owner is online. |
| ticket reset | 2 | `.ticket reset` | 如果不存在待处理的未结工单，则删除所有已关闭工单并重置计数器。 | Removes all closed tickets and resets the counter, if no pending open tickets are existing. |
| ticket response append | 2 | `.ticket response append $ticketid $response` | 将响应附加到指定的票证（不带换行符）。 | Append response to the specified ticket (without newline). |
| ticket response appendln | 2 | `.ticket response appendln $ticketid $response` | 将响应附加到指定的票证（带有换行符）。 | Append response to the specified ticket (with newline). |
| ticket togglesystem | 4 | `.ticket togglesystem` | 打开/关闭票务系统。 | Toggle ticket system on/off. |
| ticket unassign | 2 | `.ticket unassign $ticketid` | 从当前分配的 Game Master 中取消分配指定的票证。 | Unassigns the specified ticket from the current assigned Game Master. |
| ticket viewid | 2 | `.ticket viewid $ticketid` | 返回有关指定票证的详细信息。工单必须打开且未删除。 | Returns details about specified ticket. Ticket must be open and not deleted. |
| ticket viewname | 2 | `.ticket viewname $creatorname` | 返回有关指定票证的详细信息。工单必须打开且未删除。 | Returns details about specified ticket. Ticket must be open and not deleted. |
| ticket | 2 | `.ticket $subcommand` | 键入 .ticket 以查看可能的子命令列表或 .help ticket $subcommand 以查看有关子命令的信息 | Type .ticket to see the list of possible subcommands or .help ticket $subcommand to see info on subcommands |
| titles add | 2 | `.titles add #title` | 将标题#title（id 或 shift-link）添加到选定播放器的已知标题列表。 | Add title #title (id or shift-link) to known titles list for selected player. |
| titles current | 2 | `.titles current #title` | 将标题#title（id 或 shift-link）设置为所选播放器的当前所选标题。如果标题不在播放器的已知标题列表中，则它将被添加到列表中。 | Set title #title (id or shift-link) as current selected titl for selected player. If title not in known title list for player then it will be added to list. |
| titles remove | 2 | `.titles remove #title` | 从选定播放器的已知标题列表中删除标题#title（id 或 shift-link）。 | Remove title #title (id or shift-link) from known titles list for selected player. |
| titles set mask | 2 | `.titles set mask #mask` | 允许用户使用#mask 中的所有标题。 #mask=0 禁用标题选择字段 | Allows user to use all titles from #mask. #mask=0 disables the title-choose-field |
| unaura | 2 | `.unaura #spellid` | 移除所选单位的法术 #spellid 导致的光环。 | Remove aura due to spell #spellid from the selected Unit. |
| unban account | 3 | `.unban account $Name` | 解禁帐户名称模式的帐户。 | Unban accounts for account name pattern. |
| unban character | 3 | `.unban character $Name` | 解封角色名称模式的帐户。 | Unban accounts for character name pattern. |
| unban ip | 3 | `.unban ip $Ip` | 解封 IP 模式的帐户。 | Unban accounts for IP pattern. |
| unban playeraccount | 3 | `.unban playeraccount $characterName` | 解禁拥有具有指定角色名称的角色的帐户。 | Unban the account that owns the character having the designated character name. |
| unban | 3 | `.unban $subcommand` | 键入 .unban 以查看可能的子命令列表或 .help unban $subcommand 以查看有关子命令的信息 | Type .unban to see the list of possible subcommands or .help unban $subcommand to see info on subcommands |
| unbindsight | 3 | `.unbindsight` | 移除束缚视野。当前持有目标时无法使用。 | Removes bound vision. Cannot be used while currently possessing a target. |
| unfreeze | 2 | `.unfreeze (#player)` | “解冻”#player 并再次启用他的聊天。在没有#name 的情况下使用它时，它将解冻您的目标。 | "Unfreezes" #player and enables his chat again. When using this without #name it will unfreeze your target. |
| unlearn | 2 | `.unlearn #spell [all]` | 为选定的玩家取消学习咒语#spell。如果提供了“全部”，则所有等级都未学习。 | Unlearn for selected player a spell #spell. If 'all' provided then all ranks unlearned. |
| unmute | 2 | `.unmute [$playerName]` | 从角色 $playerName（或选定）的帐户中恢复任何角色的聊天消息。角色可以离线。 | Restore chat messaging for any character from account of character $playerName (or selected). Character can be ofline. |
| unpossess | 2 | `.unpossess` | 如果你被附身，你就解散你自己；否则不拥有当前拥有的目标。 | If you are possessed, unpossesses yourself; otherwise unpossesses current possessed target. |
| unstuck | 2 | `.unstuck $playername [inn/graveyard/startzone]` | 将指定的玩家传送到指定的位置。默认位置是玩家当前的壁炉位置。 | Teleports specified player to specified location. Default location is player's current hearth location. |
| wchange | 3 | `.wchange #weathertype #status` | 将当前天气设置为#weathertype，强度为#status。 #weathertype 可以是 1 表示雨，2 表示雪，3 表示沙。 #status 可以为 0 表示禁用，1 表示启用。 | Set current weather to #weathertype with an intensity of #status. #weathertype can be 1 for rain, 2 for snow, and 3 for sand. #status can be 0 for disabled, and 1 for enabled. |
| whispers | 1 | `.whispers on\off` | 启用/禁用 GM 接受玩家的耳语。默认使用 worldserver.conf 设置。 | Enable/disable accepting whispers by GM from players. By default use worldserver.conf setting. |
| wp add | 3 | `.wp add` | 在当前位置为所选生物添加一个航点。 | Add a waypoint for the selected creature at your current position. |
| wp event | 3 | `.wp event $subcommand` | 键入 .path event 以查看可能的子命令列表或键入 .help path event $subcommand 以查看有关子命令的信息。 | Type .path event to see the list of possible subcommands or .help path event $subcommand to see info on subcommands. |
| wp load | 3 | `.wp load $pathid` | 加载所选生物的 pathid 编号。生物必须没有航点数据。 | Load pathid number for selected creature. Creature must have no waypoint data. |
| wp modify | 3 | `.wp modify $optionOptions:action` | 更改值 actionaction_chance 更改值 action_chancedel 删除选定航点delay 更改值 delaymove 移动选定航点move_flag 更改值 move_flag | Changes the value actionaction_chance Changes the value action_chancedel Deletes a selected waypointdelay Changes the value delaymove Moves a selected waypointmove_flag Changes the value move_flag |
| wp reload | 3 | `.wp reload $pathid` | 在游戏中加载路径更改 - 重要提示：必须在 .wp load #pathid 之前首先应用新路径 | Load path changes ingame - IMPORTANT: must be applied first for new paths before .wp load #pathid |
| wp show | 3 | `.wp show $optionOptions:on $pathid (or selected creature with loaded path)` | 显示视觉航点（注意：您必须打开 GM 才能查看航点）off 隐藏视觉航点。info 显示所选航点的信息。first 显示第一个航点的视觉信息。last 显示最后一个航点的视觉信息。 | Show visual waypoints (Note: You must have GM on to see the waypoints)off Hide the visual waypoints.info Shows info for selected waypoint.first Shows visual the first waypoint.last Shows visual the last waypoint. |
| wp unload | 3 | `.wp unload` | 所选生物的卸载路径。 | Unload path for selected creature. |
| wpgps | 4 | `.wpgps` | 将当前位置作为部分 SQL 查询输出到 sql 开发人员日志以用于路径 | Output current position to sql developer log as partial SQL query to be used in pathing |