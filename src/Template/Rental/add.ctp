<?php if(isset($data)){ ?><?php
} ?>
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
