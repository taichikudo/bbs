<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('変更'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('退会'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Address') ?></th>
            <td><?= h($user->user_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Tel') ?></th>
            <td><?= h($user->user_tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Email') ?></th>
            <td><?= h($user->user_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Password') ?></th>
            <td><?= h($user->user_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Birthday') ?></th>
            <td><?= h($user->user_birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User In') ?></th>
            <td><?= h($user->user_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Out') ?></th>
            <td><?= h($user->user_out) ?></td>
        </tr>
    </table>
</div>
