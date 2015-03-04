<?php
// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

// disable DOMPDF's internal autoloader if you are using Composer
define('DOMPDF_ENABLE_AUTOLOAD', false);

// include DOMPDF's default configuration
require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';

$data = array(
    'name' => 'Mario Muñoz',
    'course' => 'Curso basico de laravel 5',
    );
require '../course/template.php';
$html = Template::render('pdf/certificate',$data);

require '../course/pdf.php';
Pdf::render('Certificate',$html);

/*$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");*/

?>
