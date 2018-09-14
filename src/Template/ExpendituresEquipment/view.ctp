<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ExpendituresEquipment $expendituresEquipment
  */
?>



<div style="display: inline-block; margin-top: 30px" class="col-md-12">      

      <div  class="col-md-6">

            <P > Universidad Nacional Experimental Politécnica</P>
            <p style=" padding-left: 80px">"Antonio Jose de Sucre"</p>
            <p style=" padding-left: 60px" >Vice Rectorado Puerto Ordaz</p>
            <p>Oficina Regional de Tecnologia y Servicios de Informacion</p>
            </div>

        <div class="col-md-6" >
            <h3 style="padding-left: 250px">UNEXPO</h3>
            <h3 style="padding-left: 250px">ORTSI</h3>
        </div>
    </div>


<h5 style="color: black; text-align: center;">HOJA DE SERVICIO TECNICO DE EGRESOS</h5>

<table  class="table table-bordered" style="margin-top: 0px">
  
  <tr>
    <th style="border: 1px solid black;" colspan="4" width="100">Dependencia: </th>
    <th style="border: 1px solid black;" colspan="4">Fecha:</th>
  </tr>
  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>Solicitante:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Equipo:</b></td>
    <td style="border: 1px solid black;" colspan="3"><b>Nombre de Equipo:</b></td>
 </tr>
  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>Marca:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Modelo:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Serial:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>USB F/P:</b></td>
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>TM:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Procesador/Velocidad:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Serial:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Codigo B/N:</b></td>

  </tr>

   <tr>
    <td style="border: 1px solid black;" colspan="2"><b>Memoria/Frecuencia:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Disco Duro:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>U.Opticas:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Floppy</b></td>
  </tr>

   <tr>
    <td style="border: 1px solid black;" colspan="8"><b>Caracteristicas:</b> </td>
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="8"><b>Analisis de Falla:</b>.<?= h($expendituresEquipment->analisis_falla) ?></td>
  </tr>

 <tr>
    <td style="border: 1px solid black;" colspan="8"><b>Observacion:</b></td>
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="2"><b>Usuario Conforme:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>firma:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Caracteristicas:</b></td>
    <td style="border: 1px solid black;" colspan="2"><b>Hora:</b></td>  
  </tr>

  <tr>
    <td style="border: 1px solid black;" colspan="3"><b>Atendido por:</b>.<?= h($expendituresEquipment->usuario_recibe) ?></td>
    <td style="border: 1px solid black;" colspan="3"><b>firma:</b></td>
    <td style="border: 1px solid black;" colspan="3"><b>Servicio de Traslado:</b>.<?= h($expendituresEquipment->usuario_tralasda) ?></td>
  </tr>

</table>
<p style="text-align: center">"La Universidad Tecnica del Estado Venezolano"</p>




