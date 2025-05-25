## MeCabインストール
### 公式Doc
- https://taku910.github.io/mecab/#install

## 手順

- MeCabがインストールされているか確認  
`mecab --version`

  ```
  bash: mecab: command not found
  ```

- MeCabをGitからクローンする  
`git clone https://github.com/taku910/mecab.git`
※Amazon Linux2023の標準リポジトリにMeCabが存在しないため  
EPELを有効化してもダメだったのでGitからクローンする選択をした  

  ```
  Cloning into 'mecab'...
  remote: Enumerating objects: 2567, done.
  remote: Counting objects: 100% (475/475), done.
  remote: Compressing objects: 100% (63/63), done.
  remote: Total 2567 (delta 426), reused 415 (delta 412), pack-reused 2092 (from 1)
  Receiving objects: 100% (2567/2567), 85.83 MiB | 3.63 MiB/s, done.
  Resolving deltas: 100% (2040/2040), done.
  Updating files: 100% (453/453), done.
  ```

- ディレクトリを移動  
  `cd mecab/mecab`  

- MeCab本体のインストールとビルド  
  `./configure`
  エラーが出た
  ```
    This script, last modified 2011-05-11, has failed to recognize
  the operating system you are using. It is advised that you
  download the most up to date version of the config scripts from
  
    http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=HEAD
  and
    http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=HEAD
  
  If the version you run (./config.guess) is already up to date, please
  send the following data and any information you think might be
  pertinent to <config-patches@gnu.org> in order to provide the needed
  information to handle your system.
  
  config.guess timestamp = 2011-05-11
  
  uname -m = aarch64
  uname -r = 6.10.14-linuxkit
  uname -s = Linux
  uname -v = #1 SMP Thu Mar 20 16:32:56 UTC 2025
  
  /usr/bin/uname -p = aarch64
  /bin/uname -X     = 
  
  hostinfo               = 
  /bin/universe          = 
  /usr/bin/arch -k       = 
  /bin/arch              = aarch64
  /usr/bin/oslevel       = 
  /usr/convex/getsysinfo = 
  
  UNAME_MACHINE = aarch64
  UNAME_RELEASE = 6.10.14-linuxkit
  UNAME_SYSTEM  = Linux
  UNAME_VERSION = #1 SMP Thu Mar 20 16:32:56 UTC 2025
  configure: error: cannot guess build type; you must specify one
  ```

- エラー解消（config.guess）  
`wget -O config.guess 'http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=HEAD'`

```
[root@4c0111b1df52 /workspace/mecab/mecab]$ wget -O config.guess 'http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=HEAD'
--2025-05-25 13:58:10--  http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.guess;hb=HEAD
Resolving git.savannah.gnu.org (git.savannah.gnu.org)... 209.51.188.168, 2001:470:142::168
Connecting to git.savannah.gnu.org (git.savannah.gnu.org)|209.51.188.168|:80... connected.
HTTP request sent, awaiting response... 200 OK
Length: unspecified [text/plain]
Saving to: 'config.guess'

config.guess                                    [  <=>                                                                                      ]  49.55K   133KB/s    in 0.4s    

2025-05-25 13:58:11 (133 KB/s) - 'config.guess' saved [50743]
```

- wget -O config.sub 'http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=HEAD'

```
[root@4c0111b1df52 /workspace/mecab/mecab]$ wget -O config.sub 'http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=HEAD'
--2025-05-25 13:58:57--  http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=HEAD
Resolving git.savannah.gnu.org (git.savannah.gnu.org)... 209.51.188.168, 2001:470:142::168
Connecting to git.savannah.gnu.org (git.savannah.gnu.org)|209.51.188.168|:80... connected.
HTTP request sent, awaiting response... 200 OK
Length: unspecified [text/plain]
Saving to: 'config.sub'

config.sub                                      [ <=>                                                                                       ]  38.78K   197KB/s    in 0.2s    

2025-05-25 13:58:59 (197 KB/s) - 'config.sub' saved [39713]
```

- エラー解消(config.sub)  
`wget -O config.sub 'http://git.savannah.gnu.org/gitweb/?p=config.git;a=blob_plain;f=config.sub;hb=HEAD'`

- 実行権限付与（不要かも）  
`chmod +x config.guess config.sub`

- 設定  
`./configure`

- ビルド  
`make`  
実行長い


- テスト  
`make check`  

- root権限でインストール  
`sudo make install`
