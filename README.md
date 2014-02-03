NetCommons
=======

国立情報学研究所が次世代情報共有基盤システムとして開発しています。サポート情報やライセンスなどの最新の情報は公式サイトを御覧ください。
こちらのリポジトリは最新版として開発中のv3となります。安定版ではありませんのでご注意ください。現在の安定版については[こちらのレポジトリ](https://github.com/netcommons)をご覧ください。

[NetCommons公式サイト](http://www.netcommons.org/)

[![Build Status](https://travis-ci.org/NetCommons3/NetCommons3.png)](https://travis-ci.org/NetCommons3/NetCommons3)

# 開発環境での起動

## 事前準備

### VirtualBoxをダウンロードしてインストール
VirtualBoxをセットアップしてください。
[https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)

### Vagrantをダウンロードしてインストール
最新版をインストールしてください。
[http://downloads.vagrantup.com/](http://downloads.vagrantup.com/)

### ソースを配置
このリポジトリをgitでクローンするか、ZIPなどでダウンロードしてください。
gitでクローンする場合は、ソースを配置したいパスに移動して以下のコマンドを実行します。
<pre>
cd /usr/local/src
git clone https://github.com/NetCommons3/NetCommons3.git
git clone https://github.com/NetCommons3/NetCommons3Docs.git
</pre>

### 依存ライブラリをインストール
#### ubuntu 12.10
<pre>
sudo aptitude install zlib1g-dev ruby ruby-dev lsb-core libxml2-dev libxslt-dev nodejs
sudo npm install -g gfms grunt-cli
sudo easy_install -U sphinx sphinxcontrib-phpdomain
cd NetCommons3
bundle
</pre>

#### vagrant plugin
<pre>
vagrant plugin install vagrant-berkshelf
vagrant plugin install vagrant-vbguest
vagrant plugin install vagrant-hostmanager
</pre>

### Workaround
#### Windows ホストの場合
vagrant 1.4.x 利用時、下記エラーが発生します。(1.4.3 で確認)
```
[Berkshelf] Failed to download 'composer' from git: 'https://github.com/Morphodo
/chef-composer.git' with branch: 'master'
```

その場合下記2ファイルを以下の通り書き変える必要があります。
```
cd NetCommons3

emacs Berksfile
- cookbook 'composer', git: "https://github.com/Morphodo/chef-composer.git"
+ #cookbook 'composer', git: "https://github.com/Morphodo/chef-composer.git"

emacs cookbooks/omusubi/recipes/default.rb
- composer "/vagrant_data" do
-   action [:install, :update]
- end
+ #composer "/vagrant_data" do
+ #  action [:install, :update]
+ #end
```

変更後 composer が手動管理となります。

## 起動

### vagrantを起動
配置したソースのパスでvagrantを起動します。初回のみOSのダウンロードに時間がかかります。
<pre>
vagrant up
</pre>

### 動作確認
<code>vagrant up</code>を実行すると、以下のようなコマンドラインが表示されます。
<pre>
----省略--------
[default]-- 22 => 2222 (adapter 1)
[default]-- 80 => 8080 (adapter 1)
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

developブランチからソースを取得した場合は、CakePHP本体のソースが存在しないため、サーバ内にSSHしcomposerコマンドを実行する必要があります。
<pre>
cd /vagrant_data/
composer install
</pre>

NetCommonsのインストーラーで入力するデータベースのユーザ名は「root」、パスワードは無しです。

guest には下記 vhosts が作成され、動作の確認ができます。

| url                               | 用途                                   |
| --------------------------------- | -------------------------------------- |
| http://www.netcommons.local:8080  | netcommons 本体                        |
| http://docs.netcommons.local:8080 | ドキュメント管理                       |

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
