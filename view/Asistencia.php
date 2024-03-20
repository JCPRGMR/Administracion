<?php include_once('../Templates/header.php')?>
<?php include_once('../Response/Control.php') ?>
<div class="color6 arial p10 br20 f-col h100p">
    <div class="color7 p10 white br20 m10 f-row a-c jc-b">
        <div></div>
        <input type="search" name="" id="" placeholder="Buscar...." class="p10 br10">
    </div>
    <div class="tabla overflow-auto br10 h100p w100p">
        <form action="../Request/Control.php" method="post">
            <table class="collapse w100p color7">
                <thead class="mayus white color7 br20 overflow-hidden sticky top0">
                    <th class="p10 fz14">Ciudad</th>
                    <th class="p10 fz14">Personal</th>
                    <th class="p10 fz14">Ingreso</th>
                    <th class="p10 fz14">Salida</th>
                    <th class="p10 fz14">Registrar</th>
                </thead>
                <tbody>
                    <td class="p5">
                        <input type="search" name="Ciudad" id="Ciudad" placeholder="Ciudad" class="p5 br10 w80px" value="<?PHP // Ciudades::MostrarDES()?>">
                        <div class="relative index100">
                            <div class="absolute f-col br10 overflow-auto h70px v-hidden" id="SelectCiudad">
                                <?php foreach(Ciudades::Mostrar() as $item):?>
                                    <input type="radio" name="ciudad" id="ciudad_id_<?= $item->id_ciudad?>" class="v-hidden absolute check1">
                                    <label for="ciudad_id_<?= $item->id_ciudad?>" class="fz12 negrita color6 p10 pointer hover7"><?= $item->des_ciudad?></label>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </td>
                    <td class="p5">
                        <input type="search" name="Personal" id="Personal" placeholder="Personal..." class="p5 br10">
                        <div class="relative index100">
                            <div class="absolute f-col br10 overflow-auto h70px v-hidden" id="SelectPersonal">
                                <?php foreach(Empleados::Options() as $item):?>
                                    <input type="radio" name="empleados" id="empleado_id_<?= $item->id_empleado?>" class="v-hidden absolute check1">
                                    <label for="empleado_id_<?= $item->id_empleado?>" class="fz12 hover7 negrita color6 p10 pointer space-nw"><?=$item->nombres?> | <?=$item->apellidos?> | <?=$item->des_area?> | <?=$item->des_cargo?></label>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </td>
                    <td class="p5">
                        <div class="f-row a-c br10 overflow-hidden color7">
                            <input type="time" name="Hora_ingreso" id="" placeholder="Hora" class="color2 fz13 white negrita p5 w100px" value="<?= date('H:i') ?>">
                            <textarea name="Justificacion" id="" cols="20" rows="1" placeholder="Justificacion..." class="w100p p5"></textarea>
                        </div>
                    </td>
                    <td class="p5">
                        <div class="f-row a-c br10 overflow-hidden color7">
                            <input type="time" name="Hora_salida" id="" placeholder="Hora" class="color2 fz13 white negrita p5 w100px" value="<?= date('H:i') ?>">
                            <textarea name="Justificacion" id="" cols="20" rows="1" placeholder="Justificacion..." class="w100p p5"></textarea>
                        </div>
                    </td>
                    <td class="center">
                        <button type="submit" class="p10 br10 color5 pointer mayus negrita" name="Registrar">Registrar</button>
                    </td>
                </tbody>
            </table>
        </form>
        <table class="collapse color7 w100p">
            <thead class="mayus white color1 br20 overflow-hidden sticky top0">
                <th class="p10 fz14">Ciudad</th>
                <th class="p10 fz14">Nombres</th>
                <th class="p10 fz14">Area</th>
                <th class="p10 fz14">Ingresos</th>
                <th class="p10 fz14">Obs. Ingreso</th>
                <th class="p10 fz14">Salida</th>
                <th class="p10 fz14">Obs. Salida</th>
                <!-- <th class="p10 fz14">Registro</th> -->
            </thead>
            <tbody>
                <?php foreach(Controles::Mostrar() as $item):?>
                <tr class="white fz12 arial hover6 pointer">
                    <td class="p5 center"><?= $item->des_ciudad ?></td>
                    <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                    <td class="p5 center"><?= $item->des_area ?></td>
                    <td class="p5 center">
                        <?= (!is_null($item->ingreso)) ? $item->ingreso : /*html*/'<button for="" class=" color4 white br50 space-nw pointer">Registrar ingreso</button>' ; ?>
                    </td>
                    <td class="p5 center"><?= $item->obs_ingreso ?></td>
                    <td class="p5 center">
                        <?= (!is_null($item->salida)) ? $item->salida : /*html*/'<button for="" class=" color4 white br50 space-nw pointer">Registrar salida</button>' ; ?>
                    </td>
                    <td class="p5 center"><?= $item->obs_salida ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>