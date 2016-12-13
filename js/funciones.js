/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global e, formulario */


function ValidaNumero(e) {
    alert("adsfasfafas");
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



}); 

