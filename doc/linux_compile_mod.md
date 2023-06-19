# Linux 编译 AzerothCore mod

```bash
# 1. 进入代码的 modules 目录
cd ~/dev/azerothcore-wotlk/modules

# 2. 克隆 mod 代码，以 mod-eluna 为例，其他 mod 也是类似的操作
git clone https://github.com/azerothcore/mod-eluna.git

# 3. 进入 build 目录
cd ../build

# 4. 重新 cmake 生成 Makefile
cmake ../ -DCMAKE_INSTALL_PREFIX=$HOME/azeroth-server/ -DCMAKE_C_COMPILER=/usr/bin/clang -DCMAKE_CXX_COMPILER=/usr/bin/clang++ -DWITH_WARNINGS=1 -DTOOLS_BUILD=all -DSCRIPTS=static -DMODULES=static

# 5. 编译
make -j $(nproc --all)

# 6. 安装
make install
```
