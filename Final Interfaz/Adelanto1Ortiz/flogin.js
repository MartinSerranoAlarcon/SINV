var cont = 3;
function validate(){
var username = document.getElementById("usuario").value;
var password = document.getElementById("contra").value;

if ( username === "admin" && password === "admin"){
window.location = "Administrador.html"; 
return false;
}
if ( username === "bodega" && password === "bodega"){
window.location = "Bodega.html"; 
return false;
}
if ( username === "secre" && password === "secre"){
window.location = "Secretaria.html"; 
return false;
}
if ( username === "ofi" && password === "ofi"){
window.location = "Oficina.html"; 
return false;
}
if ( username === "mante" && password === "mante"){
window.location = "Manteleria.html"; 
return false;
}
if(cont==0){
alert("Se ha superado el maximo de intentos de ingreso!");
window.close();
}
else{
cont=cont-1;
alert("Usuario/Contraseña Incorrectos, quedan "+cont+" intentos.");
}
}