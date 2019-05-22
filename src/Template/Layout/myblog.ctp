<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?=$this->Html->charset()?>
    <title><?=$this->fetch('title')?></title>
    <?=$this->Html->css('myblog')?>
    <?=$this->Html->script('myblog')?>

  </head>
  <body>
    <header class="head row">
    <?=$this->element('header',['subtitle'=>'cakephp sample page'])?>
    </header>
<div class="content row">
      <?=$this->fetch('content')?>
  </div>
<footer class="foot row">
<h5></h5>
</footer>
  </body>
</html>
