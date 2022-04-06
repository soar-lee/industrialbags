<?php

include 'vendor/autoload.php';
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('quotation.docx');
$templateProcessor->setValue('name', $_REQUEST['name']);
$templateProcessor->setValue('quantity', intval($_REQUEST['quantity']));
$templateProcessor->setValue('type', $_REQUEST['type']);
$templateProcessor->setValue('total_prize', 290 * intval($_REQUEST['quantity']));
$templateProcessor->saveAs('quotation_'.$_REQUEST['name']);
redirect('quotation_'.$_REQUEST['name']);
