<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>


<div class="users view large-9 medium-8 columns content">

<h5 style="color: black; text-align: center;">REPORTE DE TECNICO</h5>

    <table class="table table-bordered" style="margin-top: 50px">
        <thead>
          <tr>
            <th style="border: 1px solid black;">Nombre</th>
            <th style="border: 1px solid black;">Apellido</th>
            <th style="border: 1px solid black;">Cedula</th>
            <th style="border: 1px solid black;">Username</th>
           <th style="border: 1px solid black;">Correo</th>
            <th style="border: 1px solid black;">Telefono</th>
            <th style="border: 1px solid black;">Sexo</th>
            <th style="border: 1px solid black;">Dependencia</th>
            <th style="border: 1px solid black;">Cargo</th>
         </tr>
        </thead>

        <tbody>
          <tr>
            <td style="border: 1px solid black;"><?= h($user->nombre) ?></td>
            <td style="border: 1px solid black;"><?= h($user->apellido) ?></td>
             <td style="border: 1px solid black;"><?= h($user->cedula) ?></td>
             <td style="border: 1px solid black;"><?= h($user->username) ?></td>
            <td style="border: 1px solid black;"> <?= h($user->correo) ?></td>
            <td style="border: 1px solid black;"><?= h($user->telefono) ?></td>
            <td style="border: 1px solid black;"><?= h($user->sexo) ?></td>
            <td style="border: 1px solid black;"><?= h($user->dependencia) ?></td>
            <td style="border: 1px solid black;"><?= h($user->cargo) ?></td>
       

          </tr>


         
        </tbody>
      </table>

</div>



        



