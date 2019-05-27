<p>会員検索画面</p>
<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Users',
'action'=>'searchresult']]) ?>
  <div class="">
    会員番号を入力ください
  </div>
  <div class=""><?=$this->Form->error('user_id') ?>
    <?=$this->Form->text('user_id') ?></div>
  <div class=""><?=$this->Form->submit('検索') ?></div>
<?=$this->Form->end() ?>
