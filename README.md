# Chat

##ディレクトリ構造は以下の通り

fuel--app--classes--controller--chatroom.php ・・・チャットルームのコントローラ  
         |        |           |-message.php  ・・・メッセージをDBに渡したり、取得するAPI  
         |        |-model--message.php ・・・メッセージをDBに格納したり、取得するモデル  
         |--views--partial--chat.php ・・・chat画面のテンプレート  
                 |-template.php  
