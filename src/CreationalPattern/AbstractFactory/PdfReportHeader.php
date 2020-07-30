<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


class PdfReportHeader implements ReportHeader
{
    public function generateHeader($header)
    {
        echo "Generate PDF Report Header => $header \n";
    }
}