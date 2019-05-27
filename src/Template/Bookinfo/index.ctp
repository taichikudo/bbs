<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookinfo[]|\Cake\Collection\CollectionInterface $bookinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bookinfo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookinfo index large-9 medium-8 columns content">
    <h3><?= __('Bookinfo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_bookname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_auther') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_com') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookinfo_startday') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookinfo as $bookinfo): ?>
            <tr>
                <td><?= h($bookinfo->bookinfo_isbn) ?></td>
                <td><?= h($bookinfo->bookinfo_bookname) ?></td>
                <td><?= $this->Number->format($bookinfo->bookinfo_code) ?></td>
                <td><?= h($bookinfo->bookinfo_auther) ?></td>
                <td><?= h($bookinfo->bookinfo_com) ?></td>
                <td><?= h($bookinfo->bookinfo_startday) ?></td>
                <td class="actions">
                  
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
