<h2>返却完了しました</h2>
<table>
  <thead>
    <tr>
<th>会員ID</th><th>資料ID</th><th>貸出日</th><th>返却日</th><th>備考</th>
</tr>
</thead>
<tr>
  <td><?= h($entity->rental_user_id) ?></td>
  <td><?= h($entity->rental_book_id) ?></td>
  <td><?= h(date('Y-m-d',strtotime($entity->rental_date))) ?></td>
  <td><?= h(date('Y-m-d',strtotime($entity->rental_return))) ?></td>

  <td><?= h($entity->rental_etc) ?></td>
</table>
  <ul>
    <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">会員登録</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">会員検索</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書登録</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書検索</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'index']) ?>">返却、貸出</a></li>

    <hr>






</tr>






  </ul>
</nav>
