<?php include_once('../Templates/header.php')?>
<?php include_once('../Response/Omision.php') ?>
<div class="color6 arial p10 br20 f-col h100p">
    <div class="color7 p10 white br20 m10 f-row a-c jc-b">
        <div></div>
        <input type="search" name="" id="" placeholder="Buscar...." class="p10 br10">
    </div>
    <div class="tabla overflow-auto br10 h100p w100p">
        <form action="../Request/Omision.php" method="post">
            <table class="collapse w100p color7">
                <thead class="mayus white color7 br20 overflow-hidden sticky top0">
                    <th class="p10 fz14">Ciudad</th>
                    <th class="p10 fz14">personal</th>
                    <th class="p10 fz14">Omision</th>
                    <th class="p10 fz14">Ingreso</th>
                    <th class="p10 fz14">Salida</th>
                    <th class="p10 fz14">Marcacion</th>
                    <th class="p10 fz14">Just.</th>
                    <th class="p10 fz14">Registro</th>
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
                        <input type="search" name="Tiempo" id="" placeholder="Tiempo" class="p5 w70px br10">
                    </td>
                    <td class="center p5">
                        <input type="checkbox" name="Ingreso" id="ingreso" class="absolute v-hidden check5">
                        <label for="ingreso" class="color6 p5 br10 pointer mayus negrita fz12">
                            ingreso
                        </label>
                    </td>
                    <td class="center p5">
                        <input type="checkbox" name="Salida" id="salida" class="absolute v-hidden check5">
                        <label for="salida" class="color6 p5 br10 pointer mayus negrita fz12">
                            salida
                        </label>
                    </td>
                    <td class="center p5">
                        <input type="checkbox" name="Marcacion" id="marcacion" class="absolute v-hidden check5">
                        <label for="marcacion" class="color6 p5 br10 pointer mayus negrita fz12">
                            marcacion
                        </label>
                    </td>
                    <td class="p5">
                        <textarea name="Justificacion" id="" cols="20" rows="1" placeholder="Justificacion..." class="br10 p5"></textarea>
                    </td>
                    <td class="p5">
                        <input type="date" name="Fecha_de_registro" id="" value="<?= date('Y-m-d') ?>" class="w100px p5 br10 color2 white br10">
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
                <th class="p10 fz14">Omision</th>
                <th class="p10 fz14">Ingreso</th>
                <th class="p10 fz14">Salida</th>
                <th class="p10 fz14">Marcacion</th>
                <th class="p10 fz14">Justificacion</th>
                <th class="p10 fz14">Registro</th>
            </thead>
            <tbody>
                <?php foreach(Omisiones::Mostrar() as $item):?>
                <tr class="white fz12 arial hover6 pointer">
                    <td class="p5 center"><?= $item->des_ciudad ?></td>
                    <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                    <td class="p5 center"><?= $item->des_area ?></td>
                    <td class="p5 center"><?= $item->tiempo_omision . ' ' . $item->medida ?></td>
                    <td class="p5 center"><?= $item->ingreso ?></td>
                    <td class="p5 center"><?= $item->salida ?></td>
                    <td class="p5 center"><?= $item->marcacion ?></td>
                    <td class="p5 center"><?= $item->justificacion ?></td>
                    <td class="p5 center"><?= $item->f_registro_omision ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>