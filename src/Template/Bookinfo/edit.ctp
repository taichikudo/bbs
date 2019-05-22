<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookinfo $bookinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookinfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookinfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bookinfo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($bookinfo) ?>
    <fieldset>
        <legend><?= __('Edit Bookinfo') ?></legend>
        <?php
            echo $this->Form->control('bookinfo_isbn');
            echo $this->Form->control('bookinfo_bookname');
            echo $this->Form->control('bookinfo_code');
            echo $this->Form->control('bookinfo_auther');
            echo $this->Form->control('bookinfo_com');
            echo $this->Form->control('bookinfo_startday');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
