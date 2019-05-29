
    <?= $this->Form->create($bookstate) ?>
    <fieldset>
        <legend><?= __('Edit Bookstate') ?></legend>
        <?php echo $this->Form->hidden('bookstate_id'); ?>

        <?php echo $this->Form->hidden('bookstate_isbn'); ?>

        <?php echo $this->Form->hidden('bookstate_name'); ?>

        <?php echo $this->Form->hidden('bookstate_in',[
            'type' => 'date',
            'label' => false,
            'monthNames' => false,
            'maxYear' => date('Y'),
            'minYear' => date('Y') - 80,
            'empty' => ' '
        ]);?>
          <p>廃棄日</p>
          <?php echo $this->Form->date('bookstate_in',[
              'type' => 'date',
              'label' => false,
              'monthNames' => false,
              'maxYear' => date('Y'),
              'minYear' => date('Y') - 80,
              'empty' => ' '
          ]);?>


        <?php echo $this->Form->hidden('bookstate_etc',['label'=>false]); ?>
        <!-- <?php
            echo $this->Form->hidden('bookstate_book_id');
            echo $this->Form->hidden('bookstate_isbn');
            echo $this->Form->hidden('bookstate_name');
            echo $this->Form->hidden('bookstate_in');
            echo $this->Form->control('bookstate_out');
            echo $this->Form->hidden('bookstate_etc');
        ?> -->
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
