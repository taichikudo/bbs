<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?></li>

    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?=$this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Rental','action'=>'add']])?>
    <fieldset>
        <legend><?= __('Add Rental') ?></legend>
        <?php

            echo $this->Form->text('Rental.rental_user_id');
            echo $this->Form->text('Rental.rental_book_id');
            echo $this->Form->text('Rental.rental_date');
            echo $this->Form->text('Rental.rental_return');
            echo $this->Form->text('Rental.rental_etc');


        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
