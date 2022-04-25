<?php 

    session_start();
    require_once 'vendor/autoload.php';
    use Dompdf\Dompdf;
    include('config.php');

    ob_start();

    $html=file_get_contents('invfinal.php');

    $dompdf=new Dompdf;
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4','portrait');
    $dompdf->render();
    $dompdf->stream('invoice.pdf');




?>