
$(document).ready((function () {

    var PracticaProfIII = {};
    var seleccion = new Date();
    (function (app) {

        app.init = function () {
            app.ListarAfiliados();
            app.ListarMedicos();
            app.ListarHorarios();
            app.comboEspecialidad();

            app.comboNacionalidad();
            app.ListarPais();
            app.ListarTurnosAsignados();


        };


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
                    $estadoPers = 'No';

                } else {

                    $estadoPers = 'Si';
                }

                cuerpo += "<tr><td>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].dni + "</td><td>" + datosRecibidos[i].nombre + "</td><td>" + datosRecibidos[i].apellido + "</td><td>" + datosRecibidos[i].mail + "</td><td>" + datosRecibidos[i].fechaNac + "</td><td>" + datosRecibidos[i].nacionalidad + "</td><td>" + datosRecibidos[i].provincia + "</td><td>" + datosRecibidos[i].localidad +"</td><td>" + datosRecibidos[i].EstCivil + "</td><td>" + datosRecibidos[i].direccion + "</td><td>" + datosRecibidos[i].telUrgencia + "</td><td>" + datosRecibidos[i].celular + "</td><td>" + datosRecibidos[i].obraSocial + "</td><td>" + $estadoPers + "<td><a href='../Funciones/ValidarOpcion.php?parametro=7&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=8&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
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
                    $estadoPers = 'No';

                } else {

                    $estadoPers = 'Si';
                }

                cuerpo += "<tr><td>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].matricula + "</td><td>" + datosRecibidos[i].dni + "</td><td>" + datosRecibidos[i].nombre + "</td><td>" + datosRecibidos[i].apellido + "</td><td>" + datosRecibidos[i].mail + "</td><td>" + datosRecibidos[i].fechaNac + "</td><td>" + datosRecibidos[i].nacionalidad + "</td><td>" + datosRecibidos[i].EstCivil + "</td><td>" + datosRecibidos[i].direccion + "</td><td>" + datosRecibidos[i].localidad + "</td><td>" + datosRecibidos[i].provincia + "</td><td>" + datosRecibidos[i].telUrgencia + "</td><td>" + datosRecibidos[i].celular + "</td><td>" + datosRecibidos[i].especialidad + "</td><td>" + datosRecibidos[i].orientacion + "</td><td>" + $estadoPers + "<td><a href='../Funciones/ValidarOpcion.php?parametro=10&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=11&dniAfiliado=" + $nroPers + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
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
                    $estadoHorario = 'No';

                } else {

                    $estadoHorario = 'Si';
                }

                cuerpo += "<tr><td hidden=''>" + datosRecibidos[i].id + "</td><td>" + datosRecibidos[i].descripcion + "</td><td>" + datosRecibidos[i].HorarioInicio + "</td><td>" + datosRecibidos[i].HorarioFin + "</td><td>" + $estadoHorario + "<td><a href='../Funciones/ValidarOpcion.php?parametro=4&codHorario=" + datosRecibidos[i].id + "&txtDescripcion=" + datosRecibidos[i].descripcion + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=5&codHorario=" + datosRecibidos[i].id + "&txtDescripcion=" + datosRecibidos[i].descripcion + "&estadoHorario=" + datosRecibidos[i].Habilitado + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbHorario.append(cuerpo);

        };

        app.comboEspecialidad = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONEspecialidad.php";

            divEsp = $('#divespecialidad select');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                    divEsp.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    divEsp.html('');
                    app.rellenarComboEspecialidad(datosRecibidos);

                },
                error: function () {

                    alert('Ha surgido un error Profesional');
                }
            });
        };

        app.rellenarComboEspecialidad = function (datosRecibidos) {
            var cuerpo = "<option value=0 > Seleccione una valor </option>";

            var comboEspecialidad = $('#cmbEspecialidad');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].NroEspecialidad + ">" + datosRecibidos[i].DescEsp + ', ' + datosRecibidos[i].DescOrientacion + "</option>";

            }

            comboEspecialidad.append(cuerpo);

        };

        $("#cmbEspecialidad").change(function () {
            $('#divAgenda').fullCalendar('removeEvents');
            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONProfesional.php?parametro=" + $("#cmbEspecialidad").val();

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
        });

        $("#cmbProfesional").change(function () {
            var divFecha = $('#divFechaRango');
            var cuerpoFecha;
            cuerpoFecha = "<h4>Fecha Desde: </h4> <input  type='date' id ='fechaDesde'>";
            cuerpoFecha += "<h4>Fecha Desde: </h4> <input  type='date' id ='fechahasta'>";
            divFecha.append(cuerpoFecha);

        });

        $("#MostrarTurnosLibres").click(function () {
            $('#divAgenda').fullCalendar("refetchEvents");
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var esp = $('#cmbEspecialidad').val();
            var prof = $('#cmbProfesional').val();

            $('#divAgenda').fullCalendar({
                //configure options for the calendar 

                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: {
                    url: "http://localhost/PracticaProfesionalIII/js/reservas.php?esp=" + esp + " & prof=" + prof + "",
                    allDay: false

                },
                dayClick: function (date, allDay, jsEvent, view) {
                    var fecha = new Date();
                    var esp = $('#cmbEspecialidad').val();
                    var prof = $('#cmbProfesional').val();

                    seleccion = date.format("DD/MM/YYYY");

                    if (date < fecha) {
                        //TRUE Clicked date smaller than today + daysToadd
                        alert("No se puede seleccionar un dia pasado");
                    }
                    else
                    {
                        //FLASE Clicked date larger than today + daysToadd          

                        document.location.href = "http://localhost/PracticaProfesionalIII/GestorEventos/addEvent.php?afiliado=" + 1 + "& fecha=" + seleccion + " & esp=" + esp + " & prof=" + prof + "";

                    }

                },
                buttonText: {
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Dia'
                },
                editable: true,
                defaultView: 'month',
                allDaySlot: false,
                titleFormat: 'MMMM',
                timeFormat: 'HH:mm.a',
                slotDuration: '00:30:00',
                slotEventOverlap: false,
                hiddenDays: [0, 6],
                views: {
                    month: {
                        // Monday, Wednesday, etc 

                        week: 'ddd D',
                        day: 'dddd D' // Monday 9/7 


                    }

                },
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sbado'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
                minTime: "08:00",
                maxTime: '20:00',
                contentHeight: 525

            });

        });

        $("#MostrarHorariosLibres").click(function () {
            var parametroF = $("#fecha").val();
            alert("asd" + parametroF);

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONHorariosTurno.php?parametroF=" + parametroF;

            divparametroH = $('#divHorario');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                    divparametroH.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    divparametroH.html("");
                    app.rellenarComboHorario(datosRecibidos);

                },
                error: function () {

                    alert('Ha surgido un error Horarios');
                }
            });

        });


        app.rellenarTablaTurnos = function (datosRecibidos) {

            var cuerpo = "";

            var tbListadoTurno = $('#tbcuerpoTurno');
            tbListadoTurno.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {

                if (datosRecibidos[i].Habilitado == 1) {
                    $estadoTurno = 'false';

                } else {

                    $estadoTurno = 'true';
                }

                cuerpo += "<tr><td  hidden=''>" + datosRecibidos[i].idAgenda + "</td><td>" + datosRecibidos[i].Descripcion + "</td><td>" + datosRecibidos[i].horarioI + "</td><td>" + datosRecibidos[i].dniPaciente + "</td><td>" + datosRecibidos[i].nombrePaciente + "</td><td>" + $estadoPais + "<td><a href='../Funciones/ValidarOpcion.php?parametro=2&codPais=" + datosRecibidos[i].Codigo + "&txtPais=" + datosRecibidos[i].Descripcion + "'><span class='glyphicon glyphicon-trash'></span></td><td><a href='../Funciones/ValidarOpcion.php?parametro=1&codPais=" + datosRecibidos[i].Codigo + "&txtPais=" + datosRecibidos[i].Descripcion + "&estadoPais=" + $estadoPais + "'><span class='glyphicon glyphicon-pencil'></span></a></td></tr>";
            }

            tbListadoTurno.append(cuerpo);

        };

        app.rellenarComboProf = function (datosRecibidos) {
            var cuerpo = "<option value=0 > Seleccione una valor </option>";

            var comboProfesional = $('#cmbProfesional');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].Matricula + ">" + datosRecibidos[i].Nombre + ', ' + datosRecibidos[i].Apellido + "</option>";

            }


            comboProfesional.append(cuerpo);


        };

        app.ListarHorario = function (fecha) {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONHorariosTurno.php?fecha=" + fecha + "";

            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                },
                success: function (datosRecibidos) {

                    app.rellenarComboHorario(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error Horarios');
                }
            });


        };

        app.rellenarComboHorario = function (datosRecibidos) {

            var cuerpo = "<select id='cmbHorario'><option value=0> Seleccione una valor </option>";
            var comboHorario = $('#divHorario');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].id + ">" + datosRecibidos[i].hora + "</option>";

            }
            cuerpo += "</select>";

            comboHorario.append(cuerpo);

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

        $("#generarTurno").click(function () {
            var parametroIA = $("#txtIdAfiliado").val();
            var parametroNA = $('#txtNombreAfiliado').val();
            var parametroAA = $('#txtApellidoAfiliado').val();
            var parametroNP = $('#profesional').val();
            var parametroAP = $('#txtApellidoProfesional').val();
            var parametroE = $('#especialidad').val();
            var parametroF = $('#fecha').val();
            var parametroMP = $("#matricula").val();
            var parametroH = $("#cmbHorario").val();

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONAltaTurno.php?parametroNA=" + parametroNA + "& parametroAA=" + parametroAA + " & parametroNP=" + parametroNP +
                    " & parametroAP=" + parametroAP + " & parametroE=" + parametroE + " & parametroF=" + parametroF + " & parametroH=" + parametroH + " & parametroMP= " + parametroMP + "";

            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON"


            });
            finestraSecundaria("http://localhost/PracticaProfesionalIII/pdf/generarTurno.php?parametroNA=" + parametroNA + "& parametroAA=" + parametroAA + " & parametroNP=" + parametroNP +
                    " & parametroAP=" + parametroAP + " & parametroE=" + parametroE + " & parametroF=" + parametroF + " & parametroH=" + parametroH + " & parametroMP= " + parametroMP + "& parametroIA = " + parametroIA + "");
            document.location.href = "http://localhost/PracticaProfesionalIII/Vista/AdministrarTurno.php";
        });

        app.ListarTurnosAsignados = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONturnosAsignados.php?afiliado=1";
            var consola = $('#divturnosAsignado');

            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {
                    consola.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    consola.html('');

                    app.rellenarTablaTurnosAsignados(datosRecibidos);
                },
                error: function () {

                    alert('Ha surgido un error Turnos Asignados');
                }
            });


        };

        app.rellenarTablaTurnosAsignados = function (datosRecibidos) {

            var cuerpo = "";
            var tbcuerpoturnosAsignados = $('#tbcuerpoturnosAsignados');
            tbcuerpoturnosAsignados.html('');

            for (var i = 0; i < datosRecibidos.length; i++) {
                if (datosRecibidos[i].habilitado == 1) {
                    $estadoTurno = 'No Vigente';

                } else {

                    $estadoTurno = 'Vigente';
                }
                cuerpo += "<tr><td>" + datosRecibidos[i].nroTurno + "</td><td>" + datosRecibidos[i].nombreA + "</td><td>" +
                        datosRecibidos[i].apellidoA + "</td><td>" + datosRecibidos[i].especialidad + "</td><td>" + datosRecibidos[i].nombreM + "</td><td>" +
                        datosRecibidos[i].apellidoM + "</td><td>" + datosRecibidos[i].start + "</td><td>" + $estadoTurno + "</td><td><a href='../Funciones/ValidarOpcion.php?parametro=12&codTurno=" + datosRecibidos[i].nroTurno + "'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
            }

            tbcuerpoturnosAsignados.append(cuerpo);

        };

        function finestraSecundaria(url) {
            window.open(url, "Turno Generado", "width=300, height=200");
        }


