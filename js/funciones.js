

$(document).ready((function () {
    var PracticaProfIII = {};
$("#calendar").fullCalendar({
        // Las opciones van aquí
    });

    (function (app) {

        app.init = function () {
            app.ListarAfiliados();
            app.ListarMedicos();
            app.ListarHorarios();
            app.comboProfesional();
            app.ListarPais();
            //app.MostrarAgenda();

        };

      


        
        
        $("#MostrarAgenda").click(function () {

            var url = "http://localhost/PracticaProfesionalIII/js/ListarAgendaPorProfesional.php?idProf=22334455";
            var consola = $('#divAgendaProf');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",              
                beforeSend: function () {
                    consola.html('Espere por favor...');                    
                },
                success: function (datosRecibidos) {
                    consola.html('');
                    console.log(datosRecibidos);                    
                    app.rellenarTablaAgenda(datosRecibidos);
                },
                
                error: function (jqXHR, textStatus,datosRecibidos) {
                    console.log(datosRecibidos);
                    if (jqXHR.status === 0) {

                        alert('Not connect: Verify Network.');

                    } else if (jqXHR.status == 404) {

                        alert('Requested page not found [404]');

                    } else if (jqXHR.status == 500) {

                        alert('Internal Server Error [500].');

                    } else if (textStatus === 'parsererror') {

                        alert('Requested JSON parse failed.');

                    } else if (textStatus === 'timeout') {

                        alert('Time out error.');

                    } else if (textStatus === 'abort') {

                        alert('Ajax request aborted.');

                    } else {

                        alert('Uncaught Error: ' + jqXHR.responseText);

                    }
                    
                }
            });
        });

        app.rellenarTablaAgenda = function (datosRecibidos) {

            var cuerpoAgenda = "";
            $estadoTurno = false;
            var tbAgenda = $('#tbcuerpoAgenda');

            for (var i = 0; i < datosRecibidos.length; i++) {

                if (datosRecibidos[i].estadoTurno == 1) {
                    $estadoTurno = 'NO';

                } else {

                    $estadoTurno = 'SI';
                }

                cuerpoAgenda += "<tr><td>" + datosRecibidos[i].nombrePaciente + "</td></tr>";
            }

            tbAgenda.append(cuerpoAgenda);

        };

        app.ListarAfiliados = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONAfiliado.php";
            var consola = $('#divAfiliado');
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

                    alert('Ha surgido un error Afiliado');
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

         app.ListarMedicos = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONMedico.php";
            var consola = $('#divMedico');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');

                    app.rellenarTablaMedico(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error Medico');
                }
            });
        };

        app.rellenarTablaMedico = function (datosRecibidos) {

            var cuerpo = "";
            $nroPers = 0;
            var tbMedico = $('#tbcuerpoMedico');
            tbMedico.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {
                $nroPers = datosRecibidos[i].dni;
                //$fecha = datosRecibidos[i].FNac.valueOf().date.toString().substring(0, 10).replace("-", "/");

                if (datosRecibidos[i].Habilitado == 1) {
                    $estadoPers = 'NO';

                } else {

                    $estadoPers = 'SI';
                }

                cuerpo += "<tr><td>" + datosRecibidos[i].id  +  "</td><td>" + datosRecibidos[i].matricula+ "</td><td>" + datosRecibidos[i].dni  + "</td><td>" + datosRecibidos[i].nombre + "</td><td>" + datosRecibidos[i].apellido + "</td><td>" + datosRecibidos[i].mail + "</td><td>" + datosRecibidos[i].fechaNac + "</td><td>" + datosRecibidos[i].nacionalidad + "</td><td>" + datosRecibidos[i].EstCivil + "</td><td>" + datosRecibidos[i].direccion + "</td><td>"  + datosRecibidos[i].localidad + "</td><td>" + datosRecibidos[i].provincia + "</td><td>" + datosRecibidos[i].telUrgencia + "</td><td>" + datosRecibidos[i].celular + "</td><td>" + datosRecibidos[i].especialidad +"</td><td>" + datosRecibidos[i].orientacion + "</td><td>" + $estadoPers + "<td><a href='../Funciones/ValidarOpcion.php?parametro=7&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=8&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbMedico.append(cuerpo);

        };

        
        
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

                    alert('Ha surgido un error Horario');
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

        app.comboProfesional = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONProfesional.php";

            divProf = $('#divprofesional select');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                    divProf.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    divProf.html('');
                    app.rellenarComboProf(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error Profesional');
                }
            });
        };

        app.rellenarComboProf = function (datosRecibidos) {
            var cuerpo = "";

            var comboProfesional = $('#cmbProfesional');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].Matricula + ">" + datosRecibidos[i].Nombre + ', ' + datosRecibidos[i].Apellido + "</option>";

            }

            comboProfesional.append(cuerpo);

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
                error: function () {

                    alert('Ha surgido un error Pais');
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
                
                cuerpo += "<tr><td  hidden=''>" + datosRecibidos[i].Codigo + "</td><td>" + datosRecibidos[i].Descripcion + "</td><td>" + $estadoPais + "<td><a href='../Funciones/ValidarOpcion.php?parametro=2&codPais=" + datosRecibidos[i].Codigo + "&txtPais=" + datosRecibidos[i].Descripcion + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=1&codPais=" + datosRecibidos[i].Codigo + "&txtPais=" + datosRecibidos[i].Descripcion + "&estadoPais=" + $estadoPais + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbListadoPais.append(cuerpo);

        };

        app.MostrarAgenda = function () {


        };

        app.init();

    })(PracticaProfIII);



}));
