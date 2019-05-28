<h1>図書管理目録の登録が完了しました</h1>
<h3><a href="<?=$this->Url->build(['controller'=>'Bookstate',
    'action'=>'add']); ?>">続いて台帳の登録に移動できます</a></h3>
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
                <td><?= h($obj->bookinfo_startday) ?></td>

            </tr>
            <?php endforeach; ?>

        </tbody>

    </table>

<?= $this->Html->link(__('トップへ戻る'), ['action' => 'index']) ?>