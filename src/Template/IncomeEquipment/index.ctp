
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2> Listado de Ingreso de equipos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_ing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_ing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_ing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_recb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_traslada') ?></th>
                <th 
           
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($incomeEquipment as $incomeEquipment): ?>
                <tr>
                  
                 <td><?= $this->Number->format($incomeEquipment->id) ?></td>
                <td><?= h($incomeEquipment->cod_ing) ?></td>
                <td><?= h($incomeEquipment->fecha_ing) ?></td>
                <td><?= h($incomeEquipment->motivo_ing) ?></td>
                <td><?= h($incomeEquipment->usuario_recb) ?></td>
                <td><?= h($incomeEquipment->usuario_traslada) ?></td>
                <td>
                        <?= $this->Html->link('Consultar',['action'=>'view',$incomeEquipment->id],['class' => 'btn btn-sm btn-info'])?>
                        <?= $this->Html->link('Editar',['action'=>'edit',$incomeEquipment->id],['class' => 'btn btn-sm btn-primary'])?>
                        <?= $this->Form->postLink('Eliminar',['action'=>'delete',$incomeEquipment->id],['confirm'=>'Eliminar usuario ?','class' => 'btn btn-sm btn-danger'])?>
                       <?= $this->Html->link('Egresar Equipos',['controller' => 'ExpendituresEquipment','action'=>'egreso',$incomeEquipment->id],['class' => ' btn btn-sm btn-warning'])?>

                       <?= $this->Html->link('Generar PDF',['action'=>'view',$incomeEquipment->id,'_ext' => 'pdf'],['class' => 'btn btn-sm btn-success'])?>

                    </td>

                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
        </div>


<script>
$(document).ready(function() {
    "use strict";

    $('table').DataTable( {
        responsive: true
    } );

} );
</script>