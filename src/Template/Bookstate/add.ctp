<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstate $bookstate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="head ing"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bookstate'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookstate form large-9 medium-8 columns content">
    <?= $this->Form->create($bookstate) ?>
    <fieldset>
        <legend><?= __('Add Bookstate') ?></legend>
        <?php
        echo $this->Form->hidden('bookstate_id');
            echo $this->Form->control('bookstate_isbn',['default'=>$data['bookinfo_isbn']]);
            echo $this->Form->control('bookstate_name',['default'=>$data['bookinfo_bookname']]);
            echo $this->Form->control('bookstate_in');
            echo $this->Form->hidden('bookstate_out');
            echo $this->Form->control('bookstate_etc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
