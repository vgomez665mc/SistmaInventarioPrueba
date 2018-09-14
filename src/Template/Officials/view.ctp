<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Official $official
  */
?>



<div class="users view large-9 medium-8 columns content">

<h5 style="color: black; text-align: center;">REPORTE DE FUNCIONARIO</h5>

    <table class="table table-bordered" style="margin-top: 50px">
        <thead>
          <tr>
            <th style="border: 1px solid black;">Nombre</th>
            <th style="border: 1px solid black;">Apellido</th>
            <th style="border: 1px solid black;">Cedula</th>
           <th style="border: 1px solid black;">Correo</th>
            <th style="border: 1px solid black;">Telefono</th>
            <th style="border: 1px solid black;">Sexo</th>
            <th style="border: 1px solid black;">Dependencia</th>
            <th style="border: 1px solid black;">Cargo</th>
            <th style="border: 1px solid black;">Condicion Especial</th>
            <th style="border: 1px solid black;">Estacion</th>

         </tr>
        </thead>

        <tbody>
          <tr>
            <td style="border: 1px solid black;"><?= h($official->nombre) ?></td>
            <td style="border: 1px solid black;"><?= h($official->apellido) ?></td>
            <td style="border: 1px solid black;"><?= h($official->cedula) ?></td>
            <td style="border: 1px solid black;"><?= h($official->correo) ?></td>
            <td style="border: 1px solid black;"><?= h($official->telefono) ?></td>
            <td style="border: 1px solid black;"><?= h($official->sexo) ?></td>
            <td style="border: 1px solid black;"><?= h($official->dependencia) ?></td>
            <td style="border: 1px solid black;"><?= h($official->cargo) ?></td>
            <td style="border: 1px solid black;"><?= h($official->cond_especial) ?></td>
            <td style="border: 1px solid black;"><?= h($official->estacion) ?></td>
          </tr>


         
        </tbody>
      </table>

</div>



        




