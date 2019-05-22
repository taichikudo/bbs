<h2>図書管理システム</h2>

<nav>
  <ul>
    <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">会員登録</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'search']) ?>">会員検索</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書登録</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Bookmanage', 'action' => 'index']) ?>">図書検索</a></li>
    <li><a href="<?= $this->Url->build(['controller' => 'Rental', 'action' => 'index']) ?>">返却、貸出</a></li>



  </ul>
</nav>
