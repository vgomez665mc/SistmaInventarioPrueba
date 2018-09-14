<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Inventories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cpu'), ['controller' => 'Cpu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cpu'), ['controller' => 'Cpu', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventories form large-9 medium-8 columns content">
    <?= $this->Form->create($inventory) ?>
    <fieldset>
        <legend><?= __('Add Inventory') ?></legend>
        <?php
            echo $this->Form->control('cpu_id', ['options' => $cpu]);
            echo $this->Form->control('equipment_id', ['options' => $equipment]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
