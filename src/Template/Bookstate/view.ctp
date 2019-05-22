<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstate $bookstate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookstate'), ['action' => 'edit', $bookstate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookstate'), ['action' => 'delete', $bookstate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookstate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookstate'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookstate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookstate view large-9 medium-8 columns content">
    <h3><?= h($bookstate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bookstate Isbn') ?></th>
            <td><?= h($bookstate->bookstate_isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookstate Name') ?></th>
            <td><?= h($bookstate->bookstate_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookstate Etc') ?></th>
            <td><?= h($bookstate->bookstate_etc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookstate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookstate In') ?></th>
            <td><?= h($bookstate->bookstate_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookstate Out') ?></th>
            <td><?= h($bookstate->bookstate_out) ?></td>
        </tr>
    </table>
</div>
