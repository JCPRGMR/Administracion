<?php 
    session_start();
    (!isset($_SESSION["usuario"])) && header("Location: ../");

    include_once("../Class/Omisiones.php");
    include_once("../Class/Areas.php");
    
    $post->area = Areas::BuscarDescripcion($post)->id_area;
    ob_start();
?>
<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
    .otra-hoja{
        page-break-before: always;
    }
    .center{
        text-align: center;
    }
    *{
        font-size: 11px;
    }
    .text_nowrap{
        white-space: nowrap;
        padding: 5px;
    }
    .color1{
        background-color: black;
    }
    .text2{
        color: white;
    }
    .p5{
        padding: 5px;
    }
    table{
        border-collapse: collapse;
    }
</style>
<h1 class="center" style="font-size: 20px;">
OMISIONES Y PERMISOS
</h1>
<br>
Ciudad: El Alto y La Paz
    <table border="1">
        <thead class="">
            <th class="text_nowrap fz16">C.I.</th>
            <th class="text_nowrap fz16">NOMBRES Y APELLIDOS</th>
            <th class="text_nowrap fz16">AREA</th>
            <th class="text_nowrap fz16">OMISION</th>
            <th class="text_nowrap fz16">INGRESO</th>
            <th class="text_nowrap fz16">SALIDA</th>
            <th class="text_nowrap fz16">MARCACION</th>
            <th class="text_nowrap fz16">JUST.</th>
            <th class="text_nowrap fz16">REGISTRO</th>
        </thead>
        <tbody>
            <?php foreach(Omisiones::pdf($post) as $item):?>
            <tr>
                <td class="text_nowrap p5 center"><?= $item->ci?></td>
                <td class=" p5 "><?= $item->nombres . ' ' . $item->apellidos?></td>
                <td class="text_nowrap p5 center"><?= $item->des_area?></td>
                <td class="text_nowrap p5 center"><?= $item->tiempo_omision . " " . $item->medida?></td>
                <td class="text_nowrap p5 center"><?= (!is_null($item->ingreso)) ? "SI" : ''?></td>
                <td class="text_nowrap p5 center"><?= (!is_null($item->salida)) ? "SI" : ''?></td>
                <td class="text_nowrap p5 center"><?= (!is_null($item->marcacion)) ? "SI" : ''?></td>
                <td class=" p5 "><?= $item->justificacion?></td>
                <td class="text_nowrap p5 center"><?= $item->fecha_registro_omision?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<div class="otra-hoja">
    <h1>
        Detalles de busqueda
    </h1>
    <br>
    <strong>Carnet: </strong> <?= (isset($post->carnet)) ? $post->carnet : 'sin dato' ?>
    <br>
    <strong>Nombres: </strong> <?= (isset($post->nombres)) ? $post->nombres : 'sin dato' ?>
    <br>
    <strong>Apellidos: </strong> <?= (isset($post->apellidos)) ? $post->apellidos : 'sin dato' ?>
    <br>
    <strong>Area: </strong> <?= (isset($post->area)) ? $post->area : 'sin dato' ?>
    <br>
    <strong>Desde la fecha: </strong> <?= (isset($post->desde)) ? $post->desde : 'sin dato' ?>
    <br>
    <strong>Hasta la fecha: </strong> <?= (isset($post->hasta)) ? $post->hasta : 'sin dato' ?>
    <p>
    Busqueda realizada por: <strong><?= $_SESSION['usuario']->nombres . ' ' . $_SESSION['usuario']->apellidos?></strong>
    </p> 
</div>
<?php
    $html = ob_get_clean();
    require '../vendor/autoload.php';
    use Dompdf\Dompdf;
    $pdf = new Dompdf();
    $options = $pdf->getOptions();
    $pdf = new Dompdf($options);
    $pdf->load_html($html);
    $pdf->setPaper('letter');
    $pdf->render();
    $pdf->stream(date('Y-m-d_H:i:s') . ".pdf", array("Attachment" => false));
?>