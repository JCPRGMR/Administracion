<?php include_once('../Templates/header.php') ?>
<?php include_once('../Class/Empleados.php') ?>
<div class="color6 arial p10 br20 f-col h100p noselect relative ">
    <div class="color7 p10 white br20 m10 f-row a-c jc-b wrap">
        <div class="mayus negrita f-row a-c gap10">
            Personal y usuarios
            <?php if ($_SESSION["usuario"]->des_rol === "Reportes" || $_SESSION["usuario"]->des_rol === "Administrador") : ?>
                <a class="p10 fz12 color4 white br10 mayus negrita pointer f-row jc-c a-c bt_reportes" href="Reportes_control.php">
                    Reportes
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-pdf-fill" viewBox="0 0 16 16">
                        <path d="M5.523 10.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 4.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z" />
                        <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.6 11.6 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <input type="search" name="" id="searchInput" placeholder="Buscar...." class="p10 br10" onkeyup="searchTable()">
    </div>
    <div class="overflow-auto">
        <table class="collapse color7 w100p">
            <thead class="mayus white color1 br20 overflow-hidden sticky top0">
                <th class="p10 fz14">Carnet</th>
                <th class="p10 fz14">Nombres y apellidos</th>
                <th class="p10 fz14">Area</th>
                <th class="p10 fz14">Cargo</th>
                <th class="p10 fz14">Acciones</th>
            </thead>
            <tbody id="tbody" class="noselect">
                <?php foreach (($_SESSION["usuario"]->des_rol === "Administrador") ? Empleados::Mostrar() : Empleados::Mostrar_por_area($_SESSION["usuario"]->id_fk_area)  as $item) : ?>
                    <tr class="white fz12 arial hover6">
                        <td class="p5 center"><?= $item->ci ?></td>
                        <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                        <td class="p5 center"><?= $item->des_area ?></td>
                        <td class="p5 center"><?= $item->des_cargo ?></td>
                        <td class="p5 center f-row jc-c a-c gap5">
                            <form action="" method="post">
                                <button type="submit" value="<?= $item->id_empleado ?>" class="p5 brp50 negrita mayus color3 pointer" title="Editar usuario">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                    </svg>
                                </button>
                            </form>
                            <?php if($item->id_fk_empleado != null):?>
                                <form action="" method="post">
                                    <button type="submit" value="<?= $item->id_empleado ?>" class="p5 brp50 white negrita mayus color1 pointer" title="Ver usuario">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                        </svg>
                                    </button>
                                </form>
                            <?php else:?>
                                <form action="" method="post">
                                    <button type="submit" value="<?= $item->id_empleado ?>" class="p5 brp50 white negrita mayus color5 pointer" title="Agregar usuario">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-person-add" viewBox="0 0 16 16">
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                            <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                        </svg>
                                    </button>
                                </form>
                            <?php endif;?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="../Js/Buscador.js"></script>