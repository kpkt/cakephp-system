<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Autoloader;



require_once APP.'Vendor/dompdf/dompdf/lib/html5lib/Parser.php';
require_once APP.'Vendor/dompdf/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once APP.'Vendor/dompdf/dompdf/lib/php-svg-lib/src/autoload.php';
require_once '/var/www/html/app/Vendor/dompdf/dompdf/src/Autoloader.php';
Autoloader::register();

$dompdf = new Dompdf();

$dompdf->loadHtml(utf8_decode($content_for_layout), Configure::read('App.encoding'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename);


$cakeDescription = __d('cake_dev', Configure::read("Setting.nama_aplikasi"));
?>
<!DOCTYPE html>
<html lang="ms">
<head><?php echo $cakeDescription ?></head>
<body>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <?php echo $dompdf->output(); ?>
    </section>
    <!-- /.content -->
</div>
</body>
</html>

