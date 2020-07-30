<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


class PdfReportBody implements ReportBody
{

    public function generateBody($body)
    {
        echo "Generating PDF Report Body => $body \n";
    }
}