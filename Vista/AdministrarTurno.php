<?php
session_start();

if ($_SESSION['login_user'] == '') {
    header("Location: http://localhost/PracticaProfesionalIII/index.php");
}
?>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../css/jquery.min.js"></script>
        <script src="../css/bootstrap.min.js"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>    
        <script src="../js/libs/jquery/jquery.js" type="text/javascript"></script>
        <script src="../Funciones/Validaciones.js"></script>
        <script src="../Funciones/Funciones.php"></script>
        <script src="../js/funciones.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../css/demo.css">
        <link rel="stylesheet" href="../css/footer-distributed-with-address-and-phones.css">
    </head>
    <body>

        <div class="panel panel-primary">
            <div class="panel-heading"> <b>Gestion de Turno</b> </div>

            <form class="form-inline" accept-charset="UTF-8">
                <div class="panel-body">

                    <div class="panel panel-default" align="center" style="overflow-x:auto;">


                        <div class="panel-heading">
                            <h3>Busqueda por Profesional</h3>
                        </div>

                        <div id="divprofesional">
                            Seleccione profesional:
                            <select id="cmbProfesional"></select>

                            <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=6">Mostrar Agenda</a></button>
                        </div>

                        <div class="panel-heading">
                            <h3>Agenda</h3>
                        </div>

                        <div id="boxSchedule">
                            <div  style="display: ">

                                <input type="date" rel="1" rev="dd/mm/yy">


                                <span class="float_right t10">
                                    <a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionSchedulePrint&amp;date=2017-3-16&amp;calendar_id=" target="_blank">Print</a> |
                                    <a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionSchedule" data-iso="2017-03-11" class="schedule_get">Prev 5 days</a> |
                                    <a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionSchedule" data-iso="2017-03-21" class="schedule_get">Next 5 days</a>
                                </span>

                            </div>

                            <table cellpadding="0" cellspacing="0" class="table table-fixed" style="font-size: 11">
                                <thead>
                                    <tr>
                                        <th >&nbsp;</th>
                                        <th class="schedule_date">16/03/2017<br>Thursday</th>
                                        <th>17/03/2017<br>Friday</th>
                                        <th>18/03/2017<br>Saturday (Day off)</th>
                                        <th>19/03/2017<br>Sunday (Day off)</th>
                                        <th>20/03/2017<br>Monday</th>		
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>08:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489651200&amp;end_ts=1489654800" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489737600&amp;end_ts=1489741200" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1489996800&amp;end_ts=1490000400" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr class="">
                                        <td>09:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489654800&amp;end_ts=1489658400" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489741200&amp;end_ts=1489744800" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490000400&amp;end_ts=1490004000" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr class="">
                                        <td>10:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489658400&amp;end_ts=1489662000" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489744800&amp;end_ts=1489748400" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490004000&amp;end_ts=1490007600" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr class="">
                                        <td>11:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489662000&amp;end_ts=1489665600" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489748400&amp;end_ts=1489752000" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490007600&amp;end_ts=1490011200" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr class="">
                                        <td>12:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489665600&amp;end_ts=1489669200" class="pj-table-icon-add"></a></td><td class="available"><div class="b5">Sopoline Campos<br><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionUpdate&amp;id=1">12:00 - 13:00</a><br>Calendar 1</div></td><td class="schedule_dayoff"><div class="b5">Rhoda Doyle<br><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionUpdate&amp;id=5">12:00 - 13:00</a><br>Calendar 2</div></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490011200&amp;end_ts=1490014800" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr class="">
                                        <td>13:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489669200&amp;end_ts=1489672800" class="pj-table-icon-add"></a></td><td class="available"><div class="b5">Sopoline Campos<br><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionUpdate&amp;id=1">13:00 - 14:00</a><br>Calendar 1</div></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490014800&amp;end_ts=1490018400" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr>
                                        <td>14:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489672800&amp;end_ts=1489676400" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489759200&amp;end_ts=1489762800" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490018400&amp;end_ts=1490022000" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr>
                                        <td>15:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489676400&amp;end_ts=1489680000" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489762800&amp;end_ts=1489766400" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490022000&amp;end_ts=1490025600" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr>
                                        <td>16:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489680000&amp;end_ts=1489683600" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489766400&amp;end_ts=1489770000" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490025600&amp;end_ts=1490029200" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr>
                                        <td>17:00</td>
                                        <td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=16/03/2017&amp;start_ts=1489683600&amp;end_ts=1489687200" class="pj-table-icon-add"></a></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489770000&amp;end_ts=1489773600" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490029200&amp;end_ts=1490032800" class="pj-table-icon-add"></a></td>		</tr>
                                    <tr>
                                        <td>18:00</td>
                                        <td class="available"><div class="b5">Lenore English<br><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionUpdate&amp;id=3">18:00 - 19:00</a><br>Calendar 1</div></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=17/03/2017&amp;start_ts=1489773600&amp;end_ts=1489777200" class="pj-table-icon-add"></a></td><td class="schedule_dayoff"></td><td class="schedule_dayoff"></td><td class="available"><a href="/1489677387_925/index.php?controller=pjAdminBookings&amp;action=pjActionCreate&amp;date=20/03/2017&amp;start_ts=1490032800&amp;end_ts=1490036400" class="pj-table-icon-add"></a></td>		</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


            </form>
            <div class="row-md-1" align="center" style="margin-top: 10px;">


                <button class="btn btn-default" style="margin-left: 10px;"><a href="../Funciones/ValidarOpcion.php?parametro=6">Agregar Turno</a></button>

                <button class="btn btn-danger" style="margin-left: 10px;"><a href="Inicio_usuario.php">Volver Menu</a></button>
            </div>


            <footer class="footer-distributed">

                <div class="footer-left">

                    <h3> <img src="../Imagenes/reserva_ya.JPG" width="100px"> </h3>

                    <p class="footer-links">
                        <a href="">Home</a>
                        ·
                        <a href="index.php">Personal</a>					
                        ·
                        <a href="#">About</a>
                        ·
                        <a href="#">Faq</a>
                        ·
                        <a href="#">Contact</a>
                    </p>

                    <p class="footer-company-name">RESERVAYA Todos los derechos reservados. Tèrminos y condiciones @ 2016</p>
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Sin numero</span> Mendoza, Argentina</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>0261-156406854</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:tobares.cristian@gmail.com">tobares.cristian@gmail.com</a></p>
                    </div>

                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>About the company</span>
                        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>

                    <div class="footer-icons">

                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>

                    </div>

                </div>

            </footer>
        </div>

    </body>
</html>

