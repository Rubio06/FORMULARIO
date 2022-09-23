<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="estilos.css">

</head>

<h1>hola</h1>
<h2>pipipi</h2>




<body class="body-general" id="body-general">

    <div class="menu">
        <h1 class="titulo">EGRESO DE CAJA</h1>

        <br>
        <br>
        <br>

        <div class="flex1">
            <button class="registrar">REGISTRAR</button>
            <p class="fecha">Fecha de registro</p>

            <input class="hora" disabled type="date" id="fecha" placeholder="fecha" value="<?php 
                    date_default_timezone_set('America/Lima');
                    $fecha_actual = date("Y-m-d");
                    echo $fecha_actual?>">
        </div>


        <br>
        <br>



        <div class="concepto">
            <label for="" class="con">CONCEPTO</label>
            <select name="" id="concepto" class="select-principal" onchange="ocultar()">
                <option value="">LIQUIDACION</option>
                <option value="">GASTOS / DEPOSITOS</option>
                <option value="">LIQUIDACION MOTORIZADO</option>
                <option value="">SUELDO / BONO / COMISION / LIQUIDACIONES DE PERSONAL / ADELANTO</option>
            </select>
        </div>
        <br>


    </div>

    <form class="container1" id="contenedor1" style="display:none">


        <br>


        <!--  FORMULARIO 1 -->

        <div class="form-general" id=formulario-1>

            <div class="monto">

                <div class="monto1" id="monto1">
                    <label for="" id="lbldeposito">Fecha DEPOSITO</label>
                    <input type="date" class="deposito" id="deposito">
                </div>
                <br>


                <div class="monto2" id="gene-monto">
                    <label for="" id="lblmonto">MONTO</label>
                    <input type="text" class="monto-form" id="monto-form">
                </div>
                <br>

                <div class="monto3" id="gene-empresa">
                    <label for="">Empresa</label>

                    <select name="" id="empresa" disabled>
                        <option value=""></option>
                        <option value="">Seleccioname....</option>
                    </select>
                </div>
                <br>


                <div class="monto3" id="referencia">
                    <label class="refe" for="">REFERENCIA</label>
                    <input type="text">
                </div>
                <br>

                <div class="monto3" id="destino">
                    <label for="" class="des">CAJA DESTINO</label>
                    <input type="text">
                </div>



                <br>



            </div>
            <br>

        </div class="areaobs">
        <label for="" id="observa">Observación</label>
        <br>
        <textarea id="observaarea" name="" cols="55" rows="3"></textarea>
        <div>

            <br>

            <div class="form1" id="form1">


                <div class="radio" id="comprobante">
                    <label for="">COMPROBANTE DE PAGO</label>
                </div>

                <br>


                <div class="operacion2" id="op2">
                    <div class="" id="gene-factura">
                        <input type="radio" id="rfactura">
                        <label for="" id="lblfactura">Factura</label>

                    </div>

                    <div class="" id="gene-boleta">
                        <input type="radio" id="rboleta">
                        <label for="" id="lblboleta">Boleta</label>
                    </div>
                </div>

                <br>

                <div class="serie-numero" id="serie-numero">
                    <label for="" class="serie">SERIE</label>
                    <label for="">NÚMERO</label>

                </div>

                <div class="separacion3" id="sep3">
                    <label class="doc" for="">Nro. Doc</label id="lbdoc">
                    <input class="doc" type="text" size="" id="doc1">
                    <input class="doc" type="text" size="" id="doc2">
                </div>

                <br>

                <div class="separacion3" id="sep4">
                    <label for="">Porveedor</label id="lbproveedor">
                    <input type="text" id="proveedor">
                </div class="separacion3">
                <br>
                <div id="sep5">
                    <label for="" class="suministro" id="suministro">#SUMINISTRO/LINEA/RUC/CUENTA</label>
                    <br>
                    <input type="text" id="suministro">
                </div>

                <br>
                <div class="separacion3" id="sep6">
                    <label for="">Fecha de factura</label id="lbfactura">
                    <input type="date" id="fechafactura">
                </div>

                <br>
                <div class="separacion3" id="sep7">
                    <label for="" id="lbldireccion">Dirección</label>
                    <input type="text" id="textdireccion">
                </div>

                <br>

                <div class="" id="sep8">
                    <label for="" id="lblobser">Observación</label>
                    <textarea name="" id="" cols="30" rows="3" id="textarea1"></textarea>
                </div>

                <br>
            </div>



            <!-- FORMULARIO -->
            <div id="trabajadores" class="trabaja">
                <div>
                    <label for="">TRABAJADORES</label>
                </div>
                <br>

                <div class="sep">
                    <label for="">Número de Autorización</label>
                    <input type="text">
                </div>

                <br>
                <div class="sep">
                    <label for="">Tipo</label>
                    <select name="" id="" disabled>
                        <option value="" selected></option>
                        <option value="">Seleccioname...</option>
                    </select>
                </div>
                <br>

                <div class="sep">
                    <label for="">Periodo</label>
                    <select name="" id="" disabled>
                        <option value="" selected></option>
                        <option value="">Seleccioname...</option>
                    </select>
                </div>
                <br>

                <div class="sep">
                    <label for="">Trabajador</label>
                    <select name="" id="" disabled>
                        <option value="" selected></option>
                        <option value="">Seleccioname...</option>
                    </select>
                </div>
                <br>

                <div class="sep1">
                    <div>
                        <select name="" id="" disabled class="opciones">
                            <option value="" selected></option>
                            <option value="">seleccioname porfavor</option>
                        </select>
                        <label for="" class="opciones">MONTO</label>
                        <input class="opciones" type="text">
                    </div>
                    <br>
                </div>

                <div>
                    <label for="">Observacion</label>
                    <textarea name="" id="" cols="48" rows="3"></textarea>
                </div>




            </div>

            <!-- VENTANA MODAL -->

            <div class="form2" id="form3">

                <div class="radio" id="rb">
                    <label for="" id="lbldeposito">DEPOSITO</label>
                </div>
                <br>


                <div class="fecha-cta" id="fecha-cta">
                    <div class="fecha-confirm" id="fecha-confirm">
                        <label for="" id="lblfechacon">fecha confirmacion cta. empresa</label>
                        <br>
                        <br>
                        <input type="date" id="fecha" placeholder="fecha" value="" idF="inputfecha">
                        <br><br>
                    </div>

                    <div class="ajuste" id="ajuste">
                        <label for="" id="lblizipay">ajuste izipay</label>
                        <br>
                        <br>
                        <input type="button" id="almacen" name="ajuste" value="Ajuste" class="ajuste">

                    </div>
                </div>



                <br>

                <!-- grid 2 -->
                <div class="form-anidado" id="anidado">
                    <div class="conc" id="con">
                        <input type="radio" name="operacion" id="operacion1">
                        <label for="" id="lblempresa">Cta de empresa</label>
                        <input type="radio" name="operacion" id="operacion2">
                        <label for="" id="lblterceros">Cta de terceros</label>
                    </div>

                    <br>
                    <br>

                    <div class="operacion1" id="operacion-op">

                        <label for="" id="numero-operacion">Numero de Operación</label>
                        <input type="text" id="input-operacion">
                    </div>
                    <br>

                    <div class="operacion2" id="contenedor-ope">
                        <label for="" id="lblbanco">Banco</label>
                        <select name="" id="" id="select-banco">
                            <option value="">Selecione...</option>
                            <option value="">Interbank</option>
                            <option value="">BBVVA</option>
                            <option value="">BCP</option>
                            <option value="">Santander</option>
                            <option value="">Mi Banco</option>
                        </select>
                    </div>
                    <br>

                    <div class="operacion2">
                        <label for="" class="voucher" id="voucher">Fecha de voucher</label>
                        <input type="date" id="input-voucher">
                    </div>

                    <br>
                    <br>
                    <div class="operacion3" id="ope-hora">
                        <label for="">hora</label id="hora">
                        <input type="time" value="" id="time-hora">

                    </div>
                    <br>

                    <div class="operacion3" id="motorizado">
                        <label for="">MOTORIZADO</label id="hora">
                        <select name="" id="" disabled>
                            <option value="" selected></option>
                            <option value="">selecciname....</option>
                        </select>

                    </div>
                </div>

            </div>


        </div>

    </form>

        <!-- -----modal almacen---- -->

        <style>

        .button {
            margin: auto;
            padding: 5px;
        }

        .modelo {

            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .bott{
            background-color: red;
            color: rgb(255, 231, 123);
            padding: 10px 10px;
            border: 0px solid black;
            border-radius: 5px;
            font-size: 17px;
            font-weight: bold;
        }
        .but{
            margin: auto;
            width: 27%;
        }

        </style>

        <div id="miModal" class="modal">
            <div class="flex" id="flex">
                <div class="contenido-modal">
                    <div class="modal-header flex">
                        <h2>AJUSTE IZIPAY</h2>
                        <span class="close" id="close">&times;</span>
                    </div>
                    <br>

                    <div align="center" border="2" class="modal-abajo">

                        <div class="modelo">
                            <label>Monto de voucher</label><input class="modal-body" id="montoVoucher"
                                type="text" /><br>
                        </div>
                        <br>

                        <div class="modelo">
                            <label>% Izipay</label><input class="modal-body" id="porcentIzi" type="text" /><br>
                        </div>
                        <br>

                        <div class="modelo">
                            <label>Monto ingresado al banco</label><input class="modal-body" id="montoBanco"
                                oninput="calcular()" type="text" /><br>
                        </div>


                    </div>
                    <br>

                    <div class="but">
                        <input type="button" id="modalbutton" class="bott" value="GUARDAR" align="center">
                    </div>

                </div>
            </div>
        </div>
        <script src="main.js"></script>

        <script>
        ocultar();

        function ocultar() {
            document.getElementById("contenedor1").style.display = "block";
            document.getElementById("contenedor1").reset();
            n = document.getElementById("concepto").selectedIndex;
            f1 = document.getElementById("form1");
            f1.style.display = "block";

            f3 = document.getElementById("form1");
            f3.style.display = "block";

            f4 = document.getElementById("destino");
            f4.style.display = "block";

            f5 = document.getElementById("motorizado");
            f5.style.display = "block";

            f6 = document.getElementById("referencia");
            f6.style.display = "block";

            f7 = document.getElementById("trabajadores");
            f7.style.display = "block";

            f8 = document.getElementById("ajuste");
            f8.style.display = "block";

            f9 = document.getElementById("con");
            f9.style.display = "block";

            f10 = document.getElementById("gene-monto");
            f10.style.display = "block";

            f11 = document.getElementById("observa");
            f11.style.display = "block";

            f12 = document.getElementById("observaarea");
            f12.style.display = "block";

            if (n == 0) {
                f1.style.display = "none";;
                f5.style.display = "none";
                f7.style.display = "none";
                f8.style.display = "none";
                f9.style.display = "none";
                document.getElementById("body-general").style.height = "750px";


            } else if (n == 1) {
                f4.style.display = "none";
                f6.style.display = "none";
                f5.style.display = "none";
                f7.style.display = "none";

                document.getElementById("body-general").style.height = "1150px";

            } else if (n == 2) {
                f4.style.display = "none";
                f3.style.display = "none";
                f7.style.display = "none";
                f9.style.display = "none";
                document.getElementById("body-general").style.height = "710px";
            } else if (n == 3) {
                f1.style.display = "none";
                f4.style.display = "none";
                f5.style.display = "none";
                f8.style.display = "none";
                f9.style.display = "none";
                f10.style.display = "none";
                f11.style.display = "none";
                f12.style.display = "none";
                document.getElementById("body-general").style.height = "1000px";

            }


            console.log(n);
        }




        // function ajax(){
        //     var xmlhttp= new XMLHttRequest();
        //     xmlhttp.onreadystatechange = function() {
        //         if (this.readyState == 4 && this.status == 200) {

        //         }
        //     }
        //     xmlhttp.open("GET", "./index?op=");
        //     xmlhttp.send();
        // }
        </script>


</body>


</html>