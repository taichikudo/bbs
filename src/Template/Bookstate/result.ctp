<h1>図書管理台帳の登録が完了しました</h1>
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
                <td><?= h($obj->bookstate_in) ?></td>
                <td><?= h($obj->bookstate_out) ?></td>
                <td><?= h($obj->bookstate_etc) ?></td>

            </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
