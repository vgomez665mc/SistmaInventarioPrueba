<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Equipment[]|\Cake\Collection\CollectionInterface $equipment
  */
?>


<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2> Listado de Equipos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th> <?= $this->Paginator->sort('id')?></th>
                <th> <?= $this->Paginator->sort('serial',['Serial'])?></th>
                <th> <?= $this->Paginator->sort('marca',['Marca'])?></th>
                <th> <?= $this->Paginator->sort('modelo',['Modelo'])?></th>
                <th> <?= $this->Paginator->sort('tipo',['Tipo'])?></th>

                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($equipment as $equipment):?>
                <tr>
                   <td><?= $this->Number->format($equipment->id)?></td>
                    <td><?= h($equipment->serial)?></td>
                    <td><?= h($equipment->marca)?></td>
                    <td><?= h($equipment->modelo)?></td>
                    <td><?= h($equipment->tipo)?></td>

                    <td>
                        <?= $this->Html->link('Consultar',['action'=>'view',$equipment->id],['class' => 'btn btn-sm btn-info'])?>
                        <?= $this->Html->link('Editar',['action'=>'edit',$equipment->id],['class' => 'btn btn-sm btn-primary'])?>
                        <?= $this->Form->postLink('Eliminar',['action'=>'delete',$equipment->id],['confirm'=>'Eliminar usuario ?','class' => 'btn btn-sm btn-danger'])?>
                      <?= $this->Html->link('Generar PDF',['action'=>'view',$equipment->id,'_ext' => 'pdf'],['class' => 'btn btn-sm btn-success'])?>

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