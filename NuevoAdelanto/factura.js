
window.addEventListener("keydown",agregar);

function agregar(e){
	valor=e.keyCode;
	if(valor===9){
		agregarFila(4);
	} 
}

var j=4;

var mat=new Array(3);
mat=['cant','desc','precio','valor'];
function agregarFila(colCount){

         var table = document.getElementById('dataTable');
         var rowCount = table.rows.length;
         var row = table.insertRow(rowCount);  
         for(var i=0; i<colCount; i++){
			 var identificacion=mat[i]+j;
             var x=row.insertCell(i);
			 x.innerHTML="<input type='text' id="+document.write(identificacion)+" class='inputstyle'>";
          }
		j++;
}

