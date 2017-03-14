
$(document).ready((function () {
    var PracticaProfIII = {};

    (function (app) {

        app.init = function () {
            app.ListarAfiliados();
            app.ListarHorarios();
            app.ListarPais();
            app.bindings();
        };


        app.bindings = function () {
            $("#agregarPersona").on('click', function (event) {
                $("#id").val(0);
                $("#tituloModal").html("Nueva Persona");
                $("#modalPersona").modal({show: true});
            });
        };

        app.ListarAfiliados = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONAfiliado.php";
            var consola = $('#divHorario');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');

                    app.rellenarTablaAfiliado(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error');
                }
            });
        };

        app.rellenarTablaAfiliado = function (datosRecibidos) {

            var cuerpo = "";
            $nroPers = 0;
            var tbAfiliado = $('#tbcuerpoAfiliado');
            tbAfiliado.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {
                $nroPers = datosRecibidos[i].dni;
                //$fecha = datosRecibidos[i].FNac.valueOf().date.toString().substring(0, 10).replace("-", "/");

                if (datosRecibidos[i].Habilitado == 1) {
                    $estadoPers = 'NO';

                } else {

                    $estadoPers = 'SI';
                }

                cuerpo += "<tr><td>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].dni + "</td><td>" + datosRecibidos[i].nombre + "</td><td>" + datosRecibidos[i].apellido + "</td><td>" + datosRecibidos[i].mail + "</td><td>" + datosRecibidos[i].fechaNac + "</td><td>" + datosRecibidos[i].nacionalidad + "</td><td>" + datosRecibidos[i].EstCivil + "</td><td>" + datosRecibidos[i].direccion + "</td><td>" + datosRecibidos[i].telUrgencia + "</td><td>" + datosRecibidos[i].celular + "</td><td>" + datosRecibidos[i].obraSocial + "</td><td>" + $estadoPers + "<td><a href='../Funciones/ValidarOpcion.php?parametro=7&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=8&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbAfiliado.append(cuerpo);

        };
//        
        app.ListarHorarios = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONHorarios.php";
            var consola = $('#divHorario');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');

                    app.rellenarTablaHorario(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error');
                }
            });


        };

        app.rellenarTablaHorario = function (datosRecibidos) {

            var cuerpo = "";
            var tbHorario = $('#tbcuerpoHorario');
            tbHorario.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {

                if (datosRecibidos[i].Habilitado == 1) {
                    $estadoHorario = 'NO';

                } else {

                    $estadoHorario = 'SI';
                }

                cuerpo += "<tr><td hidden=''>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].descripcion + "</td><td>" + datosRecibidos[i].HorarioInicio + "</td><td>" + datosRecibidos[i].HorarioFin + "</td><td>" + $estadoHorario + "<td><a href='../Funciones/ValidarOpcion.php?parametro=4&codHorario=" + datosRecibidos[i].id + "&txtDescripcion=" + datosRecibidos[i].descripcion + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=5&codHorario=" + datosRecibidos[i].id + "&txtDescripcion=" + datosRecibidos[i].descripcion + "&estadoHorario=" + datosRecibidos[i].Habilitado + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbHorario.append(cuerpo);

        };

        app.ListarPais = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONPais.php";
            var consola = $('#divPais');
            
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');
                    
                    app.rellenarTablaPais(datosRecibidos);
                },
                error: function (e) {
                    console.log(e);
      
      
                    alert('Ha surgisdo un error');
                    


                }
            });


        };

        app.rellenarTablaPais = function (datosRecibidos) {

            var cuerpo = "";

            var tbListadoPais = $('#tbcuerpoPais');
            tbListadoPais.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {

                if (datosRecibidos[i].Habilitado == 1) {
                    $estadoPais = 'NO';

                } else {

                    $estadoPais = 'SI';
                }

                cuerpo += "<tr><td>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].descripcionPais + "</td><td>" + $estadoPais + "<td><a href='../Funciones/ValidarOpcion.php?parametro=2&codPais=" + datosRecibidos[i].codigoPais + "&txtPais=" + datosRecibidos[i].descripcionPais + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=1&codPais=" + datosRecibidos[i].codigoPais + "&txtPais=" + datosRecibidos[i].descripcionPais + "&estadoPais=" + $estadoPais + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbListadoPais.append(cuerpo);

        };

        app.limpiarModal = function () {//funcion para limpiar el modal de profesores
            $("#id").val(0);
            $("#nombre").val('');
            $("#apellido").val('');

        };
        
        app.comboProfesional = function (){
            
            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONProfesional.php";
            var consola = '';
            consola= $('#divprofesional');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');

                    app.rellenarComboProf(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgiASDdo un errore');
                }
            });
        };

        app.rellenarComboProf = function(datosRecibidos){
            var cuerpo = "";

            var comboProfesional = $('#cmbProfesional');
            comboProfesional.html('');
cuerpo="asdasd";
            for (var i = 0; i < datosRecibidos.length; i++) {

cuerpo="hola";
                //cuerpo += "<option>" + datosRecibidos[i].id + "</option>";
            }

            comboProfesional.append(cuerpo);

            
        };
        app.init();

    })(PracticaProfIII);


}));
