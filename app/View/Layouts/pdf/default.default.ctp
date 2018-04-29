<?php
//use Dompdf\Dompdf;//For PHP 7 only; Please enable in PHP7
$version = explode('.', PHP_VERSION);
if ($version[0] == 7) {
    require_once(APP . 'Vendor' . DS . 'dompdf-7' . DS . 'lib' . DS . 'html5lib' . DS . 'Parser.php');
    require_once(APP . 'Vendor' . DS . 'dompdf-7' . DS . 'lib' . DS . 'php-font-lib' . DS . 'src' . DS . 'FontLib' . DS . 'Autoloader.php');
    require_once(APP . 'Vendor' . DS . 'dompdf-7' . DS . 'lib' . DS . 'php-svg-lib' . DS . 'src' . DS . 'autoload.php');
    require_once(APP . 'Vendor' . DS . 'dompdf-7' . DS . 'src' . DS . 'Autoloader.php');
    Dompdf\Autoloader::register();

    $dompdf = new Dompdf();
}

if ($version[0] == 5) {
    require_once(APP . 'Vendor' . DS . 'dompdf-5' . DS . 'dompdf_config.inc.php');
    spl_autoload_register('DOMPDF_autoload');
    $dompdf = new DOMPDF();
}


$dompdf->set_paper = 'A4';
$dompdf->set_base_path(APP . 'webroot/css/');
$dompdf->load_html(utf8_decode($content_for_layout), Configure::read('App.encoding'));
$dompdf->render();
$dompdf->stream($filename );//'document.pdf'
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

