                            <?php include_once('conex.php'); ?>
           
			<?php require_once('encabezado.php'); //es obligatorio ?>
            
           
            <?php
if (isset($_POST['consultar']))
{
    error_reporting(E_ERROR);
    $replica=$_POST['repli'];
    $fecha=$_POST['fecha'];
    $tienda=$_POST['tienda'];
    
$sql1=odbc_exec($conexion,"select NUMERO from TBBCO_DOC_BCO where numero = '$replica' order by numero");
$sql2=odbc_exec($conexion,"select tcab_secu from TBCON_TdetTRAN  where tcab_secu like '$replica' order by tcab_secu desc");
$sql3=odbc_exec($conexion,"select tcab_secu from TBCON_TCABTRAN where tcab_secu like '$replica'  order by tcab_secu");
$sql4=odbc_exec($conexion,"select num_doc_in from detalle_doc_inv where tip_doc_inv='FA2' and num_doc_in like '$replica' order by num_doc_in desc");
$sql5=odbc_exec($conexion,"select num_doc_in from docum_invent where tip_doc_inv='FA2' and num_doc_in like '$replica' order by num_doc_in");
$sql6=odbc_exec($conexion,"select num_doc_ve from doc_pagos where tip_doc_ven='FA2' and num_doc_ve like '$replica' order by num_doc_ve");
$sql7=odbc_exec($conexion,"select num_doc_ve from detalle_doc_vtas where tip_doc_ven='FA2' and num_doc_ve like '$replica' order by num_doc_ve desc");
$sql8=odbc_exec($conexion,"select num_doc_ve from docum_vtas where tip_doc_ven='FA2' and num_doc_ve like '$replica' order by num_doc_ve");
//////////////      
      /*$sqld1=odbc_exec($conexion,"delete from TBBCO_DOC_BCO  where numero = '$replica'"); 
      $sqld2=odbc_exec($conexion,"delete from TBCON_TdetTRAN  where tcab_secu like '$replica'");
      $sqld3=odbc_exec($conexion,"delete from TBCON_TCABTRAN where tcab_secu like '$replica'"); 
      $sqld4=odbc_exec($conexion,"delete from detalle_doc_inv where tip_doc_inv='FA2' and num_doc_in like '$replica'");
      $sqld5=odbc_exec($conexion,"delete from docum_invent where tip_doc_inv='FA2' and num_doc_in like '$replica'");
      $sqld6=odbc_exec($conexion,"delete from doc_pagos where tip_doc_ven='FA2' and num_doc_ve like '$replica'");
      $sqld7=odbc_exec($conexion,"delete from detalle_doc_vtas where tip_doc_ven='FA2' and num_doc_ve like '$replica'");
      $sqld8=odbc_exec($conexion,"delete from docum_vtas where tip_doc_ven='FA2' and num_doc_ve like '$replica'");*/
////////////////////////////
    
$sqlt1=odbc_exec($conexion,"select tip_doc_ven, num_doc_ve, fecha_doc from docum_vtas where tip_doc_ven='NC3'  and fecha_doc like '$fecha%' and cod_suc='$tienda'");
//borrar
/*select * from doc_pagos where tip_doc_ven='nc3' and num_doc_ve in ('3000175')
select * from detalle_doc_vtas where tip_doc_ven='NC3' and num_doc_ve in ('3000175') order by num_doc_ve*/
// vales
//buscar x fechas, cambiar cod tienda
$sqlt2=odbc_exec($conexion,"select tip_doc_inv, num_doc_in, fecha_doc from docum_invent where tip_doc_inv='val' and fecha_doc like '$fecha%' and cod_bod='$tienda' order by fecha_doc");
//borrar
//select * from detalle_doc_inv where tip_doc_inv='val' and num_doc_in in('16000874')
//traspasos
$sqlt3=odbc_exec($conexion,"select tip_doc_inv, num_doc_in, fecha_doc, cod_bod, codcen, cod_bod_des from docum_invent where tip_doc_inv like'T%' and fecha_doc like '$fecha%' and cod_bod='$tienda'");
/*select * from docum_invent where num_doc_in in ('3000297')
select * from detalle_doc_inv where tip_doc_inv like'T%' and num_doc_in in ('12001930')*/
      
?>
            
			<!--<div > -->
<table >
  <tr>
    <!--<td>
      <div align="center"><span class="style1"></span>
      </div>-->
      
      <table width="100%" height="100%" border="2">
      <tr>
          <td id="titulo" colspan="31"><center><strong class="style1">PRUEBAS  </strong></center></td>
      </tr>
      
      <tr>
        <td><strong></strong></td>
        
      </tr>
      <?php
        
        while (odbc_fetch_row($sql1))
        {
	  echo "<tr><td> 1" . odbc_result($sql1,"NUMERO"). "</td>";//
        }
        while (odbc_fetch_row($sql2))
        {
	  echo "<tr><td> 2" . odbc_result($sql2,"tcab_secu"). "</td>";//
        }
        while (odbc_fetch_row($sql3))
        {
	  echo "<tr><td> 3" . odbc_result($sql3,"tcab_secu"). "</td>";//
        }
        while (odbc_fetch_row($sql4))
        {
	  echo "<tr><td> 4" . odbc_result($sql4,"num_doc_in"). "</td>";//
        }
        while (odbc_fetch_row($sql5))
        {
	  echo "<tr><td> 5" . odbc_result($sql5,"num_doc_in"). "</td>";//
        }
        while (odbc_fetch_row($sql6))
        {
	  echo "<tr><td> 6"  . odbc_result($sql6,"num_doc_ve"). "</td>";//
        }
        while (odbc_fetch_row($sql7))
        {
	  echo "<tr><td> 7" . odbc_result($sql7,"num_doc_ve"). "</td>";//
        }
        while (odbc_fetch_row($sql8))
        {
	  echo "<tr><td> 8" . odbc_result($sql8,"num_doc_ve"). "</td>";//
        }
         
         if(odbc_result($sql1,"NUMERO")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 1</td></tr>";//,
          }
          if(odbc_result($sql2,"tcab_secu")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 2</td></tr>";//,
          }
          if(odbc_result($sql3,"tcab_secu")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 3</td></tr>";//,
          }
          if(odbc_result($sql4,"num_doc_in")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 4</td></tr>";//,
          }
          if(odbc_result($sql5,"num_doc_in")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 5</td></tr>";//,
          }
          if(odbc_result($sql6,"num_doc_ve")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 6</td></tr>";//,
          }
          if(odbc_result($sql7,"num_doc_ve")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 7</td></tr>";//,
          }
          if(odbc_result($sql8,"num_doc_ve")==Null) {
          echo "<tr><td>Datos No existen en la base de datos 8</td></tr>";//,
          }
          echo "<tr><td>La informacion a sido eliminada.</td></tr>";//,
          ////////////////////
          while (odbc_fetch_row($sqlt1)) 
        {
	  echo "<tr><td> " . odbc_result($sqlt1,"tip_doc_ven"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"num_doc_ve"). "</td>";//
          echo "<td>" . odbc_result($sqlt1,"fecha_doc"). "</td>";//
        }
        while (odbc_fetch_row($sqlt2))
        {
	  echo "<tr><td> " . odbc_result($sqlt2,"tip_doc_inv"). "</td>";//
          echo "<td>" . odbc_result($sqlt2,"num_doc_in"). "</td>";//
          echo "<td>" . odbc_result($sqlt2,"fecha_doc"). "</td>";//
        }
        while (odbc_fetch_row($sqlt3))
        {
	  echo "<tr><td> " . odbc_result($sqlt3,"tip_doc_inv"). "</td>";//
          echo "<td>" . odbc_result($sqlt3,"num_doc_in"). "</td>";//
          echo "<td>" . odbc_result($sqlt3,"fecha_doc"). "</td>";//
          echo "<td>" . odbc_result($sqlt3,"cod_bod"). "</td>";//
          echo "<td>" . odbc_result($sqlt3,"codcen"). "</td>";//
          echo "<td>" . odbc_result($sqlt3,"cod_bod_des"). "</td>";//
        }
         ?>
  </tr>
</table>


<!--</div> -->
        <?php } 
