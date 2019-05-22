    <?= $this->Form->create($entity,
    ['type'=>'post',
    'url'=>['controller'=>'Rental',
    'action'=>'update']]) ?>
<?=$this->Form->hidden('Rental.id')?>
<div>返却日時を入力してください</div>
<div><?=$this->Form->text('Rental.return')?></div>
<div><?=$this->Form->submit('返却')?></div>
<?=$this->Form->end()?>
