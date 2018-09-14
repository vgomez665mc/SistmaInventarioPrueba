<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Crear Cpu</h2>

    </div>
    <?= $this->Form->create($cpu,['novalidate'])?>

    <fieldset>
        <?php
        echo $this->Form->control('serial',array('label'=>'Serial','class'=>'form-control input-sm'));
        echo $this->Form->control('marca',array('label'=>'Marca','class'=>'form-control input-sm'));
        echo $this->Form->control('modelo',array('label'=>'Modelo','class'=>'form-control input-sm'));
        echo $this->Form->control('tipo',array('label'=>'Tipo','class'=>'form-control input-sm'));
        echo $this->Form->control('tarjeta_madre',array('label'=>'Tarjeta Madre','class'=>'form-control input-sm'));
        echo $this->Form->control('procesador',array('label'=>'Procesador','class'=>'form-control input-sm'));
        echo $this->Form->control('velocidad',array('label'=>'Velocidad','class'=>'form-control input-sm'));
        echo $this->Form->control('memoria',array('label'=>'Memoria','class'=>'form-control input-sm'));
        echo $this->Form->control('capacidad_hdd',array('label'=>'Capacidad Hdd','class'=>'form-control input-sm'));


        ?>
    </fieldset>
    <div class="col-md-12 text-center">

        <br>
        <?= $this->Form->button('Crear Cpu',array('class' => 'btn btn-default '))?>

        <?= $this->Form->end() ?>
    </div>
</div>

