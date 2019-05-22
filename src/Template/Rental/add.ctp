<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental $rental
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rental form large-9 medium-8 columns content">
    <?= $this->Form->create($rental) ?>
    <fieldset>
        <legend><?= __('Add Rental') ?></legend>
        <?php
            echo $this->Form->control('rental_user_id');
            echo $this->Form->control('rental_book_id');
            echo $this->Form->control('rental_date');
            echo $this->Form->control('rental_return');
            echo $this->Form->control('rental_etc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
