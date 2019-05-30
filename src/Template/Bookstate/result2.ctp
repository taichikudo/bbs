<div class="bookstate form columns content">
<fieldset>
  <legend>台帳廃棄完了画面</legend>
  <h4>資料台帳の廃棄処理が完了しました。</h4><br>
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
                    <td><?= h(date('Y-m-d',strtotime($obj->bookstate_out))) ?></td>



                  <td><?= h($obj->bookstate_etc) ?></td>

              </tr>
              <?php endforeach; ?>

          </tbody>

      </table>
      <nav>
        <br>
        <!-- <a class="searchBtn btnLeft2" href="<?= $this->Url->build(['controller'=>'bookstate','action' => 'add', $obj->bookinfo_isbn]) ?>">新規台帳追加</a> -->
        <a class="searchBtn btnLeft2 nonfloat" href="<?= $this->Url->build(['controller' => 'Bbs', 'action' => 'index']) ?>">トップに戻る</a>
      </nav>
</fieldset>
</div>
