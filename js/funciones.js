$(document).ready(function(){
    
var url="generarJSONAfiliado.php";
$("#tablaAfiliado tbody").html("");
$.getJSON(url,function(afiliado){
$.each(afiliado, function(i,afiliado){
var newRow =
"<tr>"
+"<td>"+afiliado.id+"</td>"
+"<td>"+afiliado.dni+"</td>"
+"<td>"+afiliado.nombre+"</td>"
+"<td>"+afiliado.apellido+"</td>"
+"<td>"+afiliado.mail+"</td>"
+"<td>"+afiliado.FNac+"</td>"
+"<td>"+afiliado.nacionalidad+"</td>"
+"<td>"+afiliado.EstCivil+"</td>"
+"<td>"+afiliado.direccion+"</td>"
+"<td>"+afiliado.telUrgencia+"</td>"
+"<td>"+afiliado.celular+"</td>"
+"<td>"+afiliado.oSocial+"</td>"
+"<td>"+afiliado.habilitado+"</td>"
+"</tr>";
$(newRow).appendTo("#tablaAfiliado tbody");
});
});
});







/* 
 function ValidaNumero(e) {
 
 var tecla = (formulario.all) ? e.keyCode : e.which;
 if (tecla == 8)
 return true;
 var patron = /[0-9\s]/;
 var te = String.fromCharCode(tecla);
 return patron.test(te);
 
 }
 
 
 
 
 $(function () {
 
 var PracticaProfesionalIII = {};
 
 (function (app) {
 
 app.init = function () {
 alert("Empece Init");
 app.bindings();
 };
 
 app.bindings = function () {
 alert("Empece Bindings");
 app.llamadas();
 };
 
 $("#txtnombre").keyup(ValidaNumero(event)
 
 
 
 );
 app.init();
 alert("Termino el programo");
 
 })(PracticaProfesionalIII);
 
 
 
 }); */

