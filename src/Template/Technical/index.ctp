<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Technical[]|\Cake\Collection\CollectionInterface $technical
  */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2> Listado de Tecnicos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th> <?= $this->Paginator->sort('id')?></th>
                <th> <?= $this->Paginator->sort('cedula',['Cedula'])?></th>
                <th> <?= $this->Paginator->sort('nombre',['Nombre'])?></th>
                <th> <?= $this->Paginator->sort('apellido',['Apellido'])?></th>
                <th> <?= $this->Paginator->sort('dependencia',['Dependencia'])?></th>
                <th> <?= $this->Paginator->sort('cargo',['Cargo'])?></th>

                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($technical as $technical):?>
                <tr>
                    <td><?= $this->Number->format($technical->id)?></td>
                    <td><?= h($technical->cedula)?></td>
                    <td><?= h($technical->nombre)?></td>
                    <td><?= h($technical->apellido)?></td>
                    <td><?= h($technical->dependencia)?></td>
                    <td><?= h($technical->cargo)?></td>

                    <td>
                        <?= $this->Html->link('Ver',['action'=>'view',$technical->id],['class' => 'btn btn-sm btn-info'])?>
                        <?= $this->Html->link('Editar',['action'=>'edit',$technical->id],['class' => 'btn btn-sm btn-primary'])?>
                        <?= $this->Form->postLink('Eliminar',['action'=>'delete',$technical->id],['confirm'=>'Eliminar tecnico ?','class' => 'btn btn-sm btn-danger'])?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                </table>
        </div>

          <div class="paginator">
                      <ul class="pagination">
                          <?= $this-> Paginator->prev('< Anterior')?>
                          <?= $this-> Paginator->numbers(['before'=>'','after'=>'']) ?>
                          <?= $this-> Paginator->next('Siguiente >')?>
                       </ul>
                       <p><?= $this->Paginator->counter()?></p>
                  </div>
        </div>

