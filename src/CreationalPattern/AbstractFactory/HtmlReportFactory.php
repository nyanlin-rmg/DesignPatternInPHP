<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


class HtmlReportFactory implements ReportFactory
{
    public function createHeader()
    {
        return new HtmlReportHeader();
    }

    public function createBody()
    {
        return new HtmlReportBody();
    }
}