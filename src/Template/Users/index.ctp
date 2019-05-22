<p>会員検索画面</p>
<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Users',
'action'=>'search']]) ?>
  <div class="">
    find
  </div>
  <div class=""><?=$this->Form->text('Users.find') ?></div>
  <div class=""><?$this->Form->submit('検索') ?></div>
  <?=$this->Form->end() ?>
