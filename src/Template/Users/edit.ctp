<?=$this->Form->create($entity,
['type'=>'post',
'url'=>['controller'=>'Users',
'action'=>'edit']]) ?>
<div class="users form large-9 medium-8 columns content">
    <fieldset>
        <legend><?= __('会員情報変更') ?></legend>
        <?php echo $this->Form->hidden('user_id'); ?>
        <p>名前</p>
        <?php echo $this->Form->text('user_name'); ?>
        <p>住所</p>
        <?php   echo $this->Form->text('user_address'); ?>
        <p>電話番号</p>
        <?php  echo $this->Form->text('user_tel'); ?>
        <p>メールアドレス</p>
        <?php  echo $this->Form->text('user_email'); ?>
        <p>誕生日</p>
        <?php  echo $this->Form->control('user_birthday',[
                'label' => false,
                'monthNames' => false,
                'maxYear' => date('Y'),
                'minYear' => date('Y') - 80,
                'empty' => ' '
            ]);?>
        <p>パスワード</p>
        <?php echo $this->Form->text('user_password'); ?>
        <!-- <p>入会日(ex.200ｘ-12-03)</p> -->
        <?php  echo $this->Form->hidden('user_in');?>
        <?php echo $this->Form->hidden('user_out'); ?>
    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
