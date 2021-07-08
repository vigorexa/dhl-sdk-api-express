<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\Remarks\Remark;

class Remarks
{
    /**
     * @var Remark
     */
    private $Remark;

    public function __construct($value)
    {
        $this->Remark = new Remark($value);
    }
}