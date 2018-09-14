<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Inventory $inventory
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inventories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cpu'), ['controller' => 'Cpu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cpu'), ['controller' => 'Cpu', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inventories view large-9 medium-8 columns content">
    <h3><?= h($inventory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cpu') ?></th>
            <td><?= $inventory->has('cpu') ? $this->Html->link($inventory->cpu->id, ['controller' => 'Cpu', 'action' => 'view', $inventory->cpu->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipment') ?></th>
            <td><?= $inventory->has('equipment') ? $this->Html->link($inventory->equipment->id, ['controller' => 'Equipment', 'action' => 'view', $inventory->equipment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $inventory->has('user') ? $this->Html->link($inventory->user->id, ['controller' => 'Users', 'action' => 'view', $inventory->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inventory->id) ?></td>
        </tr>
    </table>
</div>
