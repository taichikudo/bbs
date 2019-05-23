<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('会員登録') ?></legend>
        <?php
            echo $this->Form->control('氏名');
            echo $this->Form->control('住所');
            echo $this->Form->control('電話番号');
            echo $this->Form->control('メールアドレス');
            echo $this->Form->control('user_birthday');
            echo $this->Form->control('パスワード');
            echo $this->Form->control('入会日');
            echo $this->Form->control('user_out');
        ?>
    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
