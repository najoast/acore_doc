
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
1. 拷贝 `C:\Program Files\MySQL\MySQL Server 8.0\bin\` 里的 `libmysql.dll` 到编译输出目录。
2. 打开 boost bin 目录，默认为 `C:\local\boost_1_81_0\bin`，在其中拷贝以下 dll 文件到编译输出目录
	* `legacy.dll`
	* `libcrypto-3-x64.dll`
	* `libssl-3-x64.dll`
3. 在 `configs` 目录下创建 `worldserver.conf` 和 `authserver.conf` 文件，可以直接去掉 `.dist` 后缀。
4. 下载 [data.zip](https://github.com/wowgaming/client-data/releases/) 数据包并解压到 `data` 目录
4. 数据库初始化
5. 运行 `worldserver.exe` 和 `authserver.exe`

# 5 数据库初始化

# 6 启动服务器


# 参考链接
1. [官方编译安装总目录](https://www.azerothcore.org/wiki/installation#azerothcore-classic-setup)
2. [软件安装说明](https://www.azerothcore.org/wiki/windows-requirements)
3. [编译说明](https://www.azerothcore.org/wiki/windows-core-installation)
