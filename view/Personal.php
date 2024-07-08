<?php include_once('../Templates/header.php') ?>
<?php include_once('../Response/Control.php') ?>
<div class="color6 arial p10 br20 f-col h100p noselect relative">
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
    <div class="">
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
                <?php foreach (($_SESSION["usuario"]->des_rol === "Administrador") ? Omisiones::Mostrar() : Omisiones::Mostrar_por_area($_SESSION["usuario"]->id_fk_area)  as $item) : ?>
                    <tr class="white fz12 arial hover6 pointer" id="<?= $item->id_omision ?>" ondblclick="BuscarOmision(this.id)">
                        <td class="p5 center"><?= $item->des_ciudad ?></td>
                        <td class="p5 space-nw"><?= $item->nombres . ' ' . $item->apellidos ?></td>
                        <td class="p5 center"><?= $item->des_area ?></td>
                        <td class="p5 center"><?= $item->tiempo_omision . ' ' . $item->medida ?></td>
                        <td class="p5 center b1">
                            <?php if ($item->ingreso) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            <?php endif; ?>
                        </td>
                        <td class="p5 center b1">
                            <?php if ($item->salida) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            <?php endif; ?>
                        </td>
                        <td class="p5 center b1">
                            <?php if ($item->marcacion) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            <?php endif; ?>
                        </td>
                        <td class="p5 center"><?= $item->justificacion ?></td>
                        <td class="p5 center"><?= $item->fecha_registro_omision ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>