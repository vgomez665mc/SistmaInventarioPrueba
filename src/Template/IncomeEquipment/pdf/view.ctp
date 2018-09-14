<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\IncomeEquipment $incomeEquipment
  */
?>




<h5 style="color: black; text-align: center;">HOJA DE SERVICIO TECNICO</h5>

<table style="margin-left: auto;margin-right: auto;" class="table table-bordered" style="margin-top: 0px">
  
  <tr>
    <th style="border: 1px solid black;text-align: left;" colspan="4" width="100">Dependencia: </th>
    <th style="border: 1px solid black;text-align: left" colspan="4">Fecha:</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>Solicitante:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Equipo:</b></td>
    <td style="border: 1px solid black;" colspan="3"><b>Nombre de Equipo:</b></td>
 </tr>
  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>Marca:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Modelo:</b></td>
    <td style="border: 1px solid black;" colspan="3"><b>USB F/P:</b></td>
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>TM:</b></td>
    <td style="border: 1px solid black;" colspan="2" width="400"><b>Procesador/Velocidad:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Serial:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Codigo B/N:</b></td>

  </tr>

   <tr>
    <td style="border: 1px solid black;" colspan="2" width="200"><b>Memoria/Frecuencia:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Disco Duro:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>U.Opticas:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Floppy</b></td>
  </tr>

   <tr>
    <td style="border: 1px solid black;" colspan="8"><b>Caracteristicas:</b>.<?= h($incomeEquipment->caracteristicas) ?></td>
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="8"><b>Analisis de Falla:</b>.<?= h($incomeEquipment->analisis_falla) ?></td>
  </tr>

 <tr>
    <td style="border: 1px solid black;" colspan="8"><b>Observacion:</b></td>
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="2" width="200"><b>Usuario Conforme:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>firma:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Fecha:</b>.<?= h($incomeEquipment->fecha_ing) ?></td>
    <td style="border: 1px solid black;" colspan="2"><b>Hora:</b></td>  
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="3"><b>Atendido por:</b>.<?= h($incomeEquipment->usuario_recb) ?></td>
    <td style="border: 1px solid black;" colspan="3"><b>firma:</b></td>
    <td style="border: 1px solid black;" colspan="3"><b>Servicio de Traslado:</b>.<?= h($incomeEquipment->usuario_traslada) ?></td>
  </tr>

</table>
<p style="text-align: center">"La Universidad Tecnica del Estado Venezolano"</p>






