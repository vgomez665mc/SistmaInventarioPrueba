<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Technical $technical
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Technical'), ['action' => 'edit', $technical->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Technical'), ['action' => 'delete', $technical->id], ['confirm' => __('Are you sure you want to delete # {0}?', $technical->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Technical'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Technical'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Expenditures Equipment'), ['controller' => 'ExpendituresEquipment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expenditures Equipment'), ['controller' => 'ExpendituresEquipment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Income Equipment'), ['controller' => 'IncomeEquipment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income Equipment'), ['controller' => 'IncomeEquipment', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="technical view large-9 medium-8 columns content">
    <h3><?= h($technical->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($technical->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($technical->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= h($technical->cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($technical->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($technical->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($technical->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($technical->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dependencia') ?></th>
            <td><?= h($technical->dependencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($technical->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($technical->rol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($technical->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Expenditures Equipment') ?></h4>
        <?php if (!empty($technical->expenditures_equipment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fecha Ing') ?></th>
                <th scope="col"><?= __('Fecha Egreso') ?></th>
                <th scope="col"><?= __('Falla') ?></th>
                <th scope="col"><?= __('Analisis Falla') ?></th>
                <th scope="col"><?= __('Reparado') ?></th>
                <th scope="col"><?= __('Usuario Entrega') ?></th>
                <th scope="col"><?= __('Usuario Recibe') ?></th>
                <th scope="col"><?= __('Usuario Tralasda') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Income Equipment Id') ?></th>
                <th scope="col"><?= __('Technical Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($technical->expenditures_equipment as $expendituresEquipment): ?>
            <tr>
                <td><?= h($expendituresEquipment->id) ?></td>
                <td><?= h($expendituresEquipment->fecha_ing) ?></td>
                <td><?= h($expendituresEquipment->fecha_egreso) ?></td>
                <td><?= h($expendituresEquipment->falla) ?></td>
                <td><?= h($expendituresEquipment->analisis_falla) ?></td>
                <td><?= h($expendituresEquipment->reparado) ?></td>
                <td><?= h($expendituresEquipment->usuario_entrega) ?></td>
                <td><?= h($expendituresEquipment->usuario_recibe) ?></td>
                <td><?= h($expendituresEquipment->usuario_tralasda) ?></td>
                <td><?= h($expendituresEquipment->observaciones) ?></td>
                <td><?= h($expendituresEquipment->income_equipment_id) ?></td>
                <td><?= h($expendituresEquipment->technical_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ExpendituresEquipment', 'action' => 'view', $expendituresEquipment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ExpendituresEquipment', 'action' => 'edit', $expendituresEquipment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExpendituresEquipment', 'action' => 'delete', $expendituresEquipment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expendituresEquipment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Income Equipment') ?></h4>
        <?php if (!empty($technical->income_equipment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cod Ing') ?></th>
                <th scope="col"><?= __('Fecha Ing') ?></th>
                <th scope="col"><?= __('Solicitante') ?></th>
                <th scope="col"><?= __('Caracteristicas') ?></th>
                <th scope="col"><?= __('Motivo Ing') ?></th>
                <th scope="col"><?= __('Usuario Recb') ?></th>
                <th scope="col"><?= __('Usuario Traslada') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Equipment Id') ?></th>
                <th scope="col"><?= __('Cpu Id') ?></th>
                <th scope="col"><?= __('Technical Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($technical->income_equipment as $incomeEquipment): ?>
            <tr>
                <td><?= h($incomeEquipment->id) ?></td>
                <td><?= h($incomeEquipment->cod_ing) ?></td>
                <td><?= h($incomeEquipment->fecha_ing) ?></td>
                <td><?= h($incomeEquipment->solicitante) ?></td>
                <td><?= h($incomeEquipment->caracteristicas) ?></td>
                <td><?= h($incomeEquipment->motivo_ing) ?></td>
                <td><?= h($incomeEquipment->usuario_recb) ?></td>
                <td><?= h($incomeEquipment->usuario_traslada) ?></td>
                <td><?= h($incomeEquipment->observaciones) ?></td>
                <td><?= h($incomeEquipment->equipment_id) ?></td>
                <td><?= h($incomeEquipment->cpu_id) ?></td>
                <td><?= h($incomeEquipment->technical_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'IncomeEquipment', 'action' => 'view', $incomeEquipment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'IncomeEquipment', 'action' => 'edit', $incomeEquipment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'IncomeEquipment', 'action' => 'delete', $incomeEquipment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incomeEquipment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
