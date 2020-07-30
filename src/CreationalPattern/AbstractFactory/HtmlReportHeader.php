<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


class HtmlReportHeader implements ReportHeader
{
    public function generateHeader($header)
    {
        echo "Generate HTML Report Header => $header \n";
    }
}