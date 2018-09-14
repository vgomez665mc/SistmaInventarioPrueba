<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ExpendituresEquipment[]|\Cake\Collection\CollectionInterface $expendituresEquipment
  */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2> Listado de Egresos de equipos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_ing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_egreso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_entrega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_recibe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_tralasda') ?></th>
                
                <th> Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($expendituresEquipment as $expendituresEquipment): ?>
                <tr>
                  
                <td><?= $this->Number->format($expendituresEquipment->id) ?></td>
                <td><?= h($expendituresEquipment->fecha_ing) ?></td>
                <td><?= h($expendituresEquipment->fecha_egreso) ?></td>
                <td><?= h($expendituresEquipment->usuario_entrega) ?></td>
                <td><?= h($expendituresEquipment->usuario_recibe) ?></td>
                <td><?= h($expendituresEquipment->usuario_tralasda) ?></td>

                <td>
                        <?= $this->Html->link('Consultar',['action'=>'view',$expendituresEquipment->id],['class' => 'btn btn-sm btn-info'])?>
                        <?= $this->Html->link('Editar',['action'=>'edit',$expendituresEquipment->id],['class' => 'btn btn-sm btn-primary'])?>
                        <?= $this->Form->postLink('Eliminar',['action'=>'delete',$expendituresEquipment->id],['confirm'=>'Eliminar usuario ?','class' => 'btn btn-sm btn-danger'])?>

                        <?= $this->Html->link('Generar PDF',['action'=>'view',$expendituresEquipment->id,'_ext' => 'pdf'],['class' => 'btn btn-sm btn-success'])?>
                        

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