<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Inventory[]|\Cake\Collection\CollectionInterface $inventories
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cpu'), ['controller' => 'Cpu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cpu'), ['controller' => 'Cpu', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventories index large-9 medium-8 columns content">
    <h3><?= __('Inventories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventories as $inventory): ?>
            <tr>
                <td><?= $this->Number->format($inventory->id) ?></td>
                <td><?= $inventory->has('cpu') ? $this->Html->link($inventory->cpu->id, ['controller' => 'Cpu', 'action' => 'view', $inventory->cpu->id]) : '' ?></td>
                <td><?= $inventory->has('equipment') ? $this->Html->link($inventory->equipment->id, ['controller' => 'Equipment', 'action' => 'view', $inventory->equipment->id]) : '' ?></td>
                <td><?= $inventory->has('user') ? $this->Html->link($inventory->user->id, ['controller' => 'Users', 'action' => 'view', $inventory->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inventory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?>
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
