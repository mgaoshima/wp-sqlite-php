# wp-sqlite-php

## 初期設定

- [wp-cli](http://wp-cli.org/#install) のインストール
- [wp-cli server-command](https://github.com/wp-cli/wp-cli/wiki/Community-Packages) のインストール


## WPサイトのデータのクローン、サーバ起動

```
$ git clone git@github.com:mgaoshima/wp-sqlite-php.git
$ cd wp-sqlite-php
$ wp server --host=wordpress.local --port=80
```


## データベースについて

- SQLite3を[SQLite Integration](https://wordpress.org/plugins/sqlite-integration/)プラグイン経由で使っています。
- データベースは `wp-content/database/.ht.sqlite` という1つのバイナリファイルにまとまります。
- なのでDBごとgitに登録してしまえばいいと思います←
- SQLiteでは使えないプラグインも結構あります（DB操作系、キャッシュ系など）
- `$ sqlite3 wp-content/database/.ht.sqlite` でDBに入れます（[SQLite入門](http://www.dbonline.jp/sqlite/)）


## 備考

- `wp-cli`をHomebrewでインストールすると、`$ wp cli udpate`が使えない（Homebrew経由ではアップデートできる）
- `wp-cli server-command` は近々wp-cli本体にバンドルされそう（別途インストールが不要になる）
