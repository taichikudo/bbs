<p>会員ID検索</p>
<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Rental',
'action'=>'index']])?>
<div><?=$this->Form->text('Rental.find')?></div>
<div><?=$this->Form->submit('検索')?></div>
<?=$this->Form->end()?>
