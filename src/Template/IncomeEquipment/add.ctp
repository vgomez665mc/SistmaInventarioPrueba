<?php
/**
  * @var \App\View\AppView $this
  */
/*//echo $this->Form->control('motivo_ing',array('label'=>'Telefono','value'=>'','class'=>'form-control input-sm'));
*/
?>


<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Ingreso de Equipos</h2>

    </div>
    <?= $this->Form->create($incomeEquipment,['novalidate'])?>

    <fieldset>
        <?php
        echo $this->Form->control('cod_ing',array('label'=>'Codigo de ingreso','value'=>''.substr($current_user['nombre'],0,1).$codigo,'class'=>'form-control input-sm'));

        echo $this->Form->input('fecha_ing', ['class' => 'datepicker-input', 'type' => 'text', 'format' => 'Y-m-d', 'default' => date('Y-m-d'), 'value' => !empty($item->date) ? $item->date->format('Y-m-d') : date('Y-m-d'),'class'=>'form-control input-sm']);


        echo $this->Form->control('solicitante',array('label'=>'Solicitante','class'=>'form-control input-sm'));
        echo $this->Form->control('caracteristicas',array('label'=>'Caracteristicas','class'=>'form-control input-sm'));
        echo $this->Form->control('motivo_ing',array('label'=>'Motivo de Ingreso','class'=>'form-control input-sm'));
        echo $this->Form->control('analisis_falla',array('label'=>'Analisis de Fallas','type' => 'textarea','class'=>'form-control input-sm'));
        echo $this->Form->control('usuario_traslada',array('label'=>'Usuario Traslada','class'=>'form-control input-sm'));
        ?>


          <label class="">Usuario Recibe</label>
                        <select class="form-control select2 required" name="user_id">
                            <option selected disabled>Seleccione...</option>
                            <?php foreach ($usuario as $usuari): ?>
                                <option value="<?php echo $usuari['nombre'];?>"><?php echo $usuari['nombre'];?></option>
                            <?php endforeach; ?>
                        </select>

                        <label class="">Cpu</label>
                        <select class="form-control select2 required" name="cpu_id">
                            <option selected disabled>Seleccione...</option>
                            <?php foreach ($cpu as $cp): ?>
                                <option value="<?php echo $cp['id'];?>"><?php echo $cp['serial'];?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="">Equipo</label>
                        <select class="form-control select2 required" name="equipment_id">
                            <option selected disabled>Seleccione...</option>
                            <?php foreach ($equipment as $equipmen): ?>
                                <option value="<?php echo $equipmen['id'];?>"><?php echo $equipmen['serial'];?></option>
                            <?php endforeach; ?>
                        </select>
        
    </fieldset>        

    <div class="col-md-12 text-center">
        <br>
        <?= $this->Form->button('Crear Ingreso',array('class' => 'btn btn-default '))?>

        <?= $this->Form->end() ?>
    </div>
</div>
      