//MODIFICAR HORARIOS
        $("#ModificarHorarios").click(function () {
            var parametroCHorario = $("#fecha");
            var parametroNHorario = $("#fecha").val();
            var parametroCHorario = $("#fecha").val();

            divparametroH = $('#divModHorario');


        });


        app.comboNacionalidad = function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONNacionalidad.php";

            divNac = $('#divnacionalidad select');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                    divNac.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    divNac.html('');
                    app.rellenarComboNacionalidad(datosRecibidos);

                },
                error: function () {

                    alert('Ha surgido un error Pais');
                }
            });
        };

        app.rellenarComboNacionalidad = function (datosRecibidos) {
            var cuerpo = "<option value=0 > Seleccione una valor </option>";

            var comboNacionalidad = $('#cmbNacionalidad');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].codigoPais + ">" + datosRecibidos[i].descripcionPais + "</option>";

            }

            comboNacionalidad.append(cuerpo);

        };

        $("#cmbNacionalidad").change(function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONProvincia.php?parametro=" + $("#cmbNacionalidad").val();

            divProv = $('#divprovincia select');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                    divProv.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    divProv.html('');
                    app.rellenarComboProv(datosRecibidos);

                },
                error: function () {

                    alert('Ha surgido un error Listado de Provincia');
                }
            });
        });

        app.rellenarComboProv = function (datosRecibidos) {
            var cuerpo = "<option value=0 > Seleccione una valor </option>";

            var comboProvincia = $('#cmbProvincia');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].codigoProvincia + ">" + datosRecibidos[i].descripcion + "</option>";

            }


            comboProvincia.append(cuerpo);


        };


        $("#cmbProvincia").change(function () {

            var url = "http://localhost/PracticaProfesionalIII/js/generarJSONLocalidad.php?parametro=" + $("#cmbProvincia").val();

            divLoc = $('#divlocalidad select');
            $.ajax({
                url: url,
                type: "POST",
                dataType: "JSON",
                beforeSend: function () {

                    divLoc.html('Espere por favor...');
                },
                success: function (datosRecibidos) {
                    divLoc.html('');
                    app.rellenarComboLoc(datosRecibidos);

                },
                error: function () {

                    alert('Ha surgido un error Listado de Localidad');
                }
            });
        });

        app.rellenarComboLoc = function (datosRecibidos) {
            var cuerpo = "<option value=0 > Seleccione una valor </option>";

            var comboLocalidad = $('#cmbLocalidad');

            for (var i = 0; i < datosRecibidos.length; i++) {

                cuerpo += "<option value=" + datosRecibidos[i].codigoLocalidad + ">" + datosRecibidos[i].descripcion + "</option>";

            }


            comboLocalidad.append(cuerpo);


        };



        app.init();

    })(PracticaProfIII);

}));
