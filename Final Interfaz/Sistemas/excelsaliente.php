<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reporte</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>

</head>

<body BACKGROUND="FondoCyede2.jpg"  style="background-repeat:no-repeat">
<?php 
    error_reporting(E_ERROR);
    //$fecha=$_POST['fecha'];
    //$tienda=$_POST['tienda'];
    $year1=$_GET["a"];
    $mes1=$_POST['mes'];
    //$year1=&$mes;
    $fec="$year1-".$mes1."%";
    $year11 = date(Y);
    $month = date(m);
    $day = date(d);
    header('Content-type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=FaltantedeTraspasosSalientes".$year11."/".$month."/".$day.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<?php
include_once('conex.php');
$sqlt1=odbc_exec($conexion,"SELECT a.tip_doc_inv, a.estado, a.num_doc_in, a.fecha_doc,a.fecha_sistema, b.cod_item, b.cantidad, a.observacion, a.cod_bod, a.codcen, a.cod_bod_des  
FROM docum_invent as a,detalle_doc_inv b 
WHERE a.tip_doc_inv=b.tip_doc_inv 
	and a.num_doc_in=b.num_doc_in 
	and a.fecha_doc like '$fec'
	and a.tip_doc_inv='TE' and a.estado like 'A'
	and NOT EXISTS (SELECT c.tip_doc_inv, c.estado, c.num_doc_in, c.fecha_doc, d.cod_item, d.cantidad, c.observacion, c.cod_bod, c.codcen, c.cod_bod_des  
					FROM docum_invent c,detalle_doc_inv d
					WHERE c.tip_doc_inv=d.tip_doc_inv 
					and c.num_doc_in=d.num_doc_in 
					and c.fecha_doc like '$fec'
					and c.tip_doc_inv='TS' and c.estado like 'A'
					and a.NUM_DOC_IN = c.NUM_DOC_IN)"
. "order by a.fecha_doc");

?>

<center>                            
<table >
  <tr>
    <!--<td>
      <div align="center"><span class="style1"></span>
      </div>-->
      <table width="70%" height="100%" border="2">
      <tr>
          <th id="titulo" colspan="13"><center><strong class="style1">Faltante de Traspasos Salientes</strong></center></th>
      </tr>
      
      <tr>
        <th><strong>Tipo</strong></th>
        <th><strong>Estado</strong></th>
        <th><strong>Numero</strong></th>
        <th><strong>Fecha Documento</strong></th>
        <th><strong>Fecha Sistema</strong></th>
        <th><strong>Item</strong></th>
        <th><strong>Cantidad</strong></th>
        <th><strong>Observacion</strong></th>
        <th><strong>Tienda</strong></th>
        <th><strong>Tienda</strong></th>
        <th><strong>T Destino</strong></th>
        <th><strong>FALTANTE</strong></th>
      </tr>
      <?php
        while (odbc_fetch_row($sqlt1))
        {
          echo "<tr><td> " . odbc_result($sqlt1,"tip_doc_inv"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"estado"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"num_doc_in"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"fecha_doc"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"fecha_sistema"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"cod_item"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"cantidad"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"observacion"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"cod_bod"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"codcen"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"cod_bod_des"). "</td>";//*/
          echo "<td>Traspaso Saliente</td>";//*/  
		  //echo "<td><a href='grabar.php?idt=" . odbc_result($sqlt1,"num_doc_in") . "'><img src='imagen/Delete-icon.png' width='20px'/></a></td>";
        
        }
         ?>
  </tr>
</table>
</center>
<p>&nbsp;</p>

<p></p>
<p></p>
</body>


</html>
