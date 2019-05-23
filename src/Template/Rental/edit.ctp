    <?=$this->Form->create($entity,
    ['type'=>'post',
    'url'=>['controller'=>'Rental',
    'action'=>'update']]) ?>
<?=$this->Form->hidden('Rental.rental_id')?>
<div>返却しますか？</div>
<?php
	// UNIX TIMESTAMPを取得
	$timestamp = time() ;

	// date()で日時を出力
	echo date( "Y/m/d" , $timestamp ) ;


?>

<div><?=$this->Form->text('Rental.rental_return')?></div>
<div><?=$this->Form->submit('返却')?></div>
<?=$this->Form->end()?>
