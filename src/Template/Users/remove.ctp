<div class="users form large-9 medium-8 columns content">
<fieldset>
  <?=$this->Form->create($entity,
     ['type'=>'post',
     'url'=>['controller'=>'Users',
     'action'=>'removefinish']]) ?>
  <?=$this->Form->hidden('Users.user_id')?>
  <h3>退会しますか？</h3>
  <h6>*退会処理ができなかった場合は貸し出し中の本があるため貸出画面で返却を行ってください</h6>
  <br>
  <?=$this->Form->submit('退会',['class'=>'searchBtn']) ?>
  <?=$this->Form->end()?>
</fieldset>
</div>
