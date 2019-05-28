<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>資料検索画面</title>
    <?= $this->Html->css('book/search.css') ?>
    <?= $this->fetch('css') ?>
  </head>
  <body>
    <div class="bookmanage form columns content">
    <div class="search">
      <h4>ISBN検索</h4>
      <fieldset>
        <?=$this->Form->create(null,
        ['type'=>'post',
        'url'=>['controller'=>'Bookmanage',
        'action'=>'index']])?>
        <div><?=$this->Form->text('bookinfo_isbn')?></div>
        <?=$this->Form->submit('検索',['class'=>'searchBtn btnCenter']) ?>
        <?=$this->Form->end()?>
      </fieldset>

    </div>
    <?php if(isset($bookinfo)){ ?>
    <?php if(!empty($bookinfo->toArray())){ ?>
    <h4>検索結果</h4>
    <br>
    <h3>資料目録</h3>
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
          <?php foreach ($bookinfo->toArray() as $bookinfo): ?>
            <tr>
                <td><?= h($bookinfo->bookinfo_isbn) ?></td>
                <td><?= h($bookinfo->bookinfo_bookname) ?></td>
                <td><?= $this->Number->format($bookinfo->bookinfo_code) ?></td>
                <td><?= h($bookinfo->bookinfo_auther) ?></td>
                <td><?= h($bookinfo->bookinfo_com) ?></td>
                <td><?= h(date('Y-m-d', strtotime($bookinfo->bookinfo_startday))) ?></td>
                <td class="actions">
                    <ul>
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
</html>
