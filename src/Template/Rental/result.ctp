<div class="rental form columns content">
<fieldset>
  <legend>返却完了画面</legend>
  <h4>返却処理を完了しました</h4>
  <br>
  <table cellpadding="0" cellspacing="0">
          <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('会員ID') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('資料ID') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('貸出日') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('返却日') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('備考') ?></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td><?= h($entity->rental_user_id) ?></td>
                <td><?= h($entity->rental_book_id) ?></td>
                <td><?= h(date('Y-m-d',strtotime($entity->rental_date))) ?></td>
                <td><?= h(date('Y-m-d',strtotime($entity->rental_return))) ?></td>
                <td><?= h($entity->rental_etc) ?></td>
              </tr>
          </tbody>
      </table>
      <br>
      <a class="searchBtn btnLeft2" href="<?= $this->Url->build(['action' => 'index',$entity->rental_user_id]) ?>">検索結果に戻る</a>
      <a class="searchBtn btnLeft2 nonfloat" href="<?= $this->Url->build(['controller' => 'Bbs', 'action' => 'index']) ?>">トップに戻る</a>
</fieldset>
</div>
