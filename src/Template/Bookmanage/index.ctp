<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>資料検索画面</title>
    <?= $this->Html->css('book/search.css') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>
    <div class="search">
      <h1>ISBN検索</h1>
      <form class="search_form" action="search_result.html" method="post">
        <input type="text" name="isbn_code" value="">
        <input type="submit" value="検索">
      </form>
    </div>
  </body>
</html>
