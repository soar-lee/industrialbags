<?php

include 'vendor/autoload.php';
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('quotation.docx');
$templateProcessor->setValue('%{name}%', 'vanessa');
$templateProcessor->saveAs('./vanessa.docx');
