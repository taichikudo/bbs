<div class="users form columns content">
<h3>ご登録ありがとうございます。</h3>
<br>
<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('会員番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('氏名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('住所') ?></th>
                <th scope="col"><?= $this->Paginator->sort('電話番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('メールアドレス') ?></th>
                <th scope="col"><?= $this->Paginator->sort('誕生日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パスワード') ?></th>
                <th scope="col"><?= $this->Paginator->sort('入会日') ?></th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->user_id) ?></td>
                <td><?= h($user->user_name) ?></td>
                <td><?= h($user->user_address) ?></td>
                <td><?= h($user->user_tel) ?></td>
                <td><?= h($user->user_email) ?></td>
                <td><?= h(date('Y-m-d',strtotime($user->user_birthday))) ?></td>
                <td><?= h($user->user_password) ?></td>
                <td><?= h(date('Y-m-d',strtotime($user->user_in))) ?></td>
                <td><?= h(date('Y-m-d',strtotime($user->user_out))) ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br><p>上記の情報で登録いたしました。</p>
<?= $this->Html->link(__('検索画面へ戻る'), ['action' => 'index']) ?>
<?= $this->Html->link(__('トップへ戻る'), ['controller' => 'bbs','action' => 'index']) ?>
</div>
