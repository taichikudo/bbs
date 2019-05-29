<div class="users form columns content">
<fieldset>
  <legend><?= __('退会完了画面') ?></legend>
  <h3>退会完了しました。</h3>
  <h4>ご利用ありがとうございました。</h4><br>
  <nav>
    <p><a class="searchBtn btnLeft" href="<?= $this->Url->build(['controller' => 'Bbs', 'action' => 'index']) ?>">トップに戻る</a></p>
    <p><a class="searchBtn " href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">会員登録</a></p>
    <p><a class="searchBtn " href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>">会員検索</a></p>

  </nav>
  </div>
</fieldset>
