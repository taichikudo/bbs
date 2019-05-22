    <?= $this->Form->create($entity,
    ['type'=>'post',
    'url'=>['controller'=>'Rental',
    'action'=>'create']]) ?>
  <div>会員ID：<?=$this->Form->text('Rental.rental_user_id')?></div>
  <div>資料ID：<?=$this->Form->text('Rental.rental_book_id')?></div>
  <div>貸出年月日：<?=$this->Form->text('Rental.rental_date')?></div>
  <div>備考：<?=$this->Form->text('Rental.rental_etc')?></div>
  <div><?=$this->Form->submit('貸出')?></div>
  <?=$this->Form->end()?>
