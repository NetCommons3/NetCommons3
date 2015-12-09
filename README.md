NetCommons
=======

国立情報学研究所が次世代情報共有基盤システムとして開発しています。サポート情報やライセンスなどの最新の情報は公式サイトを御覧ください。
こちらのリポジトリは最新版として開発中のv3となります。安定版ではありませんのでご注意ください。現在の安定版については[こちらのレポジトリ](https://github.com/netcommons)をご覧ください。

[NetCommons公式サイト](http://www.netcommons.org/)

[![Build Status](https://travis-ci.org/NetCommons3/NetCommons3.png?branch=master)](https://travis-ci.org/NetCommons3/NetCommons3)
[![Coverage Status](https://coveralls.io/repos/NetCommons3/NetCommons3/badge.png?branch=master)](https://coveralls.io/r/NetCommons3/NetCommons3?branch=master)

| dependencies | status |
| ------------ | ------ |
| Gemfile | [![Dependency Status](https://www.versioneye.com/user/projects/5397f04283add7765e000017/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5397f04283add7765e000017) |
| composer.json | [![Dependency Status](https://www.versioneye.com/user/projects/538ea72a46c4738e2d00000b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/538ea72a46c4738e2d00000b) |

## 動作実績

以下の組み合わせで動作することを確認しています。

| OS           | matrix |
| ------------ | ------ |
| Windows 10  | virtualbox 5.0.10, vagrant 1.7.4 |
| Windows 8.1  | virtualbox 4.3.26, vagrant 1.7.2 [#40](https://github.com/NetCommons3/NetCommons3/issues/40)|
| Windows 8.1  | virtualbox 4.3.12, vagrant 1.6.3 |
| Windows 8.1  | virtualbox 4.3.10, vagrant 1.4.3 |
| Windows 7    | virtualbox 4.3.12, vagrant 1.4.3 |
| Windows 7    | virtualbox 4.3.12, vagrant 1.6.3 |
| OSX Mavericks | virtualbox 4.3.8, vagrant 1.4.3 |
| OSX Mavericks | virtualbox 4.3.8, vagrant 1.6.0 |
| Ubuntu 12.10 | virtualbox 4.3.10, vagrant 1.4.3 |
| Ubuntu 12.04 | virtualbox 4.3.10, vagrant 1.6.1 |

## インストール
### 共通
下記アプリケーションをインストールして下さい。

* virtualbox
  * [https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)
* vagrant
  * [http://www.vagrantup.com/downloads.html](http://www.vagrantup.com/downloads.html)
* chef-dk
  * [https://downloads.getchef.com/chef-dk](https://downloads.getchef.com/chef-dk)

Windows ホストの場合、vagrant は 管理者権限が必要なフォルダ（Program Files 等）にはインストールしないようにしてください。vagrant 起動時にエラーが発生します。

### 依存ライブラリのインストール
#### 共通
##### vagrant plugin
```
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-omnibus
```

##### vagrant plugin (vagrant 1.4.x)
```
vagrant plugin install vagrant-berkshelf --plugin-version 1.3.7
```

##### vagrant plugin (vagrant 1.5.x 1.6.x)
```
vagrant plugin install vagrant-berkshelf --plugin-version 2.0.1
```

##### vagrant plugin (vagrant 1.7.2)
```
vagrant plugin install vagrant-berkshelf --plugin-version 4.0.4
```

#### ubuntu 12.10
```
sudo aptitude install zlib1g-dev ruby ruby-dev lsb-core libxml2-dev libxslt-dev libcurl4-gnutls-dev nodejs libmysql++-dev postgresql-server-dev-all
sudo npm install -g gfms grunt-cli
sudo easy_install -U sphinx sphinxcontrib-phpdomain
cd NetCommons3
bundle
```

#### OSX Mavericks
```
brew install libffi mysql postgresql
sudo npm install -g gfms grunt-cli
sudo easy_install -U sphinx sphinxcontrib-phpdomain
cd NetCommons3
bundle
```

#### Windows
##### git クライアントインストール
* msysgit
  * [http://msysgit.github.io/](http://msysgit.github.io/)

git コマンドのパスが通っていないと下記エラーが発生します。

```
[Berkshelf] Failed to download 'composer' from git: 'https://github.com/Morphodo/chef-composer.git' with branch: 'master'
```

その場合 msysgit を再度インストールするなど試して下さい。

##### Tar ファイルコピー
`git clone` 以外の処理は、C:\HashiCorp\Vagrant\embedded\mingw\mingw32env.cmd の使用を推奨します。  
Tar ファイルが不足しているため、 [Tar for Windows](http://gnuwin32.sourceforge.net/packages/gtar.htm) から Binaries(Zip): [tar-1.13-1-bin.zip](http://gnuwin32.sourceforge.net/downlinks/tar-bin-zip.php) と Dependencies(Zip): [tar-1.13-1-dep.zip](http://gnuwin32.sourceforge.net/downlinks/tar-dep-zip.php) をダウンロードし、解凍した中身のファイルを、C:\HashiCorp\Vagrant\embedded\mingw にコピーしてください。  
※ コピーを忘れると、dep-selector-libgecode で失敗します。

## ソースの配置
このリポジトリを git でクローンするか、ZIP などでダウンロードしてください。  
git でクローンする場合は、ソースを配置したいパスに移動して以下のコマンドを実行します。

```
cd /usr/local/src
git clone https://github.com/NetCommons3/NetCommons3.git
```

### Windows ホストの場合
#### git について
git の pre commit hook で phpcs, phpmd, phpunit, php -l が通らないものを commit できないようにしていますが、Windows 用の git クライアントには pre commit hook を無視するクライアントがあるようなので、guest 側 の git command をご利用下さい。  
Windows ホスト側で git コマンドを使うのは、初回 git clone 時のみとして下さい。

#### synced_folder 無効化
virtualbox のある時点から Windows では synced_folder 上で symlink が貼れなくなっています。  
synced_folder を有効にしたままで vagrant up すると symlink が破壊されます。下記の通り Vagrantfile に 『disabled: true』 を指定して下さい。

```
node.vm.synced_folder '.', '/var/www/app',
:create => true, :owner=> 'www-data', :group => 'www-data'
```
↓
```
node.vm.synced_folder '.', '/var/www/app', disabled: true,
:create => true, :owner=> 'www-data', :group => 'www-data'
```

synced_folder に関する記載は3箇所ありますが、上記箇所のみ修正してください。

#### Berksfile の修正（vagrant1.4.xのバージョンのみ）
vagrant-berkshelf の古いバージョンでは、source が使えないため下記の修正を行い、Berksfile.lock ファイルを削除してから、`vagrant up` を実行しないとエラーになります。

```
source 'https://api.berkshelf.com'
```
↓
```
site :opscode
```

## 起動
### vagrant を起動
配置したソースのパスで vagrant を起動します。初回のみ OS のダウンロードに時間がかかります。

```
vagrant up default
```

#### Windows ホストの場合
vagrant が正常に起動された後に、vagrant により作成された仮想環境（ゲスト環境）に SSH で接続し、下記コマンドを実行してください。  
SSH 接続には、Putty などの SSH クライアントソフトを使用し、127.0.0.1 のポート 2222 に接続してください。  
SSH 認証のユーザ名とパスフレーズはともに「vagrant」です。

```
sudo -s
cd /var/www
rm -rf /var/www/app
git clone https://github.com/NetCommons3/NetCommons3.git app
chown -R www-data:www-data /var/www/app
chmod -R 775 /var/www/app
git clone https://github.com/NetCommons3/NetCommons3Docs.git docs
chown -R www-data:www-data /var/www/docs
chmod -R 775 /var/www/docs
```

その後、ホスト側で下記コマンドを実行してください。

```
vagrant provision default
```

再度ゲスト環境に SSH で接続した後、下記コマンドを実行してください。

```
sudo -s
chown -R www-data:www-data /var/www/app
```

## 動作確認
ホスト側で `vagrant up` を実行すると、以下のようなコマンドラインが表示されます。

```
----省略--------
[default]-- 22 => 2222 (adapter 1)
[default]-- 80 => 9090 (adapter 1)
----省略--------
```

それぞれ SSH と HTTP に使用するポート番号です。  
デフォルトでは上記のポート番号を使用しますが、デフォルトのポートが使用中の場合は他のポート番号を使用する場合があります。  
値が異なる場合は適宜以下の説明を読み替えてください。

また、Windows ホスト以外では、ゲスト環境への SSH 接続に vagrant コマンドを使用可能です。

```
vagrant ssh
```

ゲスト環境には下記 vhosts が作成され、動作の確認ができます。

| URL                      | 用途                                 |
| ------------------------ | ------------------------------------ |
| http://app.local:9090    | netcommons 本体                      |
| http://sphinx.local:9090 | ドキュメント管理                     |
| http://phpdoc.local:9090 | phpdoc                               |

### Windows ホストの場合
`vagrant up default` 実行時に hosts ファイルに下記設定が追加されます。

```
127.0.0.1 app.local sphinx.local phpdoc.local phpldapadmin.local redmine.local jenkins.local
```

hosts ファイルの編集には管理者権限が必要です。`vagrant up default` 実行時にユーザーアカウント制御ダイアログが表示されるため、「はい」をクリックし、編集を許可してください。  
また、上記 URL へ接続できない場合は、hosts ファイルの設定を見直してください。

### 開発
virtualbox の最新版, vagrant 1.4.x の組み合わせで Windows のホスト側にてファイルを編集する場合は、下記 samba をマウントし作業をする必要があります。

```
\\10.0.0.10\shared\app
```

その他の OS は vagrant up したディレクトリ直下のファイルを直接編集するだけで host <=> guest 間でファイルが同期できます。

### 終了
vagrantコマンドで仮想マシンを終了、又は破棄できます。

* 一旦止めるだけの場合

```
vagrant halt
```

* データを破棄する場合
次回、`vagrant up` の際にはまっさらなマシンから新規インストールが行われます。

```
vagrant destroy
```

* provision する場合
 default オプションをつける必要があります。

```
vagrant provision default
```

## Workaround
* 仮想化機能が無効である場合
`vagrant up` 実行時に、仮想化支援機構(VT-x/AMD-V)が有効化されていないメッセージが表示された場合は、BIOSの設定を見直してください。  
また、ゲスト環境に /var/www/app/ ディレクトリが生成されていない場合、仮想化機能が無効となっている可能性があります。

---

* `vagrant up default` 実行時に下記エラーメッセージが表示された場合（vagrant plugin インストール漏れ）

```
There are errors in the configuration of this machine. Please fix the following errors and try again:

vm:
* The '' provisioner could not be found.

Vagrant:
* Unknown configuration section 'berkshelf'.
* Unknown configuration section 'hostmanager'.
* Unknown configuration section 'omnibus'.
```

上記エラーメッセージが表示された場合は、vagrant プラグインをインストールしてください。  
なお、インストール済プラグインの一覧は、下記コマンドで確認できます。

```
vagrant plugin list
```
---
* `vagrant up default` 実行時に下記エラーメッセージが表示された場合（jenkins インストール失敗）

```
==> default: ================================================================================
==> default: Error executing action `install` on resource 'apt_package[jenkins]'
==> default: ================================================================================
==> default:
==> default: Mixlib::ShellOut::ShellCommandFailed
==> default: ------------------------------------
==> default: Expected process to exit with [0], but received '100'
==> default: ---- Begin output of apt-get -q -y install jenkins=1.617 ----
==> default: STDOUT: Reading package lists...
==> default: Building dependency tree...
==> default: Reading state information...
==> default: The following extra packages will be installed:
==> default:   ca-certificates-java daemon default-jre-headless icedtea-6-jre-cacao
==> default:   icedtea-6-jre-jamvm java-common libavahi-client3 libavahi-common-data
==> default:   libavahi-common3 libcups2 libjpeg-turbo8 libjpeg8 liblcms2-2 libnspr4
==> default:   libnss3 libnss3-1d libpcsclite1 openjdk-6-jre-headless openjdk-6-jre-lib
==> default:   tzdata tzdata-java
==> default: Suggested packages:
==> default:   default-jre equivs cups-common liblcms2-utils pcscd libnss-mdns
==> default:   sun-java6-fonts ttf-dejavu-extra fonts-ipafont-gothic fonts-ipafont-mincho
==> default:   ttf-wqy-microhei ttf-wqy-zenhei ttf-indic-fonts-core ttf-telugu-fonts
==> default:   ttf-oriya-fonts ttf-kannada-fonts ttf-bengali-fonts
==> default: The following NEW packages will be installed:
==> default:   ca-certificates-java daemon default-jre-headless icedtea-6-jre-cacao
==> default:   icedtea-6-jre-jamvm java-common jenkins libavahi-client3
==> default:   libavahi-common-data libavahi-common3 libcups2 libjpeg-turbo8 libjpeg8
==> default:   liblcms2-2 libnspr4 libnss3 libnss3-1d libpcsclite1 openjdk-6-jre-headless
==> default:   openjdk-6-jre-lib tzdata-java
==> default: The following packages will be upgraded:
==> default:   tzdata
==> default: 1 upgraded, 21 newly installed, 0 to remove and 176 not upgraded.
==> default: Need to get 106 MB of archives.
==> default: After this operation, 127 MB of additional disk space will be used.
==> default: WARNING: The following packages cannot be authenticated!
==> default:   jenkins
==> default: STDERR: E: There are problems and -y was used without --force-yes
==> default: ---- End output of apt-get -q -y install jenkins=1.617 ----

（中略）

==> default: [2015-06-11T09:52:52+00:00] INFO: Running queued delayed notifications before re-raising exception
==> default: [2015-06-11T09:52:52+00:00] INFO: template[/etc/apache2/envvars] sending reload action to service[apache2] (delayed)
==> default: [2015-06-11T09:52:53+00:00] INFO: service[apache2] reloaded
==> default: [2015-06-11T09:52:53+00:00] ERROR: Running exception handlers
==> default: [2015-06-11T09:52:53+00:00] ERROR: Exception handlers complete
==> default: [2015-06-11T09:52:53+00:00] FATAL: Stacktrace dumped to /var/chef/cache/chef-stacktrace.out
==> default: [2015-06-11T09:52:53+00:00] ERROR: apt_package[jenkins] (jenkins::_master_package line 34) had an error: Mixlib::ShellOut::ShellCommandFailed: Expected process to exit with [0], but received '100'
==> default: ---- Begin output of apt-get -q -y install jenkins=1.617 ----
==> default: STDOUT: Reading package lists...
==> default: Building dependency tree...
==> default: Reading state information...
==> default: The following extra packages will be installed:
==> default:   ca-certificates-java daemon default-jre-headless icedtea-6-jre-cacao
==> default:   icedtea-6-jre-jamvm java-common libavahi-client3 libavahi-common-data
==> default:   libavahi-common3 libcups2 libjpeg-turbo8 libjpeg8 liblcms2-2 libnspr4
==> default:   libnss3 libnss3-1d libpcsclite1 openjdk-6-jre-headless openjdk-6-jre-lib
==> default:   tzdata tzdata-java
==> default: Suggested packages:
==> default:   default-jre equivs cups-common liblcms2-utils pcscd libnss-mdns
==> default:   sun-java6-fonts ttf-dejavu-extra fonts-ipafont-gothic fonts-ipafont-mincho
==> default:   ttf-wqy-microhei ttf-wqy-zenhei ttf-indic-fonts-core ttf-telugu-fonts
==> default:   ttf-oriya-fonts ttf-kannada-fonts ttf-bengali-fonts
==> default: The following NEW packages will be installed:
==> default:   ca-certificates-java daemon default-jre-headless icedtea-6-jre-cacao
==> default:   icedtea-6-jre-jamvm java-common jenkins libavahi-client3
==> default:   libavahi-common-data libavahi-common3 libcups2 libjpeg-turbo8 libjpeg8
==> default:   liblcms2-2 libnspr4 libnss3 libnss3-1d libpcsclite1 openjdk-6-jre-headless
==> default:   openjdk-6-jre-lib tzdata-java
==> default: The following packages will be upgraded:
==> default:   tzdata
==> default: 1 upgraded, 21 newly installed, 0 to remove and 176 not upgraded.
==> default: Need to get 106 MB of archives.
==> default: After this operation, 127 MB of additional disk space will be used.
==> default: WARNING: The following packages cannot be authenticated!
==> default:   jenkins
==> default: STDERR: E: There are problems and -y was used without --force-yes
==> default: ---- End output of apt-get -q -y install jenkins=1.617 ----
==> default: Ran apt-get -q -y install jenkins=1.617 returned 100
==> default: [2015-06-11T09:52:53+00:00] FATAL: Chef::Exceptions::ChildConvergeError: Chef run process exited unsuccessfully (exit code 1)
Chef never successfully completed! Any errors should be visible in the output above. Please fix your recipes so that they properly complete.
```

ネットワーク環境またはキャッシュにより、タイムアウトが発生し、jenkins のインストールに失敗しています。  
この状態から `vagrant provision default` を実行しても環境は正常に構築されないため、再度環境構築を実施してください。  
Windows ホストの場合、下記手順で環境の初期化を実施します。

1. ホスト側で `vagrant halt` コマンドを実行
1. ホスト側で `vagrant destroy` コマンドを実行
1. ホスト側に配置した NetCommons3 をディレクトリごと削除
1. ユーザディレクトリ直下に作成される、下記ディレクトリを削除（Windows 8、8.1 ホストの場合、ユーザーディレクトリは C:\Users\ユーザー名\）
	* .berkshelf
	* .gem
	* .vagrant.d

上記後、vagrant プラグインのインストール、NetCommons3のソース配置を実行してください。

---
* http://app.local:9090 にアクセスした際に、インストール画面が表示されない場合
ゲスト環境に SSH で接続し、下記コマンドを実行してください。

```
sudo -s
cd /var/www/app
composer update
chown -R www-data:www-data /var/www/app
```

`composer update` の途中で token の入力を求められた場合は、ブラウザで Github にログイン後、下記手順で token を取得し、入力してください。

1. Github にログイン後、https://github.com/settings/profile に遷移
1. Personal Settings から Personal access tokens をクリック
1. Generate new token ボタンをクリック
1. Github のパスワード再入力
1. Token Description に適当な値を入力し、Generate token ボタンをクリック

---

* http://app.local:9090 にアクセスした際に、インストール画面がきれいに表示されない場合
CSS の配置に失敗しています。ゲスト環境に SSH で接続し、下記コマンドを実行してください。

```
sudo -s
cd /var/www/app
bower update --allow-root
chown -R www-data:www-data /var/www/app
```

実行時に下記メッセージが表示されます

```
May bower anonymously report usage statistics to improve the tool over time? (Y/n)
```

bower 改善のため、匿名による情報収集を許可するかの確認です。Y または N を入力してください。

---

* ブラウザによる NetCommons3 インストール中に `/usr/bin/hhvm/` というエラーメッセージが表示される場合
ゲスト環境に SSH で接続し、下記コマンドを実行してください。

```
sudo -s
chown -R www-data:www-data /var/www/app
```

---

### Windows ホストの場合
* `vagrant up default` 時に vagrant-berkshelf プラグインの起動に失敗する場合

```
Failed to load the "vagrant-berkshelf" plugin. View logs for more details.
Bringing machine 'default' up with 'virtualbox' provider...
There are errors in the configuration of this machine. Please fix
the following errors and try again:

Vagrant:
* Unknown configuration section 'berkshelf'.
```

上記エラーが発生した場合は、C:\HashiCorp\Vagrant\embedded\mingw\mingw32env.cmd から `vagrant up default` を実行して下さい。

---

* `vagrant up default` 時に Apache の再起動に失敗する場合

```
==> default: ================================================================================
==> default: Error executing action `restart` on resource 'service[apache2]'
==> default: ================================================================================
==> default:
==> default: Mixlib::ShellOut::ShellCommandFailed
==> default: ------------------------------------
==> default: Expected process to exit with [0], but received '1'
==> default: ---- Begin output of /etc/init.d/apache2 restart ----
==> default: STDOUT: * Restarting web server apache2
==> default:    ...fail!
==> default: STDERR:
==> default: ---- End output of /etc/init.d/apache2 restart ----

（中略）

==> default: [2015-06-12T07:09:52+00:00] INFO: template[/etc/mysql/conf.d/my.cnf] sending restart action to mysql_service[default] (delayed)
==> default: [2015-06-12T07:09:52+00:00] ERROR: Running exception handlers
==> default: [2015-06-12T07:09:52+00:00] ERROR: Exception handlers complete
==> default: [2015-06-12T07:09:52+00:00] FATAL: Stacktrace dumped to /var/chef/cache/chef-stacktrace.out
==> default: [2015-06-12T07:09:53+00:00] ERROR: service[apache2] (apache2::default line 24) had an error: Mixlib::ShellOut::ShellCommandFailed: Expected process to exit with [0], but received '1'
==> default: ---- Begin output of /etc/init.d/apache2 restart ----
==> default: STDOUT: * Restarting web server apache2
==> default:    ...fail!
==> default: STDERR:
==> default: ---- End output of /etc/init.d/apache2 restart ----
==> default: Ran /etc/init.d/apache2 restart returned 1
==> default: [2015-06-12T07:09:53+00:00] FATAL: Chef::Exceptions::ChildConvergeError: Chef run process exited unsuccessfully (exit code 1)
```

上記エラーが発生した場合は、気にせず vagrant provision default を実行してください。
