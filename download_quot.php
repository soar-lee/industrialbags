<?php

include 'vendor/autoload.php';
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('quotation.docx');
$templateProcessor->setValue('name', $_REQUEST['name']);
$templateProcessor->setValue('quantity', intval($_REQUEST['quantity']));
$templateProcessor->setValue('type', $_REQUEST['type']);
$templateProcessor->setValue('total_prize', 290 * intval($_REQUEST['quantity']));
echo "start create file\n";
$templateProcessor->saveAs('quotation_'.$_REQUEST['name']);
echo "start redirect\n";
echo redirect('quotation_'.$_REQUEST['name']);
