# Yuma.H PORTFOLIO (Wordpress)
=================================================================================================
wordpressのテーマのリポジトリです。

##　環境(構成要素)
- wp-env
- PHP : 7.3~
- Wordpress : 5.3.0~
- Database
    - MySQL 5.7~
- HTTP and reverse proxy serve
    - nginx 1.16.1~ 

## 開発環境の作り方
まずは、https://github.com/higashitani0624/portfolio-wordpress のリポジトリをcloneします。

./wp-content/themes ディレクトリまで移動します。

移動先のディレクトリで、このリポジトリからソースをcloneします。

ルートディレクトリまで戻ります。（webpack.config.jsファイルがあるディレクトリまで）

、、、
$ yarn install
、、、

、、、
$ yarn run start
、、、

正常に起動すると　'http://localhosst:8003' に自動でページが表示されます。

管理画面へは　'http://localhost:8003/wp-admin/index.php' からログインしてください。

ーーー
ユーザー名：higashitaniyu@crunchtimer.jp
ーーー

ーーー
パスワード：&&4NdJD3Hu7UR5Hatd
ーーー


* wordpress開発環境のリポジトリは別リポジトリになっています。上記してあるリポジトリを参照してください。