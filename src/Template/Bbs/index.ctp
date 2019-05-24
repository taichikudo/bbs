<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>図書館管理システム</title>
    <!-- <link rel="stylesheet" href="../../css/top.css"> -->
    <?= $this->Html->css('top.css') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>
    <div class="menu">
      <h1>図書館管理システム</h1>
      <div class="users">
        <h3>【会員管理】</h3>
        <p><a href="./user/add.html">登録</a></p>
        <p><a href="./user/search.html">検索</a></p>
      </div>
      <div class="books">
        <h3>【資料管理】</h3>
        <p><a href="<?=$this->Url->build(['controller'=>'Bookmanage',
            'action'=>'index']); ?>">資料管理</a></p>
        <p><a href="<?=$this->Url->build(['controller'=>'Bookmanage',
            'action'=>'index']); ?>">検索</a></p>
      </div>
      <div class="rental">
        <h3>【貸出管理】</h3>
        <p><a href="<?=$this->Url->build(['controller'=>'Rental',
            'action'=>'index']); ?>">貸出管理</a></p>
      </div>
    </div>
  </body>
</html>
