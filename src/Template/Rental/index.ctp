<article>
<p>会員ID検索</p>
<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Rental',
'action'=>'index']])?>
<div><?=$this->Form->text('rental_user_id')?></div>
<div><?=$this->Form->submit('検索')?></div>
<?=$this->Form->end()?>
<?php if(isset($data)) { ?>
  [<?= h($data->rental_user_id) ?>]
  <p><?= h($data->rental_user_id) ?></p>
  <p><?= h($data->rental_book_id) ?></p>
  <p><?= h($data->rental_date) ?></p>
  <p><?= h($data->rental_return) ?></p>
  <p><?= h($data->rental_etc) ?></p>
  
<?php } ?>





</article>
