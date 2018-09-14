<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $technical->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $technical->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Technical'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Expenditures Equipment'), ['controller' => 'ExpendituresEquipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expenditures Equipment'), ['controller' => 'ExpendituresEquipment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Income Equipment'), ['controller' => 'IncomeEquipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income Equipment'), ['controller' => 'IncomeEquipment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="technical form large-9 medium-8 columns content">
    <?= $this->Form->create($technical) ?>
    <fieldset>
        <legend><?= __('Edit Technical') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('cedula');
            echo $this->Form->control('username');
            echo $this->Form->control('correo');
            echo $this->Form->control('telefono');
            echo $this->Form->control('sexo');
            echo $this->Form->control('dependencia');
            echo $this->Form->control('cargo');
            echo $this->Form->control('rol');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Editar Usuario</h2>

    </div>
    <?= $this->Form->create($technical,['novalidate'])?>

    <fieldset>
        <?php
        echo $this->Form->input('nombre',array('label'=>'Nombre','class'=>'form-control input-sm'));
        echo $this->Form->input('apellido',array('label'=>'Apellido','class'=>'form-control input-sm'));
        echo $this->Form->input('username',array('label'=>'Username','class'=>'form-control input-sm'));
        echo $this->Form->input('cedula',array('label'=>'Cedula','class'=>'form-control input-sm'));
        echo $this->Form->input('role',['options'=>['admin'=>'Administrador','tecnico' => 'Tecnico'],'class'=>'form-control input-sm']);
        echo $this->Form->input('sexo',['options'=>['none'=>'','masculino'=>'Masculino','femenino' => 'Femenino'],'class'=>'form-control input-sm']);
        echo $this->Form->control('correo',array('label'=>'Correo Electronico','class'=>'form-control input-sm'));
        echo $this->Form->control('contrasena',array('label'=>'Contraseña','class'=>'form-control input-sm'));
        echo $this->Form->control('telefono',array('label'=>'Telefono','class'=>'form-control input-sm'));
        echo $this->Form->control('dependencia',array('label'=>'Dependencia','class'=>'form-control input-sm'));
        echo $this->Form->control('cargo',array('label'=>'Cargo','class'=>'form-control input-sm'));
        ?>
    </fieldset>
    <div class="text-center">

        <br>
        <?= $this->Form->button('Editar Usuario',array('class' => 'btn btn-default '))?>

        <?= $this->Form->end() ?>
    </div>
</div>
