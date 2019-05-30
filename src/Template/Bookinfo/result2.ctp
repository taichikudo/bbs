<div class="bookinfo form columns content">
<fieldset>
  <legend>資料目録変更完了画面</legend>
  <h4>資料目録の変更が完了しました。</h4><br>
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
              <?php foreach ($bookinfo as $obj): ?>
              <tr>
                <td><?= h($obj->bookinfo_isbn) ?></td>

                  <td><?= h($obj->bookinfo_bookname) ?></td>
                  <td><?= h($obj->bookinfo_code) ?></td>
                  <td><?= h($obj->bookinfo_auther) ?></td>
                  <td><?= h($obj->bookinfo_com) ?></td>
                    <td><?= h(date('Y-m-d',strtotime($obj->bookinfo_startday))) ?></td>
              </tr>
          </tbody>
      </table>
      <br>
      <a class="searchBtn btnLeft2" href="<?= $this->Url->build(['controller'=>'bookstate','action' => 'add', $obj->bookinfo_isbn]) ?>">新規台帳追加</a>
      <a class="searchBtn btnLeft2 nonfloat" href="<?= $this->Url->build(['controller' => 'Bbs', 'action' => 'index']) ?>">トップに戻る</a>
      <?php endforeach; ?>
</fieldset>
</div>
