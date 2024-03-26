<?php include_once("../Class/Areas.php")?>
<?php include_once('../Templates/header.php') ?>

<div class="f-row jc-c a-c h100p">
    <form action="Control_pdf.php" method="post" target="_blank" class="color6 br15 overflow-hidden">
        <div class="p10 color7 white negrita mayus">
            FILTRAR DATOS PARA EL REPORTE DE CONTROL
        </div>
        <div class="p10 f-col gap5">
            <div class="f-col">
                <label for="" class="negrita mayus p5">Carnet <tk class="text4">(*)</tk></label>
                <input type="search" name="carnet" id="" class="p10 br10" placeholder="Carnet de identidad">
            </div>
            <div class="f-col">
                <label for="" class="negrita mayus p5">Nombres <tk class="text4">(*)</tk></label>
                <input type="search" name="nombres" id="" class="p10 br10" placeholder="Nombre(s)">
            </div>
            <div class="f-col">
                <label for="" class="negrita mayus p5">Apellidos <tk class="text4">(*)</tk></label>
                <input type="search" name="apellidos" id="" class="p10 br10" placeholder="Apellido(s)">
            </div>
            <div class="f-col">
                <label for="" class="negrita mayus p5">Area <tk class="text4">(*)</tk></label>
                <div class="relative f-col">
                    <input type="search" name="area" id="Area" placeholder="Area" class="p10 br10">
                    <div class="relative">
                        <div class="absolute color7 white negrita f-col index100 Mh100px w100p br10 v-hidden overflow-auto" id="SelectArea">
                            <?php foreach(Areas::Mostrar() as $item):?>
                                <input type="radio" name="are" id="id_area_<?= $item->id_area ?>" class="v-hidden absolute">
                                <label for="id_area_<?= $item->id_area ?>" onclick="ValorLabelAlInput_Area(this)" class="p10 pointer hover1"><?= $item->des_area ?></label>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-col">
                <div class="f-row jc-b gap10">
                    <div class="f-col flex-1 negrita">
                        <label for="">Desde <tk class="text4">(*)</tk></label>
                        <input type="date" name="desde" id="" class="p10 br10">
                    </div>
                    <div class="f-col flex-1 negrita">
                        <label for="">Hasta <tk class="text4">(*)</tk></label>
                        <input type="date" name="hasta" id="" class="p10 br10">
                    </div>

                </div>
            </div>
            <div class="f-row jc-c a-c">
                <button type="submit" class="p10 color4 mayus negrita white pointer m10 br50">Generar pdf</button>
                <a href="Asistencia.php" class="color4 p5 fz12 white br10">CANCELAR</a>
            </div>
        </div>
    </form>
</div>
<script src="../Js/Areas.js"></script>