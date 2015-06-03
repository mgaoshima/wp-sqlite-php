# wp-sqlite-php

wp-cliのserver-command（中身はPHPのビルトインウェブサーバ）とSQLiteでサクッとWordPressを動かすデモ


## 初期設定

- [wp-cli](http://wp-cli.org/#install) のインストール
- [wp-cli server-command](https://github.com/wp-cli/wp-cli/wiki/Community-Packages) のインストール（wp-cliの次のバージョンでは最初から入る予定）


## WPサイトのデータのクローン、サーバ起動

```
$ git clone git@github.com:mgaoshima/wp-sqlite-php.git
$ cd wp-sqlite-php
$ wp server   # => http://localhost:8080
```

または、`/etc/hosts/`に`127.0.0.1  wordpress.local`を追記し、

```
$ sudo wp server --allow-root --host=wordpress.local --port=80  # => http://wordpress.local
```


## データベースについて

- SQLite3を[SQLite Integration](https://wordpress.org/plugins/sqlite-integration/)プラグイン経由で使っています。
- データベースは `wp-content/database/.ht.sqlite` という1つのバイナリファイルにまとまります。
- なのでDBごとgitに登録してしまえばいいと思います←
- SQLiteでは使えないプラグインも結構あります（DB操作系、キャッシュ系など）
- SQLite Integrationの[日本語マニュアル](http://dogwood.skr.jp/wordpress/sqlite-integration-ja/)はこちら
- `https://<hostname>/wp-content/database/phpliteadmin.php`にアクセスするとGUIでDBをいじれます（PW:admin）
- `$ sqlite3 wp-content/database/.ht.sqlite` でDBに入れます（[SQLite入門](http://www.dbonline.jp/sqlite/)）


## 補足

- `wp-cli`をHomebrewでインストールすると、`$ wp cli udpate`が使えない（Homebrew経由ではアップデートできる）
- `wp-cli server-command` は近々wp-cli本体にバンドルされそう（別途インストールが不要になる）
