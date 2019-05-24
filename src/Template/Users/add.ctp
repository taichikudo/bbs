<?php

?>
<div class="users form large-9 medium-8 columns content">
    <?=$this->Form->create(null,['type'=>'post','url'=>['controller'=>'Users','action'=>'add']])?>
    <fieldset>
        <legend><?= __('会員登録') ?></legend>

        <p>名前</p>
        <?php echo $this->Form->text('Users.user_name');?>
        <p>住所</p>
        <?php echo $this->Form->text('Users.user_address');?>
        <p>電話番号</p>
        <?php echo $this->Form->text('Users.user_tel');?>
        <p>メールアドレス</p>
        <?php echo $this->Form->text('Users.user_email');?>
        <p>誕生日</p>
        <?php echo $this->Form->text('Users.user_birthday');?>
        <p>パスワード</p>
        <?php echo $this->Form->text('Users.user_password');?>
        <p>入会日</p>
        <?php echo $this->Form->text('Users.user_in');?>
        <?php echo $this->Form->hidden('Users.user_out');?>

    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
