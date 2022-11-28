# アプリケーション名:Rese
Rese（リーズ） 20-30代の社会人を対象とした飲食店予約サービス。

![写真_mainview](https://user-images.githubusercontent.com/105334572/204321235-4dca6bce-d80c-4bc9-bd86-d4c9d29c7d76.png)

## 作成した目的
外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持ちたいと要望を受け制作。

## アプリケーション　URL
デプロイのURLはなし（ローカル上で制作）

## 機能一覧・注意事項・備考
■機能一覧</br>
ログイン・ログアウト・ユーザー飲食店予約情報・お気に入り一覧・飲食店一覧・詳細情報取得・飲食店お気に入り追加・削除・飲食店予約情報追加・削除・予約変更機能・店舗検索・評価機能：星とコメント・バリデーション </br>
■注意事項・備考</br>
各種シーダーファイルの用意があります。
検索フォームの仕様として、セレクトは選択時・テキストは入力後フォーカスを外した時に検索が自動でかかります。</br>
マイページに表示されている予約情報から別ページに遷移し、予約の変更が可能です。</br>
星・コメント機能をつけており、店舗詳細画面から確認・投稿可能です。（投稿にはログインが必要）</br>

## 使用技術
Laravel:8.83.25 Laravel Breeze PHP:8.1.9

## テーブル設計
![写真_table](https://user-images.githubusercontent.com/105334572/204323964-3817b77b-8bd8-431e-86af-3261d69258af.png)

## ER図
![er drawio](https://user-images.githubusercontent.com/105334572/204324766-2b70bf6f-84dc-42ff-a6e2-b82841748c02.svg)

## 環境構築
ローカルでの作業は　php artisan migrate php artisan db:seed を実行してご利用ください。

## 案件シート
https://docs.google.com/spreadsheets/d/1ii4OgZIkNAnlxrddenfqtOQbqW5Z8VbnolGL6T2ET0M/edit?usp=sharing
