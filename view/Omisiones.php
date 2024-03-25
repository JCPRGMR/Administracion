<?php include_once('../Templates/header.php')?>
<?php include_once('../Response/Omision.php') ?>
<div class="color6 arial p10 br20 f-col h100p">
    <div class="color7 p10 white br20 m10 f-row a-c jc-b">
        <div class="mayus negrita">Omisiones, permisos y marcaciones</div>
        <input type="search" name="" id="searchInput" placeholder="Buscar...." class="p10 br10" onkeyup="searchTable()">
    </div>
    <div class="tabla overflow-auto br10 h100p w100p">
        <form action="../Request/Omision.php" method="post">
            <table class="collapse w100p color7">
                <thead class="mayus white color7 br20 overflow-hidden sticky top0">
                    <th class="p10 fz14">Ciudad</th>
                    <th class="p10 fz14 relative f-row jc-c">
                        Personal
                        <a class="color1 absolute p5 br5 top0 white derecha30 top5" href="Empleados.php?back=omision">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                        </a>
                    </th>
                    <th class="p10 fz14">Omision</th>
                    <th class="p10 fz14">Ingreso</th>
                    <th class="p10 fz14">Salida</th>
                    <th class="p10 fz14">Marcacion</th>
                    <th class="p10 fz14">Just.</th>
                    <th class="p10 fz14">Fecha</th>
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
                    <td class="p5">
                        <input type="search" name="Personal" id="Personal" placeholder="Personal..." class="p5 br10" required>
                        <div class="relative index100">
                            <input type="radio" name="empleados" id="sin_empleado" class="v-hidden absolute">
                            <div class="absolute f-col br10 overflow-auto h200px min-content-w v-hidden" id="SelectPersonal">
                                <?php foreach(Empleados::Options() as $item):?>
                                    <input type="radio" name="empleados" value="<?= $item->id_empleado?>" id="empleado_id_<?= $item->id_empleado?>" class="v-hidden absolute check1">
                                    <label for="empleado_id_<?= $item->id_empleado?>" onclick="ValorLabelAlInput(this)" class="left fz12 hover7 negrita w300px color6 p20 pointer"><?=$item->nombres?> <?=$item->apellidos?> | <?=$item->des_area?> | <?=$item->des_cargo?></label>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </td>
                    <td class="p5 f-row">
                        <input type="search" name="Tiempo" id="tiempoInput" placeholder="Tiempo" class="p5 w70px" oninput="validarNumero(this)" required>
                        <select name="medida" id="medida" class="pointer">
                            <option value="minuto(s)" id="minutos">min.</option>
                            <option value="hora(s)" id="horas">Hrs.</option>
                        </select>
                    </td>
                    <td class="center p5">
                        <input type="checkbox" name="Ingreso" id="ingreso" class="absolute v-hidden check5" value="1">
                        <label for="ingreso" class="color6 p5 br10 pointer mayus negrita fz12">
                            ingreso
                        </label>
                    </td>
                    <td class="center p5">
                        <input type="checkbox" name="Salida" id="salida" class="absolute v-hidden check5" value="1">
                        <label for="salida" class="color6 p5 br10 pointer mayus negrita fz12">
                            salida
                        </label>
                    </td>
                    <td class="center p5">
                        <input type="checkbox" name="Marcacion" id="marcacion" class="absolute v-hidden check5" value="1">
                        <label for="marcacion" class="color6 p5 br10 pointer mayus negrita fz12">
                            marcacion
                        </label>
                    </td>
                    <td class="p5">
                        <textarea name="Justificacion" id="Justificacion" cols="20" rows="1" placeholder="Justificacion..." class="br10 p5" required></textarea>
                    </td>
                    <td class="p5">
                        <input type="date" name="Fecha_de_registro" id="Fecha_de_registro" min="<?= date('Y-m-d')?>" value="<?= date('Y-m-d') ?>" class="w100px p5 br10 color2 white br10">
                    </td>
                    <td class="center" id="td_btns" class="">
                        <button type="submit" class="p10 br10 color5 pointer mayus negrita" name="Registrar" id="btn_omision">Registrar</button>
                        <a href="" id="botones"></a>
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
            <tbody id="tbody" class="noselect">
                <?php foreach(Omisiones::Mostrar() as $item):?>
                <tr class="white fz12 arial hover6 pointer" id="<?= $item->id_omision?>" ondblclick="BuscarOmision(this.id)">
                    <td class="p5 center"><?= $item->des_ciudad ?></td>
                    <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                    <td class="p5 center"><?= $item->des_area ?></td>
                    <td class="p5 center"><?= $item->tiempo_omision . ' ' . $item->medida ?></td>
                    <td class="p5 center b1">
                        <?php if($item->ingreso): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center b1">
                        <?php if($item->salida): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center b1">
                        <?php if($item->marcacion): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <?php endif; ?>
                    </td>
                    <td class="p5 center"><?= $item->justificacion ?></td>
                    <td class="p5 center"><?= $item->fecha_registro_omision ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
<script src="../Js/Empleados1.js"></script>
<script src="../Js/Ciudades.js"></script>
<script src="../Js/Buscador.js"></script>
<script src="../Js/OnlyNumbers.js"></script>
<script src="../Js/BuscarOmision.js"></script>