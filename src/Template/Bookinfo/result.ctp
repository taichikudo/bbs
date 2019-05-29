<h4>図書管理目録の登録が完了しました</h4>
<!-- <h3><a href="<?=$this->Url->build(['controller'=>'Bookstate',
    'action'=>'add']); ?>">続いて台帳の登録に移動できます</a></h3> -->

<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ISBN番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('図書名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('図書内部コード') ?></th>
                <th scope="col"><?= $this->Paginator->sort('作者') ?></th>
                <th scope="col"><?= $this->Paginator->sort('出版社') ?></th>
                <th scope="col"><?= $this->Paginator->sort('出版日') ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookinfo as $obj): ?>
            <tr>
                <td><?= h($obj->bookinfo_isbn) ?></td>
                <td><?= h($obj->bookinfo_bookname) ?></td>
                <td><?= h($obj->bookinfo_code) ?></td>
                <td><?= h($obj->bookinfo_auther) ?></td>
                <td><?= h($obj->bookinfo_com) ?></td>
            <td><?= h(date('Y-m-d',strtotime($obj->bookinfo_startday))) ?></td>
<?= $this->Html->link(__('続いて台帳の追加に移動 '), ['controller'=>'bookstate','action' => 'add', $obj->bookinfo_isbn]) ?>

            </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
    <ul>
      <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">会員登録</a></li>
      <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">会員検索</a></li>
      <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書登録</a></li>
      <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書検索</a></li>
      <li><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'index']) ?>">返却、貸出</a></li>

      <hr>
