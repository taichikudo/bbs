<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?=$this->Html->charset() ?>
    <title><?=$this->fetch('title')?></title>
    <?=$this->Html->css('LayoutTest') ?>
    <?=$this->Html->script('LayoutTest') ?>


  </head>
  <body>
    <header class="head row">
      <?=$this->element('header',['subtitle'=>'Form sample'])?>
    </header>
    <div class="content row">
      <?=$this->fetch('content')?>
    </div>
    <footer class="foot row">
      <?=$this->element('footer',['copyright'=>'Kudo Taichi'])?>
    </footer>
  </body>
</html>
