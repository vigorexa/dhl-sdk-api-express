<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;

class ExportLineItems implements \Countable
{
    /**
     * @var ExportLineItem[]
     */
    private $ExportLineItem = [];


    public function __construct($exportLine)
    {
        $this->setExportLineItem($exportLine);
    }

    /**
     * Returns the number of lines
     *
     * @return int
     */
    public function count()
    {
        return count($this->ExportLineItem);
    }

    /**
     * @return ExportLineItem[]
     */
    public function getExportLineItem()
    {
        return $this->ExportLineItem;
    }

    /**
     * @param ExportLineItem[] $exportLine
     */
    public function setExportLineItem($exportLine)
    {
        $this->ExportLineItem = $exportLine;
    }

    public function addExportLine(ExportLineItem $item)
    {
        $this->ExportLineItem = $item;
    }

}