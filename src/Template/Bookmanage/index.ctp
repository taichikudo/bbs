<!DOCTYPE html>
<html lang="ja" dir="ltr">
<fieldset>
  <head>
    <meta charset="utf-8">
    <title>資料検索画面</title>
    <?= $this->Html->css('book/search.css') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>
    <div class="search">
      <legend>ISBN検索</legend>
        <?=$this->Form->create(null,
        ['type'=>'post',
        'url'=>['controller'=>'Bookmanage',
        'action'=>'index']])?>
        <div id="formTxt"><?=$this->Form->text('bookinfo_isbn')?>
        <?=$this->Form->submit('検索',['class'=>'searchBtn']) ?></div>
        <?=$this->Form->end()?>

    </div>
    <div class="bookmanage form columns content">
    <?php if(isset($bookinfo)){ ?>
    <?php if(!empty($bookinfo->toArray())){ ?>
    <legend>検索結果</legend>
    <br>
    <h3>資料目録</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_isbn','ISBN番号'); ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_bookname','資料名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_code','分類コード') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_auther','著者名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_com','出版社') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_startday','出版日') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('アクション') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($bookinfo->toArray() as $bookinfo): ?>
            <tr>
                <td><?= h($bookinfo->bookinfo_isbn) ?></td>
                <td><?= h($bookinfo->bookinfo_bookname) ?></td>
                <td><?= $this->Number->format($bookinfo->bookinfo_code) ?></td>
                <td><?= h($bookinfo->bookinfo_auther) ?></td>
                <td><?= h($bookinfo->bookinfo_com) ?></td>
                <td><?= h(date('Y-m-d', strtotime($bookinfo->bookinfo_startday))) ?></td>
                <td class="actions">
                    <ul class="nonlist">
                      <li><?= $this->Html->link(__('変更'), ['controller'=>'bookinfo','action' => 'edit', $bookinfo->bookinfo_isbn]) ?></li>
                      <li class="stateList"><?= $this->Html->link(__('台帳追加 '), ['controller'=>'bookstate','action' => 'add', $bookinfo->bookinfo_isbn]) ?></li>

                    </ul>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <?php if(!empty($bookstate->toArray())){ ?>
    <h3>資料台帳</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','資料ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_isbn','ISBN番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_name','資料名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_in','入荷年月日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_out','廃棄年月日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_etc','備考') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('アクション') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($bookstate as $bookstate): ?>
          <tr>
              <td><?= $this->Number->format($bookstate->bookstate_id) ?></td>
              <td><?= h($bookstate->bookstate_isbn) ?></td>
              <td><?= h($bookstate->bookstate_name) ?></td>
              <td><?= h(date('Y-m-d', strtotime($bookstate->bookstate_in))) ?></td>
              <!-- <td><?= h(date('Y-m-d', strtotime($bookstate->bookstate_out))) ?></td>
              <td><?= h($bookstate->bookstate_in) ?></td> -->
              <td><?= h($bookstate->bookstate_out) ?></td>
              <td><?= h($bookstate->bookstate_etc) ?></td>
              <td class="actions">
                  <?= $this->Html->link(__('変更'), ['controller'=>'bookstate','action' => 'edit2', $bookstate->bookstate_id]) ?>
                  <?= $this->Html->link(__('廃棄'), ['controller'=>'bookstate','action' => 'edit', $bookstate->bookstate_id]) ?>

              </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    <?php } ?>
    <hr>
<?php } ?>
<?php } ?>
    <br>
    <p><a class="searchBtn btnLeft" href="<?=$this->Url->build(['controller'=>'Bookinfo',
        'action'=>'add']); ?>">新規目録追加</a></p>
  </div>
  </body>
</fieldset>

</html>
