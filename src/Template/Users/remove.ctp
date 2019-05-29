<?=$this->Form->create($entity,
   ['type'=>'post',
   'url'=>['controller'=>'Users',
   'action'=>'removefinish']]) ?>
<?=$this->Form->hidden('Users.user_id')?>
<h2>退会しますか？</h2>
<h6>*退会処理ができなかった場合は貸し出し中の本があるため貸出画面で返却を行ってください</h6>


<div><?=$this->Form->submit('退会')?></div>
<?=$this->Form->end()?>
