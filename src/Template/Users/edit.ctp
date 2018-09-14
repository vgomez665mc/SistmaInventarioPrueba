<?php
/**
 * @var \App\View\AppView $this
 */
?>



<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Editar Usuario</h2>

    </div>
    <?= $this->Form->create($user,['novalidate'])?>

    <fieldset>
        <?php
        echo $this->Form->control('nombre',array('label'=>'Nombre','class'=>'form-control input-sm'));
        echo $this->Form->control('apellido',array('label'=>'Apellido','class'=>'form-control input-sm'));
        echo $this->Form->control('username',array('label'=>'Username','class'=>'form-control input-sm'));
        echo $this->Form->control('cedula',array('label'=>'Cedula','class'=>'form-control input-sm'));
        echo $this->Form->input('role',['options'=>['admin'=>'Administrador','tecnico' => 'Tecnico'],'class'=>'form-control input-sm']);
        echo $this->Form->input('sexo',['options'=>['none'=>'','masculino'=>'Masculino','femenino' => 'Femenino'],'class'=>'form-control input-sm']);
        echo $this->Form->control('correo',array('label'=>'Correo Electronico','class'=>'form-control input-sm'));
        echo $this->Form->control('password',array('label'=>'Contraseña','class'=>'form-control input-sm'));
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
