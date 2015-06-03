# wp-sqlite-php

## 初期設定

- [wp-cli](http://wp-cli.org/#install) のインストール
- [wp-cli server-command](https://github.com/wp-cli/wp-cli/wiki/Community-Packages) のインストール


## WPサイトのデータのクローン、サーバ起動

```
$ git clone git@github.com:mgaoshima/wp-sqlite-php.git
$ cd wp-sqlite-php
$ wp server
PHP 5.5.20 Development Server started at Wed Jun  3 18:49:51 2015
Listening on http://localhost:8080
Document root is /Users/nozomi/Desktop/hoge
Press Ctrl-C to quit.
```

または、`/etc/hosts/`に`127.0.0.1  wordpress.local`を追記し、

```
$ sudo wp server --allow-root --host=wordpress.local --port=80
```


## データベースについて

- SQLite3を[SQLite Integration](https://wordpress.org/plugins/sqlite-integration/)プラグイン経由で使っています。
- データベースは `wp-content/database/.ht.sqlite` という1つのバイナリファイルにまとまります。
- `https://<hostname>/wp-content/database/phpliteadmin.php`にアクセスするとGUIでDBをいじれます（PW:admin）
- なのでDBごとgitに登録してしまえばいいと思います←
- SQLiteでは使えないプラグインも結構あります（DB操作系、キャッシュ系など）
- `$ sqlite3 wp-content/database/.ht.sqlite` でDBに入れます（[SQLite入門](http://www.dbonline.jp/sqlite/)）


## 備考

- `wp-cli`をHomebrewでインストールすると、`$ wp cli udpate`が使えない（Homebrew経由ではアップデートできる）
- `wp-cli server-command` は近々wp-cli本体にバンドルされそう（別途インストールが不要になる）
