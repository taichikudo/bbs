

<hr>
<table>
  <thead><tr>
    <th>氏名</th><th>住所</th>電話番号<th></th>メールアドレス<th>誕生日</th><th>パスワード</th>
    <th>入会日</th><th>退会日</th>
  </tr>
  </thead>
  <?php foreach($data->toArray() as $obj): ?>
  <tr>
    <td><?=h($obj->id) ?></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Users',
    'action'=>'edit']); ?>?id=<?=$obj->id ?>"></a></td>
    <td><?=h($obj->id) ?></td>
    <td><?=h($obj->user_name) ?></td>
    <td><?=h($obj->user_address) ?></td>
    <td><?=h($obj->user_tel) ?></td>
    <td><?=h($obj->user_email) ?></td>
    <td><?=h($obj->user_birthday) ?></td>
    <td><?=h($obj->user_password) ?></td>
    <td><?=h($obj->user_in) ?></td>
    <td><?=h($obj->user_out) ?></td>
    <td><a href="<?=$this->Url->build(['controller'=>'Users',
    'action'=>'delete']); ?>?id=<?=$obj->id ?>">退会</a></td>
  </tr>
<?php endforeach; ?>
</table>
