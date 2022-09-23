<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>

    <div class="form4">
        <div class="formulario">
            <div class="codigo1">
                <label for="">MONTO</label>
                <input type="text">
            </div>
            <br>

            <div class="codigo2">
                <label for="">Empresa</label>
                <select name="" id="" disabled>
                    <option value="" selected></option>
                    <option value="">Selecciona...</option>
                </select>
            </div>

            <br>

            <div class="codigo3">
                <label for="">Referencia</label>
                <input type="text">
            </div>

            <br>

            <div class="codigo4">
                <label for="">Caja destino</label>
                <input type="text">
            </div>
        </div>

        <br>

        <div class="formulario2">
            <div class="fecha">
                <label for="">Fecha confirmada cta. de la empresa</label>
                <br>
                <br>
                <input type="date">
            </div>
            <br>

            <div class="operaciones">
                <label for="">Número de operación</label>
                <input type="text">
            </div>
            <br>

            <div class="operaciones">
                <label for="">Banco</label>
                <select name="" id="" disabled>
                    <option value="" selected></option>
                    <option value="">BBVA</option>
                    <option value="">INTERBANK</option>
                    <option value="">BCP</option>
                    <option value="">CONTINENTAL</option>
                </select>
            </div>
            <br>

            <label for="" class="voucher">fecha de vaucher</label>

            <div class="operaciones">
                <label for="">Hora</label>
                <input type="date">
            </div>
        </div>
        <br>

        <div class="area">
            <label for="" class="obs">Observaciones</label>
            <textarea name="" id="" cols="35" rows="5"></textarea>
        </div>

        

    </div>
</body>

<script>
    function ocultar() {
    n = document.getElementById("concepto").selectedIndex;
    f1= document.getElementById("form1");
    f1.style.display = "block";
    if (n == 3) {
    } 
    else if (n == 4) {
        f1.style.display = "none";
    } 
    else if(n == 5){
        f1.style.display = "none";
    }

    console.log(n);
}

</script>
</html>