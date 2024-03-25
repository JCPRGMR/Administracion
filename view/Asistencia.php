<?php include_once('../Templates/header.php')?>
<?php include_once('../Response/Control.php') ?>
<link rel="stylesheet" href="../css/complements.css">
<div class="color6 arial p10 br20 f-col h100p">
    <div class="color7 p10 white br20 m10 f-row a-c jc-b">
        <div class="mayus negrita">ingreso y salida de personal</div>
        <input type="search" name="" id="searchInput" placeholder="Buscar...." class="p10 br10" onkeyup="searchTable()">
    </div>
    <div class="tabla overflow-auto br10 h100p w100p">
        <form action="../Request/Control.php" method="post">
            <table class="collapse w100p color7">
                <thead class="mayus white color7 br20 overflow-hidden sticky top0">
                    <th class="p10 fz14">Ciudad</th>
                    <th class="p10 fz14 relative f-row jc-c">
                        Personal
                        <a class="color1 absolute p5 br5 top0 white derecha50 top5" href="Empleados.php?back=control">
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
                        <input type="search" name="Ciudad" id="Ciudad" placeholder="Ciudad" class="p5 br10 w80px" value="<?= Ciudades::MostrarDES()?>" required>
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
                            <textarea name="Justificacion_ingreso" id="ingreso" cols="20" rows="1" placeholder="Observaciones..." class="w100p p5"></textarea>
                        </div>
                    </td>
                    <td class="p5">
                        <div class="f-row a-c br10 overflow-hidden color7">
                            <textarea name="Justificacion_salida" id="salida" cols="20" rows="1" placeholder="Observaciones..." class="w100p p5"></textarea>
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
                <th class="p10 fz14" style="border-right: 2px solid;">Area</th>
                <th class="p10 fz14">Ingresos</th>
                <th class="p10 fz14" style="border-right: 2px solid;">Obs. Ingreso</th>
                <th class="p10 fz14">Obs. Salida</th>
                <th class="p10 fz14">Salida</th>
            </thead>
            <tbody id="tbody">
                <?php foreach(Controles::Mostrar() as $item):?>
                <tr class="white fz12 arial hover6 pointer">
                    <td class="p5 center"><?= $item->des_ciudad ?></td>
                    <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                    <td class="p5 center" style="border-right: 2px solid;"><?= $item->des_area ?></td>
                    <td class="p5 center">
                        <?php if (!is_null($item->ingreso)): ?>
                            <?= $item->ingreso ?>
                        <?php else: ?>
                        <form action="../Request/Control.php" method="post">
                            <button class="color4 white br7 p5 space-nw pointer" name="anadir_ingreso" value="<?= $item->id_control ?>">
                                Registrar ingreso
                            </button>
                        </form>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center" style="border-right: 2px solid;">
                        <?php if (strlen($item->obs_ingreso) === 0): ?>
                            <form action="../Request/Control.php" method="post" class="f-row" id="form_<?= $item->id_control ?>">
                                <input type="search" name="obs_ingreso" id=""class="br10 p5 w100p" placeholder="Obs. Ingreso">
                                <button type="submit" name="add_ingreso" class="br10 color5 pointer" value="<?= $item->id_control ?>">✔</button>
                            </form>
                        <?php else: ?>
                            <?= $item->obs_ingreso ?>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center">
                        <?php if (!is_null($item->obs_salida)): ?>
                            <?= $item->obs_salida ?>
                        <?php else: ?>
                            <form action="../Request/Control.php" method="post" class="f-row" id="form_<?= $item->id_control ?>">
                                <input type="search" name="obs_salida" id="" class="br5 p5 w100p" placeholder="Obs. Salida">
                                <button type="submit" name="add_salida" class="br10 color5 pointer" value="<?= $item->id_control ?>">✔</button>
                            </form>
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
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<!-- INTERRUPTOR PARA CANCELAR Y OCULTAR EL TEXTAREA -->
<script src="../Js/Empleados1.js"></script>
<script src="../Js/Ciudades.js"></script>
<script src="../Js/PruebaControl2.js"></script>
<script src="../Js/Buscador.js"></script>