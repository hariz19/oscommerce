<?
ob_start();
 include "cetak_biodata.php";
 $content = ob_get_clean();

// conversion HTML => PDF
 require_once "../asset/pdf/html2pdf.class.php";
 try
 {
 $html2pdf = new HTML2PDF('P','A4', 'en', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 $html2pdf->Output('"cetak_biodata.pdf');
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>