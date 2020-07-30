<?php


namespace DesignPatternImplementation\CreationalPattern\AbstractFactory;


class PdfReportFactory implements ReportFactory
{

    public function createHeader()
    {
        return new PdfReportHeader();
    }

    public function createBody()
    {
        return new PdfReportBody();
    }
}