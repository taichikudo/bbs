<div class="users form large-9 medium-8 columns content">
<fieldset>
  <legend><?= __('会員検索画面') ?></legend>

  <?=$this->Form->create(null,
  ['type'=>'post',
  'url'=>['controller'=>'Users',
  'action'=>'searchresult']]) ?>
    <p>会員番号を入力してください。</p>
    <div class=""><?=$this->Form->error('user_id') ?>
      <?=$this->Form->text('user_id') ?></div>
    <div class=""><?=$this->Form->submit('検索',['class'=>'searchBtn']) ?></div>
  <?=$this->Form->end() ?>
</fieldset>

</div>
