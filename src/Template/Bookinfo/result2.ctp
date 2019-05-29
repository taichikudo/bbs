<div class="users form large-9 medium-8 columns content">
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
              <?php endforeach; ?>

          </tbody>

      </table>
      <nav>
        <ul>
          <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">会員登録</a></li>
          <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">会員検索</a></li>
          <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書登録</a></li>
          <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書検索</a></li>
          <li><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'index']) ?>">返却、貸出</a></li>
        </ul>
      </nav>
</fieldset>
</div>
