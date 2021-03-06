<div class="users form columns content">
  <fieldset>
    <legend>会員検索結果画面</legend>
    <br>
    <h3>会員情報</h3>

    <table cellpadding="0" cellspacing="0">
            <?php if($data->count()!==0){
              foreach ($data as $user): ?>
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

                    <?php
                      if($user->user_out===null){
                     ?>
                    <th scope="col" class="actions"><?= $this->Paginator->sort('メニュー') ?></th>
                  <?php }else{ ?>
                    <th scope="col"><?= $this->Paginator->sort('退会日') ?></th>
                  <?php } ?>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                    <td><?= h($user->user_name) ?></td>
                    <td><?= h($user->user_address) ?></td>
                    <td><?= h($user->user_tel) ?></td>
                    <td><?= h($user->user_email) ?></td>
                    <td><?= h(date('Y-m-d',strtotime($user->user_birthday))) ?></td>
                    <td> ●●●●●●●●●● </td>
                    <td><?= h(date('Y-m-d',strtotime($user->user_in))) ?></td>
                    <?php
                      if($user->user_out===null){
                     ?>
                    <td class="actions">
                        <?= $this->Html->link(__('変更'), ['action' => 'edit', $user->user_id]) ?>
                        <?= $this->Html->Link(__('退会'), ['action' => 'remove', $user->user_id]) ?>
                    </td>
                  <?php }else{ ?>
                    <td><?= h(date('Y-m-d',strtotime($user->user_out))) ?></td>
                  <?php } ?>
                </tr>
                <?php endforeach;
              }
              else{?>
                <p>ご登録内容がございません。</p>
              <?php } ?>


            </tbody>
        </table>
      <br>
    <h6><a class="searchBtn btnLeft" href="<?=$this->Url->build(['action'=>'index']); ?>">前の画面へ戻る</a></h6>

  </fieldset>
  </div>
