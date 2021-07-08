<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\Remarks;


use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

class Remark extends AlphaNumeric
{
    /**
     * @var string
     */
    private $RemarkDescription;

    public function __construct($value)
    {
        parent::__construct($value);
        $this->RemarkDescription = $this->getValue();
    }
}