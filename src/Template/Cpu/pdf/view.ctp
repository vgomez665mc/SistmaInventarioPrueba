<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Cpu $cpu
  */
?>



<div class="users view large-9 medium-8 columns content">

<h5 style="color: black; text-align: center;">REPORTE DE CPU</h5>

    <table style="margin-left: auto;margin-right: auto;" class="table table-bordered" style="margin-top: 50px">
        <thead>
          <tr>
            <th style="border: 1px solid black;">Serial</th>
            <th style="border: 1px solid black;">Marca</th>
            <th style="border: 1px solid black;">Modelo</th>
            <th style="border: 1px solid black;">Tipo</th>
           <th style="border: 1px solid black;">Tarjeta Madre</th>
            <th style="border: 1px solid black;">Procesador</th>
            <th style="border: 1px solid black;">Velocidad</th>
            <th style="border: 1px solid black;">Memoria</th>
            <th style="border: 1px solid black;">Capacidad HDD</th>
         </tr>
        </thead>

        <tbody>
          <tr>
            <td style="border: 1px solid black;"><?= h($cpu->serial) ?></td>
            <td style="border: 1px solid black;"><?= h($cpu->marca) ?></td>
             <td style="border: 1px solid black;"><?= h($cpu->modelo) ?></td>
             <td style="border: 1px solid black;"><?= h($cpu->tipo) ?></td>
            <td style="border: 1px solid black;"> <?= h($cpu->tarjeta_madre) ?></td>
            <td style="border: 1px solid black;"><?= h($cpu->procesador) ?></td>
            <td style="border: 1px solid black;"><?= h($cpu->velocidad) ?></td>
            <td style="border: 1px solid black;"><?= h($cpu->memoria) ?></td>
            <td style="border: 1px solid black;"><?= h($cpu->capacidad_hdd) ?></td>
       

          </tr>
        </tbody>
      </table>

</div>



        
