<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bookstate'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookstate index large-9 medium-8 columns content">
    <h3><?= __('Bookstate') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_out') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookstate_etc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookstate as $bookstate): ?>
            <tr>
                <td><?= $this->Number->format($bookstate->bookstate_id) ?></td>
                <td><?= h($bookstate->bookstate_isbn) ?></td>
                <td><?= h($bookstate->bookstate_name) ?></td>
                <td><?= h($bookstate->bookstate_in) ?></td>
                <td><?= h($bookstate->bookstate_out) ?></td>
                <td><?= h($bookstate->bookstate_etc) ?></td>
                <td class="actions">

                </td>
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
