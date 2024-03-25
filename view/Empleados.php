<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style5.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="f-row jc-c a-c m0 w100p h100vh" bgcolor="">
    <form action="" method="post" class="color7 p20 br10 f-col gap10">
        <div class="mayus p20 color5 br10 negrita">
            Registrar empleado
            <a href="<?= ($_GET["back"] == "control") ? 'Asistencia.php' : 'Omisiones.php' ; ?>" class="p10 color4 br10 white pointer">
                Cancelar
            </a>
        </div>
        <input type="search" name="" id="" placeholder="Nombre(s)" class="p10 br10">
        <input type="search" name="" id="" placeholder="Apellido(s)" class="p10 br10">
        <input type="search" name="" id="" placeholder="Carnet de identidad" class="p10 br10">
        <select name="" id="" class="p10 br10">
            <option value="">La Paz</option>
            <option value="">Santa Cruz</option>
            <option value="">Cochabamba</option>
            <option value="">Beni</option>

            <option value="">Pando</option>
            <option value="">Tarija</option>
            <option value="">Oruro</option>
            <option value="">Potosi</option>
            <option value="">Chuquisaca</option>
        </select>
        <input type="search" name="" id="" placeholder="Celular" class="p10 br10">
        <div class="relative f-col">
            <input type="search" name="" id="Area" placeholder="Area" class="p10 br10">
            <div class="relative">
                <div class="absolute f-col color6 index100 w100p br10 v-hidden" id="SelectArea">
                    <label for="" class="p10">Hola 1</label>
                </div>
            </div>
        </div>
        <div class="relative f-col">
            <input type="search" name="" id="Cargo" placeholder="Cargo" class="p10 br10">
            <div class="relative">
                <div class="absolute f-col color6 index100 w100p br10 v-hidden" id="SelectCargo">
                    <label for="" class="p10">Hola 1</label>
                </div>
            </div>
        </div>
        <button type="submit" class="p10 color1 white negrita br10 pointer" value="<?= ($_GET["back"] == "control") ? 'Asistencia' : 'Omisiones' ; ?>">Registrar</button>
    </form>
</body>
</html>
<script src="../Js/Areas.js"></script>
<script src="../Js/Cargos.js"></script>