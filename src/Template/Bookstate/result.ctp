<div class="bookstate form columns content">
  <fieldset>
    <legend>台帳登録完了画面</legend>
    <h4>資料台帳の登録が完了しました</h4>
    <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                  <th scope="col"><?= $this->Paginator->sort('台帳ID') ?></th>

                    <th scope="col"><?= $this->Paginator->sort('ISBN番号') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('図書名') ?></th>
                     <th scope="col"><?= $this->Paginator->sort('入荷日') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('廃棄日') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('備考') ?></th>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookstate as $obj): ?>
                <tr>
                  <td><?= h($obj->bookstate_id) ?></td>

                    <td><?= h($obj->bookstate_isbn) ?></td>
                    <td><?= h($obj->bookstate_name) ?></td>
                    <td><?= h(date('Y-m-d',strtotime($obj->bookstate_in))) ?></td>
                    <td><?= h($obj->bookstate_out) ?></td>
                    <td><?= h($obj->bookstate_etc) ?></td>
                </tr>
            </tbody>
        </table>
        <a class="searchBtn btnLeft2" href="<?= $this->Url->build(['action' => 'add', $obj->bookstate_isbn]) ?>">続けて台帳追加</a>
        <a class="searchBtn btnLeft2" href="<?= $this->Url->build(['controller' => 'Bookmanage','action' => 'index', $obj->bookstate_isbn]) ?>">検索結果に戻る</a>
        <a class="searchBtn btnLeft2 nonfloat" href="<?= $this->Url->build(['controller' => 'Bbs', 'action' => 'index']) ?>">トップに戻る</a>
        <?php endforeach; ?>
  </fieldset>
</div>
