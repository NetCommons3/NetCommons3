NetCommons
=======

国立情報学研究所が次世代情報共有基盤システムとして開発しています。サポート情報やライセンスなどの最新の情報は公式サイトを御覧ください。
こちらのリポジトリは最新版として開発中のv3となります。安定版ではありませんのでご注意ください。現在の安定版については[こちらのレポジトリ](https://github.com/netcommons)をご覧ください。

[NetCommons公式サイト](http://www.netcommons.org/)

[![Build Status](https://travis-ci.org/NetCommons3/NetCommons3.png?branch=master)](https://travis-ci.org/NetCommons3/NetCommons3)
[![Coverage Status](https://coveralls.io/repos/NetCommons3/NetCommons3/badge.png?branch=master)](https://coveralls.io/r/NetCommons3/NetCommons3?branch=master)

| dependencies | status |
| ------------ | ------ |
| Gemfile | [![Dependency Status](https://www.versioneye.com/user/projects/52f1cc16ec13757904000127/badge.png)](https://www.versioneye.com/user/projects/52f1cc16ec13757904000127) |
| composer.json | [![Dependency Status](https://www.versioneye.com/user/projects/52f1cc19ec13756b480000c4/badge.png)](https://www.versioneye.com/user/projects/52f1cc19ec13756b480000c4) |

## 動作実績

以下の組み合わせで動作することを確認しています。

* OS
  * Ubuntu 12.10
  * OSX Maverick
  * Windows 8.1

| application | version |
| ------------ | ------ |
| virtualbox | 4.3.10 |
| vagrant | 1.4.3 |

※依存しているプラグインの関係で vagrant 1.5.x はまだ動作しません。

## インストール
### 共通
下記アプリケーションをインストールして下さい。

* virtualbox
  * [https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)
* vagrant
  * [http://downloads.vagrantup.com/](http://downloads.vagrantup.com/)

### 依存ライブラリをインストール
#### ubuntu 12.10
<pre>
sudo aptitude install zlib1g-dev ruby ruby-dev lsb-core libxml2-dev libxslt-dev libcurl4-gnutls-dev nodejs libmysql++-dev postgresql-server-dev-all
sudo npm install -g gfms grunt-cli
sudo easy_install -U sphinx sphinxcontrib-phpdomain
cd NetCommons3
bundle
</pre>

#### OSX Maverick
<pre>
brew install libffi mysql postgresql
sudo npm install -g gfms grunt-cli
sudo easy_install -U sphinx sphinxcontrib-phpdomain
cd NetCommons3
bundle
</pre>

#### Windows
* msysgit
  * [http://msysgit.github.io/](http://msysgit.github.io/)

git コマンドのパスが通っていないと下記エラーが発生します。
その場合 msysgit を再度インストールするなど試して下さい。

```
[Berkshelf] Failed to download 'composer' from git: 'https://github.com/Morphodo
/chef-composer.git' with branch: 'master'
```

#### vagrant plugin
<pre>
vagrant plugin install vagrant-berkshelf
vagrant plugin install vagrant-vbguest
vagrant plugin install vagrant-hostmanager
vagrant plugin install vagrant-omnibus
</pre>

※vagrant 1.5 対応された vagrant-berkshelf 2.0.0 が stable に昇格していますが現時点(2014/4/17)ではまだ動作していません。
暫くの間は vagrant-berkshelf のみ version 指定してインストールすることをオススメします。
<pre>
vagrant plugin install vagrant-berkshelf --plugin-version 1.3.7
</pre>

### ソースを配置
このリポジトリをgitでクローンするか、ZIPなどでダウンロードしてください。
gitでクローンする場合は、ソースを配置したいパスに移動して以下のコマンドを実行します。
<pre>
cd /usr/local/src
git clone https://github.com/NetCommons3/NetCommons3.git
</pre>

#### Windows ホストの場合
* git について
git の pre commit hook で phpcs, phpmd, phpunit, php -l が通らないものを commit できないようにしていますが、windows 用の git client には pre commit hook を無視する client があるようなので、guest 側 の git command をご利用下さい。
windows ホスト側で git コマンドを使うのは、初回 git clone 時のみとして下さい。

* synced_folder 無効化
virtualbox のある時点から windows では synced_folder 上で symlink が貼れなくなっています。
synced_folder を有効にしたままで vagrant up すると symlink が破壊されるので、下記の通り Vagrantfile に 『disabled: true』 を指定して下さい。
<pre>
$ emacs Vagrantfile
  config.vm.synced_folder '.', '/var/www/app',
    :create => true, :owner=> 'www-data', :group=>'www-data',
    :mount_options => ['dmode=775','fmode=775']
</pre>
↓
<pre>
  config.vm.synced_folder '.', '/var/www/app', disabled: true,
    :create => true, :owner=> 'www-data', :group=>'www-data',
    :mount_options => ['dmode=775','fmode=775']
</pre>

## 起動

### vagrantを起動
配置したソースのパスでvagrantを起動します。初回のみOSのダウンロードに時間がかかります。
<pre>
vagrant up
</pre>

※windows だと以下のようなエラーが出るようです。

```
Failed to load the "vagrant-berkshelf" plugin. View logs for more details.
Bringing machine 'default' up with 'virtualbox' provider...
There are errors in the configuration of this machine. Please fix
the following errors and try again:

Vagrant:
* Unknown configuration section 'berkshelf'.
```

その場合は下記 mingw から vagrant up を実行して下さい。
```
C:\HashiCorp\Vagrant\embedded\mingw\mingw32env.cmd
```

### 動作確認
起動後、netcommons 用のプラグインを追加。(インストーラが出来た時点で下記作業は必要無くなる予定です。)
<pre>
cd /var/www/app
sudo composer require netcommons/auth:dev-master netcommons/auth-general:dev-master netcommons/users:dev-master netcommons/pages:dev-master --dev
</pre>

<code>vagrant up</code>を実行すると、以下のようなコマンドラインが表示されます。
<pre>
----省略--------
[default]-- 22 => 2222 (adapter 1)
[default]-- 80 => 9090 (adapter 1)
----省略--------
</pre>
それぞれ SSHとHTTPに使用するポート番号です。
デフォルトでは上記のポート番号を使用しますが、デフォルトのポートが使用中の場合は他のポート番号を使用する場合があります。
値が異なる場合は適宜以下の説明を読み替えてください。

また、サーバ内にSSHする場合はvagrantコマンドを使います。
<pre>
vagrant ssh
</pre>

ホストOSがWindowsの場合はPuttyなどのSSHクライアントソフトで127.0.0.1のポート2222につないでください。

SSH認証のユーザ名とパスフレーズはともに「vagrant」です。

guest には下記 vhosts が作成され、動作の確認ができます。

| url                                 | 用途                                 |
| ----------------------------------- | ------------------------------------ |
| http://app.local:9090    | netcommons 本体                      |
| http://sphinx.local:9090 | ドキュメント管理                     |
| http://phpdoc.local:9090 | phpdoc                               |

※ windowsは hosts が設定されない事があります。その場合は hosts に下記設定を直接指定して下さい。
```
127.0.0.1 app.local sphinx.local phpdoc.local phpldapadmin.local redmine.local jenkins.local
```

### Workaround
<code>vagrant up</code>実行時に、仮想化支援機構(VT-x/AMD-V)が有効化されていないメッセージが表示された場合は、BIOSの設定を見直してください。

### 開発
virtualbox の最新版, vagrant 1.4.x の組み合わせで Windows のホスト側にてファイルを編集する場合は、下記 samba をマウントし作業をする必要があります。
```
\\10.0.0.10\shared\app
```

その他の OS は vagrant up したディレクトリ直下のファイルを直接編集するだけで host <=> guest 間でファイルが同期できます。

### 終了
vagrantコマンドで仮想マシンを終了、又は破棄出来ます。

一旦止めるだけの場合。
<pre>
vagrant halt
</pre>

データを破棄する場合。次回、<code>vagrant up</code>の際にはまっさらなマシンから新規インストールが行われます。
<pre>
vagrant destroy
</pre>
