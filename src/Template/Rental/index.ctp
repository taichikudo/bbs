<article>
<p>会員ID検索</p>
<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Rental',
'action'=>'index']])?>
<div><?=$this->Form->text('rental_user_id')?></div>
<div><?=$this->Form->submit('検索')?></div>
<?=$this->Form->end()?>

  <p><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'add']) ?>">貸出</a></p>
<hr>
<table>
  <thead>
    <tr>
      <p>検索結果</p>
<th>会員ID</th><th>資料ID</th><th>返却期日</th><th>返却日</th><th>備考</th>
    </tr>
  </thead>
<?php if(isset($data)) { ?>
  <?php foreach($data->toArray() as $obj): ?>
<tr>

  <td><?= h($obj->rental_user_id) ?></td>
  <td><?= h($obj->rental_book_id) ?></td>
  <td><?= h($obj->rental_date) ?></td>
  <td><?= h($obj->rental_return) ?></td>
  <td><?= h($obj->rental_etc) ?></td>
  <td><a href="<?=$this->Url->build(['controller'=>'Rental',
     'action'=>'edit']);?>?rental_id=<?=$obj->rental_id ?>">返却</td>
</tr>
<?php endforeach; ?>
<?php } ?>





</article>
