
<?php
//$css =  $this->Html->css('bootstrap.min.css');
require_once(APP . 'Vendor' . DS . 'dompdf' . DS . 'dompdf_config.inc.php');
spl_autoload_register('DOMPDF_autoload');
$dompdf = new DOMPDF();
$dompdf->set_paper('A4', 'landscape');
$dompdf->set_base_path(APP . 'webroot/css/'); 
$dompdf->load_html(utf8_decode($content_for_layout), Configure::read('App.encoding'));
$dompdf->render();
?>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <?php echo $dompdf->output(); ?>
    </section>
    <!-- /.content -->
</div>

