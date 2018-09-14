<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cpu[]|\Cake\Collection\CollectionInterface $cpu
  */
?>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2> Listado de Cpu</h2>
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
                <?php foreach ($cpu as $cpu):?>
                <tr>
                   <td><?= $this->Number->format($cpu->id)?></td>
                    <td><?= h($cpu->serial)?></td>
                    <td><?= h($cpu->marca)?></td>
                    <td><?= h($cpu->modelo)?></td>
                    <td><?= h($cpu->tipo)?></td>

                    <td>
                        <?= $this->Html->link('Consultar',['action'=>'view',$cpu->id],['class' => 'btn btn-sm btn-info'])?>
                        <?= $this->Html->link('Editar',['action'=>'edit',$cpu->id],['class' => 'btn btn-sm btn-primary'])?>
                        <?= $this->Form->postLink('Eliminar',['action'=>'delete',$cpu->id],['confirm'=>'Eliminar usuario ?','class' => 'btn btn-sm btn-danger'])?>
                      <?= $this->Html->link('Generar PDF',['action'=>'view',$cpu->id,'_ext' => 'pdf'],['class' => 'btn btn-sm btn-success'])?>

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