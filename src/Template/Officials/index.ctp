<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2> Listado de Funcionarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th> <?= $this->Paginator->sort('id')?></th>
                <th> <?= $this->Paginator->sort('nombre',['Nombre'])?></th>
                <th> <?= $this->Paginator->sort('apellido',['Apellido'])?></th>
                <th> <?= $this->Paginator->sort('cedula',['Cedula'])?></th>
                <th> <?= $this->Paginator->sort('dependencia',['Dependencia'])?></th>
                <th> <?= $this->Paginator->sort('cargo',['Cargo'])?></th>
                <th> <?= $this->Paginator->sort('estacion',['Estacion'])?></th>

                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($officials as $official):?>
                <tr>
                    <td><?= $this->Number->format($official->id)?></td>
                    <td><?= h($official->nombre)?></td>
                    <td><?= h($official->apellido)?></td>
                    <td><?= h($official->cedula)?></td>
                    <td><?= h($official->dependencia)?></td>
                    <td><?= h($official->cargo)?></td>
                    <td><?= h($official->estacion)?></td>

                    <td>
                        <?= $this->Html->link('Consultar',['action'=>'view',$official->id],['class' => 'btn btn-sm btn-info'])?>
                        <?= $this->Html->link('Editar',['action'=>'edit',$official->id],['class' => 'btn btn-sm btn-primary'])?>
                        <?= $this->Form->postLink('Eliminar',['action'=>'delete',$official->id],['confirm'=>'Eliminar usuario ?','class' => 'btn btn-sm btn-danger'])?>
                         <?= $this->Html->link('Generar PDF',['action'=>'view',$official->id,'_ext' => 'pdf'],['class' => 'btn btn-sm btn-success'])?>
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