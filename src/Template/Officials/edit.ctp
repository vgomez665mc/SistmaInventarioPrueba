<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Editar Funcionarios</h2>

    </div>
    <?= $this->Form->create($official,['novalidate'])?>

    <fieldset>
        <?php
        echo $this->Form->control('nombre',array('label'=>'Nombre','class'=>'form-control input-sm'));
        echo $this->Form->control('apellido',array('label'=>'Apellido','class'=>'form-control input-sm'));
        echo $this->Form->control('cedula',array('label'=>'Cedula','class'=>'form-control input-sm'));
        echo $this->Form->input('sexo',['options'=>['none'=>'','masculino'=>'Masculino','femenino' => 'Femenino'],'class'=>'form-control input-sm']);
        echo $this->Form->control('correo',array('label'=>'Correo Electronico','class'=>'form-control input-sm'));
        echo $this->Form->control('telefono',array('label'=>'Telefono','class'=>'form-control input-sm'));
        echo $this->Form->control('dependencia',array('label'=>'Dependencia','class'=>'form-control input-sm'));
        echo $this->Form->control('cargo',array('label'=>'Cargo','class'=>'form-control input-sm'));
        echo $this->Form->control('cond_especial',array('label'=>'Condicion Especial','class'=>'form-control input-sm'));
        echo $this->Form->control('estacion',array('label'=>'Estacion','class'=>'form-control input-sm'));

        ?>
    </fieldset>
    <div class="col-md-12 text-center">

    <br>
        <?= $this->Form->button('Crear Funcionario',array('class' => 'btn btn-default '))?>

    <?= $this->Form->end() ?>
    </div>
</div>




