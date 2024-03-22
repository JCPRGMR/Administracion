<?php include_once('../Templates/header.php')?>
<?php include_once('../Response/Control.php') ?>
<link rel="stylesheet" href="../css/complements.css">
<div class="color6 arial p10 br20 f-col h100p">
    <div class="color7 p10 white br20 m10 f-row a-c jc-b">
        <div class="mayus negrita">Entradas y salidas</div>
        <input type="search" name="" id="" placeholder="Buscar...." class="p10 br10">
    </div>
    <div class="tabla overflow-auto br10 h100p w100p">
        <form action="../Request/Control.php" method="post">
            <table class="collapse w100p color7">
                <thead class="mayus white color7 br20 overflow-hidden sticky top0">
                    <th class="p10 fz14">Ciudad</th>
                    <th class="p10 fz14 relative f-row jc-c">
                        Personal
                        <a class="color1 absolute p5 br5 top0 white derecha50 top5" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                        </a>
                    </th>
                    <th class="p10 fz14">Ingreso</th>
                    <th class="p10 fz14">Salida</th>
                    <th class="p10 fz14">Registrar</th>
                </thead>
                <tbody>
                    <td class="p5 center">
                        <input type="search" name="Ciudad" id="Ciudad" placeholder="Ciudad" class="p5 br10 w80px" value="<?php // Ciudades::MostrarDES()?>" required>
                        <div class="relative index100">
                            <div class="absolute f-col br10 overflow-auto h70px v-hidden" id="SelectCiudad">
                                <?php foreach(Ciudades::Mostrar() as $item):?>
                                    <input type="radio" name="ciudad" id="ciudad_id_<?= $item->id_ciudad?>" class="v-hidden absolute check1">
                                    <label for="ciudad_id_<?= $item->id_ciudad?>" onclick="ValorLabelAlInput_ciudad(this)" class="fz12 negrita color6 p10 pointer hover7"><?= $item->des_ciudad?></label>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </td>
                    <td class="p5 center">
                        <input type="search" name="Personal" id="Personal" placeholder="Personal..." class="p5 br10" required>
                        <div class="relative index100">
                            <input type="radio" name="empleados" id="sin_empleado" class="v-hidden absolute">
                            <div class="absolute f-col br10 overflow-auto h200px min-content-w v-hidden" id="SelectPersonal">
                                <?php foreach(Empleados::Options() as $item):?>
                                    <input type="radio" name="empleados" value="<?= $item->id_empleado?>" id="empleado_id_<?= $item->id_empleado?>" class="v-hidden absolute check1">
                                    <label for="empleado_id_<?= $item->id_empleado?>" onclick="ValorLabelAlInput(this)" class="left fz12 hover7 negrita w300px color6 p20 pointer"><?=$item->nombres?> | <?=$item->apellidos?> | <?=$item->des_area?> | <?=$item->des_cargo?></label>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </td>
                    <td class="p5">
                        <div class="f-row a-c br10 overflow-hidden color7">
                            <textarea name="Justificacion_ingreso" oninput="lockTextArea(this)" id="ingreso" cols="20" rows="1" placeholder="Justificacion..." class="w100p p5" required></textarea>
                        </div>
                    </td>
                    <td class="p5">
                        <div class="f-row a-c br10 overflow-hidden color7">
                            <textarea name="Justificacion_salida" oninput="lockTextArea(this)" id="salida" cols="20" rows="1" placeholder="Justificacion..." class="w100p p5" required></textarea>
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
            </thead>
            <tbody>
                <?php foreach(Controles::Mostrar() as $item):?>
                <tr class="white fz12 arial hover6 pointer">
                    <td class="p5 center"><?= $item->des_ciudad ?></td>
                    <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                    <td class="p5 center"><?= $item->des_area ?></td>
                    <td class="p5 center">
                        <?php if (!is_null($item->ingreso)): ?>
                            <?= $item->ingreso ?>
                        <?php else: ?>
                        <form action="" method="post">
                            <button class="color4 white br7 p5 space-nw pointer" value="<?= $item->id_control ?>">
                                Registrar ingreso
                            </button>
                        </form>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center">
                        <?php if (!is_null($item->obs_ingreso)): ?>
                            <?= $item->obs_ingreso ?>
                        <?php else: ?>
                            <label for="edit_obs_salida_<?= $item->id_control?>" class="color3 p5 br7 black f-row a-c jc-c space-nw pointer registrar-salida" onclick="HabilitarSalida('obs_salida_<?= $item->id_control ?>', 'salida_<?= $item->id_control ?>')" value="">
                                <svg width="20px" height="20px" viewBox="0 0 1024 1024" fill="#000000" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M574.4 590.4l-3.2 7.2 1.6 8L608 740.8l8 33.6 28-20L760 672l5.6-4 2.4-6.4 220-556.8 8.8-22.4-22.4-8.8-140-55.2-21.6-8-8.8 20.8-229.6 559.2z m244-528l140 55.2-13.6-30.4-220 556.8 8-10.4-116 82.4 36 13.6-33.6-135.2-0.8 15.2 229.6-560-29.6 12.8z" fill="" /><path d="M872 301.6l-107.2-40c-7.2-2.4-10.4-10.4-8-17.6l8-20.8c2.4-7.2 10.4-10.4 17.6-8l107.2 40c7.2 2.4 10.4 10.4 8 17.6l-8 20.8c-2.4 7.2-10.4 10.4-17.6 8zM718.4 645.6l-107.2-40c-7.2-2.4-10.4-10.4-8-17.6l8-20.8c2.4-7.2 10.4-10.4 17.6-8l107.2 40c7.2 2.4 10.4 10.4 8 17.6l-8 20.8c-2.4 7.2-10.4 10.4-17.6 8zM900.8 224l-107.2-40c-7.2-2.4-10.4-10.4-8-17.6l8-20.8c2.4-7.2 10.4-10.4 17.6-8l107.2 40c7.2 2.4 10.4 10.4 8 17.6l-8 20.8c-2.4 7.2-10.4 11.2-17.6 8z" fill="" /><path d="M930.4 965.6H80c-31.2 0-56-24.8-56-56V290.4c0-31.2 24.8-56 56-56h576c13.6 0 24 10.4 24 24s-10.4 24-24 24H80c-4 0-8 4-8 8v619.2c0 4 4 8 8 8h850.4c4 0 8-4 8-8V320c0-13.6 10.4-24 24-24s24 10.4 24 24v589.6c0 31.2-24.8 56-56 56z" fill="" /><path d="M366.4 490.4H201.6c-13.6 0-25.6-11.2-25.6-25.6 0-13.6 11.2-25.6 25.6-25.6h165.6c13.6 0 25.6 11.2 25.6 25.6-0.8 14.4-12 25.6-26.4 25.6zM409.6 584h-208c-13.6 0-25.6-11.2-25.6-25.6 0-13.6 11.2-25.6 25.6-25.6h208c13.6 0 25.6 11.2 25.6 25.6-0.8 14.4-12 25.6-25.6 25.6zM441.6 676.8h-240c-13.6 0-25.6-11.2-25.6-25.6 0-13.6 11.2-25.6 25.6-25.6h240c13.6 0 25.6 11.2 25.6 25.6-0.8 14.4-12 25.6-25.6 25.6z" fill="" /></svg>
                            </label>
                            <input type="radio" name="eosalida" id="edit_obs_salida_<?= $item->id_control?>" class="absolute v-hidden">
                            <textarea name="" id="" cols="30" rows="1" class="p5 br10" placeholder="Observaciones"></textarea>
                        <?php endif; ?>
                    </td>
                    <!-- FORMULARIO PARA EDITAR LA SALIDAEN LA TABLA -->
                    <td class="p5 center">
                        <?php if (!is_null($item->salida)): ?>
                            <?= $item->salida ?>
                        <?php else: ?>
                        <form action="../Request/Control.php" method="post">
                            <button class="color4 white br7 p5 space-nw pointer registrar-salida" name="anadir_salida" value="<?= $item->id_control ?>">
                                Registrar salida
                            </button>
                        </form>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center f-row jc-c">
                        <?php if (!is_null($item->obs_salida)): ?>
                            <?= $item->obs_salida ?>
                        <?php else: ?>
                            <label for="edit_obs_salida_<?= $item->id_control?>" class="color3 p5 br7 black f-row a-c jc-c space-nw pointer registrar-salida" onclick="HabilitarSalida('obs_salida_<?= $item->id_control ?>', 'salida_<?= $item->id_control ?>')" value="">
                                <svg width="20px" height="20px" viewBox="0 0 1024 1024" fill="#000000" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M574.4 590.4l-3.2 7.2 1.6 8L608 740.8l8 33.6 28-20L760 672l5.6-4 2.4-6.4 220-556.8 8.8-22.4-22.4-8.8-140-55.2-21.6-8-8.8 20.8-229.6 559.2z m244-528l140 55.2-13.6-30.4-220 556.8 8-10.4-116 82.4 36 13.6-33.6-135.2-0.8 15.2 229.6-560-29.6 12.8z" fill="" /><path d="M872 301.6l-107.2-40c-7.2-2.4-10.4-10.4-8-17.6l8-20.8c2.4-7.2 10.4-10.4 17.6-8l107.2 40c7.2 2.4 10.4 10.4 8 17.6l-8 20.8c-2.4 7.2-10.4 10.4-17.6 8zM718.4 645.6l-107.2-40c-7.2-2.4-10.4-10.4-8-17.6l8-20.8c2.4-7.2 10.4-10.4 17.6-8l107.2 40c7.2 2.4 10.4 10.4 8 17.6l-8 20.8c-2.4 7.2-10.4 10.4-17.6 8zM900.8 224l-107.2-40c-7.2-2.4-10.4-10.4-8-17.6l8-20.8c2.4-7.2 10.4-10.4 17.6-8l107.2 40c7.2 2.4 10.4 10.4 8 17.6l-8 20.8c-2.4 7.2-10.4 11.2-17.6 8z" fill="" /><path d="M930.4 965.6H80c-31.2 0-56-24.8-56-56V290.4c0-31.2 24.8-56 56-56h576c13.6 0 24 10.4 24 24s-10.4 24-24 24H80c-4 0-8 4-8 8v619.2c0 4 4 8 8 8h850.4c4 0 8-4 8-8V320c0-13.6 10.4-24 24-24s24 10.4 24 24v589.6c0 31.2-24.8 56-56 56z" fill="" /><path d="M366.4 490.4H201.6c-13.6 0-25.6-11.2-25.6-25.6 0-13.6 11.2-25.6 25.6-25.6h165.6c13.6 0 25.6 11.2 25.6 25.6-0.8 14.4-12 25.6-26.4 25.6zM409.6 584h-208c-13.6 0-25.6-11.2-25.6-25.6 0-13.6 11.2-25.6 25.6-25.6h208c13.6 0 25.6 11.2 25.6 25.6-0.8 14.4-12 25.6-25.6 25.6zM441.6 676.8h-240c-13.6 0-25.6-11.2-25.6-25.6 0-13.6 11.2-25.6 25.6-25.6h240c13.6 0 25.6 11.2 25.6 25.6-0.8 14.4-12 25.6-25.6 25.6z" fill="" /></svg>
                            </label>
                            <form action="../Request/Control.php" method="post" class="f-row" id="form_<?= $item->id_control ?>">
                                <input type="radio" name="eosalida" onchange="InsertarObservacion(this, 'form_<?= $item->id_control ?>')" id="edit_obs_salida_<?= $item->id_control?>" class="absolute v-hidden" value="<?= $item->id_control?>">
                                <textarea name="obs_salida" id="" cols="0" rows="0" class="br10 txt_hidden" placeholder="Observaciones"></textarea>
                                <label for="cerrar_textarea" class="switch_cancel color4 white negrita br7 black f-row a-c jc-c space-nw pointer registrar-salida">X</label>
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<!-- INTERRUPTOR PARA CANCELAR Y OCULTAR EL TEXTAREA -->
<input type="radio" name="eosalida" id="cerrar_textarea" class="absolute v-hidden">
<script src="../Js/PruebaControl2.js"></script>