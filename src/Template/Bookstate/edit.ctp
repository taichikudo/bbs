<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstate $bookstate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookstate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookstate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bookstate'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookstate form large-9 medium-8 columns content">
    <?= $this->Form->create($bookstate) ?>
    <fieldset>
        <legend><?= __('Edit Bookstate') ?></legend>
        <?php
            echo $this->Form->hidden('bookstate_book_id');
            echo $this->Form->hidden('bookstate_isbn');
            echo $this->Form->hidden('bookstate_name');
            echo $this->Form->control('bookstate_in');
            echo $this->Form->control('bookstate_out');
            echo $this->Form->hidden('bookstate_etc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
