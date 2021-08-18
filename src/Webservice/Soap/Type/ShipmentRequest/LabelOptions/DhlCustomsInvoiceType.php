<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

class DhlCustomsInvoiceType extends AlphaNumeric
{
    const COMMERCIAL_INVOICE = "COMMERCIAL_INVOICE";
    const PROFORMA_INVOICE = "PROFORMA_INVOICE";
}