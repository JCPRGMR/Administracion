<?php session_start()?>
<?php (!isset($_SESSION["usuario"])) && header("Location: ../") ?>
<?php include_once("../Class/Areas.php")?>
<?php include_once("../Class/Cargos.php")?>
<?php include_once("../Class/Empleados.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style6.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="f-row jc-c a-c m0 w100p h100vh">
    <form action="../Request/Empleados.php" method="post" class="color7 p20 br10 f-col gap10">
        <div class="mayus p20 color5 br10 negrita">
            Registrar empleado
            <a href="<?= ($_GET["back"] == "control") ? 'Asistencia.php' : 'Omisiones.php' ; ?>" class="p10 color4 br10 white pointer">
                Cancelar
            </a>
        </div>
        <input type="search" name="nombres" id="" placeholder="Nombre(s)" class="p10 br10" required>
        <input type="search" name="apellidos" id="" placeholder="Apellido(s)" class="p10 br10" required>
        <input type="search" name="carnet" id="" placeholder="Carnet de identidad" class="p10 br10" required>
        <select name="expedido" id="" class="p10 br10" required>
            <option value="LA PAZ">La Paz</option>
            <option value="SANTA CRUZ">Santa Cruz</option>
            <option value="COCHABAMBA">Cochabamba</option>
            <option value="BENI">Beni</option>

            <option value="PANDO">Pando</option>
            <option value="TARIJA">Tarija</option>
            <option value="ORURO">Oruro</option>
            <option value="POTOSI">Potosi</option>
            <option value="CHUQUISACA">Chuquisaca</option>
            <option value="OTROS...">Otro...</option>
        </select>
        <input type="search" name="celular" id="" placeholder="Celular" class="p10 br10" required>
        <div class="relative f-col">
            <input type="search" name="area" id="Area" placeholder="Area" class="p10 br10" required>
            <div class="relative">
                <div class="absolute color7 white negrita f-col index100 Mh100px w100p br10 v-hidden overflow-auto" id="SelectArea">
                    <?php foreach(Areas::Mostrar() as $item):?>
                        <input type="radio" name="are" id="id_area_<?= $item->id_area ?>" class="v-hidden absolute">
                        <label for="id_area_<?= $item->id_area ?>" onclick="ValorLabelAlInput_Area(this)" class="p10 pointer hover1"><?= $item->des_area ?></label>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="relative f-col">
            <input type="search" name="cargo" id="Cargo" placeholder="Cargo" class="p10 br10" required>
            <div class="relative">
                <div class="absolute color7 white negrita f-col index100 Mh100px w100p br10 v-hidden overflow-auto" id="SelectCargo">
                    <?php foreach(Cargos::Mostrar() as $item):?>
                        <input type="radio" name="are" id="id_cargo_<?= $item->id_cargo ?>" class="v-hidden absolute">
                        <label for="id_cargo_<?= $item->id_cargo ?>" onclick="ValorLabelAlInput_Cargo(this)" class="p10 pointer hover1"><?= $item->des_cargo ?></label>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <button type="submit" name="new_empleado" class="p10 color1 white negrita br10 pointer" value="<?= ($_GET["back"] == "control") ? 'Asistencia' : 'Omisiones' ; ?>">Registrar</button>
    </form>
</body>
</html>
<script src="../Js/Areas.js"></script>
<script src="../Js/Cargos.js"></script>