<div class="bookinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($bookinfo) ?>
    <fieldset>
        <legend><?= __('資料目録編集画面') ?></legend>
        <p>ISBNコード</p>
        <?php echo $this->Form->text('bookinfo_isbn',['label'=>false]); ?>
        <p>資料名</p>
        <?php echo $this->Form->text('bookinfo_bookname'); ?>
        <p>分類コード</p>
        <?php echo $this->Form->control('bookinfo_code'); ?>
        <p>著者</p>
        <?php echo $this->Form->control('bookinfo_auther'); ?>
        <p>出版社</p>
        <?php echo $this->Form->control('bookinfo_com'); ?>
        <p>出版日</p>
        <?php echo $this->Form->control('bookinfo_startday',[
            'type' => 'date',
            'label' => false,
            'monthNames' => false,
            'maxYear' => date('Y'),
            'minYear' => date('Y') - 80,
            'empty' => ' '
        ]);?>
        <?=$this->Form->submit('送信',['class'=>'searchBtn']) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
