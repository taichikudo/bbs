<div class="bookstate form large-9 medium-8 columns content">
    <?= $this->Form->create($bookstate) ?>
    <fieldset>
        <legend><?= __('台帳追加フォーム') ?></legend>
        <?php echo $this->Form->hidden('bookstate_id'); ?>
        <p>ISBN番号</p>
        <?php echo $this->Form->text('bookstate_isbn',['default'=>$data['bookinfo_isbn'],'label'=>false]); ?>
        <p>資料名</p>
        <?php echo $this->Form->text('bookstate_name',['default'=>$data['bookinfo_bookname'],'label'=>false]); ?>
        <p>入荷日</p>
        <?php echo $this->Form->date('bookstate_in',[
            'type' => 'date',
            'label' => false,
            'monthNames' => false,
            'maxYear' => date('Y'),
            'minYear' => date('Y') - 80,
            'empty' => ' '
        ]);?>
        
        <?php echo $this->Form->hidden('bookstate_out'); ?>
        <p>備考</p>
        <?php echo $this->Form->text('bookstate_etc',['label'=>false]); ?>
        <br>
        <?=$this->Form->submit('送信',['class'=>'searchBtn']) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
