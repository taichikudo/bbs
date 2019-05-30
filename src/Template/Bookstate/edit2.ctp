<div class="bookstate form large-9 medium-8 columns content">
    <?= $this->Form->create($bookstate) ?>
    <fieldset>
      <legend>台帳変更</legend>
        <?php
            echo $this->Form->hidden('bookstate_book_id');?>
            <p>ISBN番号</p>
          <?php    echo $this->Form->text('bookstate_isbn');?>
          <p>資料名</p>
            <?php  echo $this->Form->text('bookstate_name');?>
            <p>入荷日</p>
            <?php echo $this->Form->control('bookstate_in',[
                'type' => 'date',
                'label' => false,
                'monthNames' => false,
                'maxYear' => date('Y'),
                'minYear' => date('Y') - 80,
                'empty' => ' '
            ]);?>
            <!-- <?php  echo $this->Form->hidden('bookstate_out');?> -->
            <p>備考</p>
            <?php echo $this->Form->text('bookstate_etc');?>
    <?=$this->Form->submit('送信',['class'=>'searchBtn']) ?>
    <?= $this->Form->end() ?>
    </fieldset>
</div>
