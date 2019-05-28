<!-- 以下の処理は適当にやっている -->
<?php
error_reporting(0);
?>
<!-- ここまで -->
<?= $msg?>
<?=$this->Form->create($entity,['type'=>'post','url'=>['controller'=>'Rental','action'=>'add']])?>
    <fieldset>
        <legend><?= __('Add Rental') ?></legend>
        <p>ユーザーID</p>
            <?php echo $this->Form->text('Rental.rental_user_id');?>
            <p>図書ID</p>
            <?php echo $this->Form->text('Rental.rental_book_id');
            echo $this->Form->hidden('Rental.rental_date');
            echo $this->Form->hidden('Rental.rental_return');?>
            <p>備考</p>
            <?php echo $this->Form->text('Rental.rental_etc');?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
