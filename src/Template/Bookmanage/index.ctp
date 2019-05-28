<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>資料検索画面</title>
    <?= $this->Html->css('book/search.css') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>


    <div class="search">
      <h1>ISBN検索</h1>
      <?=$this->Form->create(null,
      ['type'=>'post',
      'url'=>['controller'=>'Bookmanage',
      'action'=>'index']])?>
      <div><?=$this->Form->text('bookinfo_isbn')?></div>
      <div class="search_form"><?=$this->Form->submit('検索')?></div>
      <?=$this->Form->end()?>
    </div>

<?php if(isset($bookstate)&&isset($bookinfo)){ ?>
    <h1>検索結果</h1>
    <hr>
    <h2>資料目録</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_bookname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_auther') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_com') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_startday') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php if(isset($bookinfo)){?>
            <?php foreach ($bookinfo->toArray() as $bookinfo): ?>
            <tr>
                <td><?= h($bookinfo->bookinfo_isbn) ?></td>
                <td><?= h($bookinfo->bookinfo_bookname) ?></td>
                <td><?= $this->Number->format($bookinfo->bookinfo_code) ?></td>
                <td><?= h($bookinfo->bookinfo_auther) ?></td>
                <td><?= h($bookinfo->bookinfo_com) ?></td>
                <td><?= h(date('Y-m-d', strtotime($bookinfo->bookinfo_startday))) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('台帳追加 '), ['controller'=>'bookstate','action' => 'add', $bookinfo->bookinfo_isbn]) ?>
                    <?= $this->Html->link(__('変更'), ['controller'=>'bookinfo','action' => 'edit', $bookinfo->bookinfo_isbn]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
          <?php } ?>
        </tbody>
    </table>

    <h2>資料台帳</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_out') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_etc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php if(isset($bookstate)){?>
            <?php foreach ($bookstate as $bookstate): ?>
            <tr>
                <td><?= $this->Number->format($bookstate->bookstate_id) ?></td>
                <td><?= h($bookstate->bookstate_isbn) ?></td>
                <td><?= h($bookstate->bookstate_name) ?></td>
                <td><?= h($bookstate->bookstate_in) ?></td>
                <td><?= h($bookstate->bookstate_out) ?></td>
                <td><?= h($bookstate->bookstate_etc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('変更'), ['controller'=>'bookstate','action' => 'edit2', $bookstate->bookstate_id]) ?>
                    <?= $this->Html->link(__('廃棄'), ['controller'=>'bookstate','action' => 'edit', $bookstate->bookstate_id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
            <?php } ?>
        </tbody>
    </table>
    <hr>
<?php } ?>
    <p><a href="<?=$this->Url->build(['controller'=>'Bookinfo',
        'action'=>'add']); ?>">新規目録追加</a></p>

  </body>
</html>
