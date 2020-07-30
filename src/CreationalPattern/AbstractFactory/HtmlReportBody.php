<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


class HtmlReportBody implements ReportBody
{
    public function generateBody($body)
    {
        echo "Generate HTML Report Body => $body \n";
    }
}