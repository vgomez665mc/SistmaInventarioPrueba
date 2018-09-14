
<?php
/**
  * @var \App\View\AppView $this
  */
?>

  <div class="col-md-6 col-sm-6 col-xs-6 form-group">
       
        </div>

<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Crear Egreso de Equipo</h2>

    </div>


    <?= $this->Form->create($expendituresEquipment,['novalidate'])?>

        <?php
           
       

        echo $this->Form->input('fecha_egreso', ['class' => 'datepicker-input', 'type' => 'text', 'format' => 'Y-m-d', 'default' => date('Y-m-d'), 'value' =>''. $ingresoEquipo->fecha_ing,'label'=>'Fecha Ingreso','class'=>'form-control input-sm']);
            


         echo $this->Form->input('fecha_egreso', ['class' => 'datepicker-input', 'type' => 'text', 'format' => 'Y-m-d', 'default' => date('Y-m-d'), 'value' => !empty($item->date) ? $item->date->format('Y-m-d') : date('Y-m-d'),'class'=>'form-control input-sm']);
            

        echo $this->Form->control('falla',array('label'=>'Falla','class'=>'form-control input-sm'));
        echo $this->Form->control('analisis_falla',array('label'=>'Analisis de fallas','type' => 'textarea','value'=>''.$ingresoEquipo->analisis_falla,'class'=>'form-control input-sm'));
        echo $this->Form->control('reparado',array('label'=>'Reparado','class'=>'form-control input-sm'));
        echo $this->Form->control('usuario_recibe',array('label'=>'Usuario Recibe','value'=>''.$ingresoEquipo->usuario_recb,'class'=>'form-control input-sm'));
        echo $this->Form->control('usuario_traslada',array('label'=>'Usuario Traslada','value'=>''.$ingresoEquipo->usuario_traslada,'class'=>'form-control input-sm'));         ?>
     
          
    </fieldset>

       <label class="">Usuario Recibe</label>
                        <select class="form-control select2 required" name="user_id">
                            <option selected disabled>Seleccione...</option>
                            <?php foreach ($tecnicos as $usuari): ?>
                                <option value="<?php echo $usuari['nombre'];?>"><?php echo $usuari['nombre'];?></option>
                            <?php endforeach; ?>
                        </select>
    <div class="col-md-12 text-center">

        <br>
        <?= $this->Form->button('Crear Egreso',array('class' => 'btn btn-default '))?>
        <?= $this->Form->end() ?>
    </div>
</div>







