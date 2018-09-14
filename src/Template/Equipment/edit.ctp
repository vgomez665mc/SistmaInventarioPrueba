<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Editar Equipo</h2>

    </div>
    <?= $this->Form->create($equipment,['novalidate'])?>

    <fieldset>
        <?php
        echo $this->Form->control('serial',array('label'=>'Serial','class'=>'form-control input-sm'));
        echo $this->Form->control('marca',array('label'=>'Marca','class'=>'form-control input-sm'));
        echo $this->Form->control('modelo',array('label'=>'Modelo','class'=>'form-control input-sm'));
        echo $this->Form->control('tipo',array('label'=>'Tipo','class'=>'form-control input-sm'));

        ?>
    </fieldset>
    <div class="col-md-12 text-center">

        <br>
        <?= $this->Form->button('Editar Equipo',array('class' => 'btn btn-default '))?>
        <?= $this->Form->end() ?>
    </div>
</div>
