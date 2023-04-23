
# 操作系统
* 操作系统：Windows
* 版本：>= Win 10
* 架构：64 位

# 需要安装的软件
1. [Git](https://git-scm.com/download/win)
2. [Visual Studio](https://visualstudio.microsoft.com/downloads)
3. [MySQL Server Community Edition](https://dev.mysql.com/downloads/mysql/8.0.html)
4. [HeidiSQL](https://www.heidisql.com/download.php)
5. [CMake](https://cmake.org/download/)
6. [OpenSSL](http://www.slproweb.com/products/Win32OpenSSL.html)
7. [Boost](https://www.boost.org/users/download/)

# 编译
1. 拉代码 (https://github.com/azerothcore/azerothcore-wotlk.git)
2. 使用 CMake 生成 Visual Studio 解决方案
3. 使用VS编译代码

# 运行
1. 拷贝 `libmysql.dll` 和 `libcrypto-1_1-x64.dll` 到编译输出目录
2. 在 `configs` 目录下创建 `worldserver.conf` 和 `authserver.conf` 文件
3. 下载 `data` 数据包并解压到 `data` 目录
4. 数据库初始化
5. 运行 `worldserver.exe` 和 `authserver.exe`
