<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookinfo $bookinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookinfo'), ['action' => 'edit', $bookinfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookinfo'), ['action' => 'delete', $bookinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookinfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookinfo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookinfo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookinfo view large-9 medium-8 columns content">
    <h3><?= h($bookinfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bookinfo Isbn') ?></th>
            <td><?= h($bookinfo->bookinfo_isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookinfo Bookname') ?></th>
            <td><?= h($bookinfo->bookinfo_bookname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookinfo Auther') ?></th>
            <td><?= h($bookinfo->bookinfo_auther) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookinfo Com') ?></th>
            <td><?= h($bookinfo->bookinfo_com) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookinfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookinfo Code') ?></th>
            <td><?= $this->Number->format($bookinfo->bookinfo_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookinfo Startday') ?></th>
            <td><?= h($bookinfo->bookinfo_startday) ?></td>
        </tr>
    </table>
</div>
