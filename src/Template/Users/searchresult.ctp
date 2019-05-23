

<h4>会員情報</h4>

<table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('会員番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('氏名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('住所') ?></th>
                <th scope="col"><?= $this->Paginator->sort('電話番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('メールアドレス') ?></th>
                <th scope="col"><?= $this->Paginator->sort('生年月日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('パスワード') ?></th>
                <th scope="col"><?= $this->Paginator->sort('入会日') ?></th>
                <th scope="col"><?= $this->Paginator->sort('退会日') ?></th>
                <th scope="col" class="actions"><?= __('メニュー') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->user_id) ?></td>
                <td><?= h($user->user_name) ?></td>
                <td><?= h($user->user_address) ?></td>
                <td><?= h($user->user_tel) ?></td>
                <td><?= h($user->user_email) ?></td>
                <td><?= h($user->user_birthday) ?></td>
                <td><?= h($user->user_password) ?></td>
                <td><?= h($user->user_in) ?></td>
                <td><?= h($user->user_out) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('変更'), ['action' => 'edit', $user->user_id]) ?>
                    <?= $this->Form->postLink(__('退会'), ['action' => 'delete', $user->user_id], ['confirm' => __('退会してもよろしいですか ？{0}', $user->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
