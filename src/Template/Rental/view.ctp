<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rental $rental
 */ 
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rental'), ['action' => 'edit', $rental->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rental'), ['action' => 'delete', $rental->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rental->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rental'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rental'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rental view large-9 medium-8 columns content">
    <h3><?= h($rental->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rental Etc') ?></th>
            <td><?= h($rental->rental_etc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rental->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental User Id') ?></th>
            <td><?= $this->Number->format($rental->rental_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Book Id') ?></th>
            <td><?= $this->Number->format($rental->rental_book_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Date') ?></th>
            <td><?= h($rental->rental_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rental Return') ?></th>
            <td><?= h($rental->rental_return) ?></td>
        </tr>
    </table>
</div>
