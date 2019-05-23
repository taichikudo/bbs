<?=$this->Form->create(null,
['type'=>'post',
'url'=>['controller'=>'Users',
'action'=>'searchresult']]) ?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('会員情報変更') ?></legend>
        <?php
            echo $this->Form->control('user_name');
            echo $this->Form->control('user_address');
            echo $this->Form->control('user_tel');
            echo $this->Form->control('user_email');
            echo $this->Form->control('user_birthday');
            echo $this->Form->control('user_password');
            echo $this->Form->control('user_in');
            echo $this->Form->control('user_out');
        ?>
    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>
