# Gutenberg Challenge
Gutenbergを使ってイメージ通りのページを作ろう。
## これはどんなもの？
Gutenbergの使い方を覚えたり、機能について理解を深めるために、実際に手を動かしてみましょう。
そのための材料としてこのリポジトリは作られました。
完成形のページをイメージし、Gutenbergを使って試行錯誤することで、Gutenbergでできること、まだGutenbergに足りないものが見えてくるはずです。
ぜひ一度挑戦してみてください！
### 大目に見てね
２０１８年１月６日に開催したWordBench京都＆大阪勉強会で利用するためにスピード重視で作ったため至らぬ点が多々あると思います。
もっとオシャレなデザインや構成を作ってみたい！テーマをもっとカスタマイズしたい方は、好きなだけチャレンジしてみてください！
Gutenbergの発展の一助となれば嬉しいです！
## Gutenberg Challengeに必要な環境
WordPressがインストールされ、以下のプラグインがインストールされていること。
### 必要なプラグイン
- Gutenberg
https://ja.wordpress.org/plugins/gutenberg/
- Contact Form 7
https://ja.wordpress.org/plugins/contact-form-7/
## Gutenberg Challengeの流れ
### リポジトリをダウンロード
リポジトリをテーマディレクトリ内（/wp-content/themes/）に展開します。
https://github.com/onocom/gutenberg-challenge
### 完成予定のデザインをチェックする
00_data/step01_check-finish-design-data ディレクトリ内に完成予定のデザインが格納されています（PDF/PNG/XD形式どれを見てもらっても同じデザインです）。
### 使用する画像をWordPressのメディアライブラリに登録する
00_data/step02_import-images ディレクトリ内の画像をメディアライブラリにすべてアップロードします。
### テーマを有効化する
Gutenberg Challenge テーマを有効化します。
### Gutenbergエディタを使ってページを作る
完成予定のデザインを照らし合わせながら、Gutenbergの各ブロックを駆使してページを作りましょう。
Gutenbergだけでは完成形には出来ないと思うので、blocks.css内のクラスを適宜設定してあげてください。
### 完成例を見て、自分の作ったページと比べてみる
00_data/step99_finish-data ディレクトリ内の「finish-data.txt」を開き、すべての内容をコピーして、新規固定ページのCodeEditorにて貼り付けると、完成例を見ることが出来ます。自分が作ったページと比べてみましょう。
