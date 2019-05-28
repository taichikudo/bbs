<?=$this->Form->create($entity,
   ['type'=>'post',
   'url'=>['controller'=>'Users',
   'action'=>'removefinish']]) ?>
<?=$this->Form->hidden('Users.user_id')?>
<h2>退会しますか？</h2>



<div><?=$this->Form->submit('退会')?></div>
<?=$this->Form->end()?>
