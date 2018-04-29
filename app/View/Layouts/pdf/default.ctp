<?php
require_once(APP . 'Vendor' . DS . 'dompdf-5' . DS . 'dompdf_config.inc.php');
spl_autoload_register('DOMPDF_autoload');
$dompdf = new DOMPDF();
$dompdf->set_paper = $pdfpaper;
$dompdf->set_base_path(APP . 'webroot/css/');
//debug($content_for_layout);
$dompdf->load_html(utf8_decode($content_for_layout), Configure::read('App.encoding'));
$dompdf->render();
$dompdf->stream($pdffile, array("Attachment" => $attachment));

?>
<!DOCTYPE html>
<html lang="ms">
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

