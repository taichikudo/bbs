<div class="bookinfo form columns content">
  <fieldset>
    <legend>資料目録登録完了画面</legend>
    <h4>資料目録の登録が完了しました</h4>
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
                <br>
                </tr>

            </tbody>
        </table>
        <br>
        <a class="searchBtn btnLeft2" href="<?= $this->Url->build(['controller'=>'bookstate','action' => 'add', $obj->bookinfo_isbn]) ?>">新規台帳追加</a>
        <a class="searchBtn btnLeft2 nonfloat" href="<?= $this->Url->build(['controller' => 'Bbs', 'action' => 'index']) ?>">トップに戻る</a>
        <?php endforeach; ?>
  </fieldset>
</div>
