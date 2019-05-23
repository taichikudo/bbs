<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?=$this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Users','action'=>'result']])?>
    <fieldset>
        <legend><?= __('会員登録') ?></legend>




             <p>氏名：<?= $this->Form->text('Users.user_name');?></p>
            <p>住所：<?=$this->Form->text('Users.user_address');?></p>
            <p>電話番号：<?= $this->Form->text('Users.user_tel');?></p>
            <p>メールアドレス：<?=$this->Form->text('Users.user_email');?></p>
             <p>生年月日：<?=$this->Form->text('Users.user_birthday');?></p>
             <p>パスワード：<?=$this->Form->text('User.user_password');?></p>
             <p>入会日：<?=$this->Form->control('Users.user_in');?></p>
            <p>退会日：<?=$this->Form->control('Users.user_out');?></p>


    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
