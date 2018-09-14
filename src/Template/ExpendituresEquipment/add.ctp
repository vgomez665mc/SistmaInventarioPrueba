
<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-6 col-md-offset-3">
    <div class="page-header">
        <h2>Crear Egreso de Equipo</h2>

    </div>


    <?= $this->Form->create($expendituresEquipment,['novalidate'])?>

    <fieldset>

<br>
<br>
        <?php
       
        echo $this->Form->control('falla',array('label'=>'Falla','class'=>'form-control input-sm'));
        echo $this->Form->control('analisis_falla',array('label'=>'Analisis falla','class'=>'form-control input-sm'));
        echo $this->Form->control('reparado',array('label'=>'Reparado','class'=>'form-control input-sm'));
        echo $this->Form->control('usuario_entrega',array('label'=>'Usuario Entrega','class'=>'form-control input-sm'));
        echo $this->Form->control('usuario_recibe',array('label'=>'Usuario Recibe','class'=>'form-control input-sm'));
        echo $this->Form->control('usuario_traslada',array('label'=>'Usuario Traslada','class'=>'form-control input-sm'));
        echo $this->Form->control('observaciones',array('label'=>'Observaciones','class'=>'form-control input-sm'));
        echo $this->Form->control('income_equipment_id', ['options' => $incomeEquipment]);
         echo $this->Form->control('user_id', ['options' => $users]);
        ?>
            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
        <label class="control-label mb-10 col-xs-12 text-left" for="telf-casa">Fecha de Ingreso</label>
        <input type="text" name="nacimiento" id="nacimiento" class="form-control datepicker">
        <script>
        $(document).ready(function(){
        $('.datepicker').datetimepicker({
                    useCurrent: false,
                       widgetPositioning:{
                                        horizontal: 'auto',
                                        vertical: 'bottom'
                                    },
                                    format: 'YYYY/MM/DD',
                    icons: {
                            date: "fa fa-calendar",
                            up: "fa fa-arrow-up",
                            down: "fa fa-arrow-down"
                        },
                }).on('dp.show', function() {
                if($(this).data("DateTimePicker").date() === null)
                    $(this).data("DateTimePicker").date(moment());
            });
        });
        </script>
        </div>
    </fieldset>
    <div class="col-md-12 text-center">

        <br>
        <?= $this->Form->button('Crear Egreso',array('class' => 'btn btn-default '))?>
        <?= $this->Form->end() ?>
    </div>
</div>







