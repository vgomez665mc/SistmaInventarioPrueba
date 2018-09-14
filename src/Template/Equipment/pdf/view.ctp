<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>


<h5 style="color: black; text-align: center;">REPORTE DE EQUIPO</h5>

<div style="margin-left: auto;margin-right: auto;">

    <table style="margin-left: auto;margin-right: auto;" class="table table-bordered" style="margin-top: 50px">
        <thead>
          <tr>
            <th style="border: 1px solid black;">Serial</th>
            <th style="border: 1px solid black;">Marca</th>
            <th style="border: 1px solid black;">Modelo</th>
            <th style="border: 1px solid black;">Tipo</th>
           
         </tr>
        </thead>

        <tbody>
          <tr>
            <td style="border: 1px solid black;"><?= h($equipment->serial) ?></td>
            <td style="border: 1px solid black;"><?= h($equipment->marca) ?></td>
             <td style="border: 1px solid black;"><?= h($equipment->modelo) ?></td>
             <td style="border: 1px solid black;"><?= h($equipment->tipo) ?></td>     

          </tr>


         
        </tbody>
      </table>

</div>



        



