<h2>図書管理システム</h2>

<nav>
  <ul>
    <li><a href="<?= $this->Url->build(['controller' => '??????', 'action' => 'show']) ?>">会員登録</a></li>
    <li><a href="<?= $this->Url->build(['controller' => '??????', 'action' => 'search']) ?>">会員検索</a></li>
    <li><a href="<?= $this->Url->build(['controller' => '??????', 'action' => 'add']) ?>">図書登録</a></li>
    <li><a href="<?= $this->Url->build(['controller' => '??????', 'action' => 'delete']) ?>">図書検索</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'index']) ?>">返却、貸出</a></li>



  </ul>
</nav>
