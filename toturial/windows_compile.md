
# 1 操作系统
* 操作系统：Windows
* 版本：>= Win 10
* 架构：64 位

# 2 软件安装

## 2.1 需要安装的软件列表
1. [Git](https://git-scm.com/download/win)
2. [Visual Studio](https://visualstudio.microsoft.com/downloads)
3. [MySQL Server Community Edition](https://dev.mysql.com/downloads/mysql/8.0.html)
4. [HeidiSQL](https://www.heidisql.com/download.php)
5. [CMake](https://cmake.org/download/)
6. [OpenSSL](http://www.slproweb.com/products/Win32OpenSSL.html)
7. [Boost](https://sourceforge.net/projects/boost/files/boost-binaries/1.81.0/boost_1_81_0-msvc-14.3-64.exe/download)

## 2.2 环境变量
以下环境变量都加在“系统”环境变量里。
1. `Path` 添加 `C:\Program Files\MySQL\MySQL Server 8.0\bin\`。
2. 新建 `BOOST_ROOT`，值为 `C:/local/boost_1_81_0`。

注意以上路径可能不一样，根据自己的安装路径来。
在添加前最好去文件浏览器里确保这些路径是真实存在的。

# 3 编译
1. 拉代码 https://github.com/azerothcore/azerothcore-wotlk.git
2. 使用 CMake 生成 Visual Studio 解决方案
3. 使用VS编译代码

# 4 准备运行环境
## 4.1 拷贝 dll
1. 拷贝 `C:\Program Files\MySQL\MySQL Server 8.0\bin\` 里的 `libmysql.dll` 到编译输出目录。
2. 打开 boost bin 目录，默认为 `C:\local\boost_1_81_0\bin`，在其中拷贝以下 dll 文件到编译输出目录
	* `legacy.dll`
	* `libcrypto-3-x64.dll`
	* `libssl-3-x64.dll`

## 4.2 下载 data.zip
下载 [data.zip](https://github.com/wowgaming/client-data/releases/) 数据包，解压到 `bin\RelWithDebInfo\Data` 目录。

## 4.3 配置文件
1. 在 `configs` 目录下创建 `worldserver.conf` 和 `authserver.conf` 文件，可以先复制两个 `.dist` 后缀的文件，然后分别改名。
2. 打开 `worldserver.conf` 文件，搜索 `DataDir`，把值改为 `.\Data`。

以下是所有跟数据库有关的配置：
```ini
LoginDatabaseInfo     = "127.0.0.1;3306;acore;acore;acore_auth" ;worldserver.conf / authserver.conf
WorldDatabaseInfo     = "127.0.0.1;3306;acore;acore;acore_world" ;worldserver.conf
CharacterDatabaseInfo = "127.0.0.1;3306;acore;acore;acore_characters" ;worldserver.conf
```

如果数据库是装在本机上，就不需要改了，否则需要改一下IP和端口。

## 4.4 数据库初始化
在数据库里执行以下 SQL 语句：
https://github.com/azerothcore/azerothcore-wotlk/blob/master/data/sql/create/create_mysql.sql

# 5. 运行
直接双击 `worldserver.exe` 和 `authserver.exe` 启动服务器。
第一次启动时，会初始化数据库，因此会比较久，之后就非常快了。

# 参考链接
1. [官方编译安装总目录](https://www.azerothcore.org/wiki/installation#azerothcore-classic-setup)
2. [软件安装说明](https://www.azerothcore.org/wiki/windows-requirements)
3. [编译说明](https://www.azerothcore.org/wiki/windows-core-installation)
4. [服务器设置](https://www.azerothcore.org/wiki/server-setup)
