<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestDHLCustomsInvoice;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestWaybillDocument;

/**
 * The LabelOptions section
 *
 * @api
 * @author Daniel Fairbrother <dfairbrother@datto.com>
 * @link   https://www.datto.com/
 */
class LabelOptions
{
    const COMMERCIAL_INVOICE = "COMMERCIAL_INVOICE";
    const PROFORMA_INVOICE = "PROFORMA_INVOICE";

    /**
     * The waybill document request option.
     *
     * @var RequestWaybillDocument
     */
    private $RequestWaybillDocument;

    /**
     * @var int
     */
    private $NumberOfWaybillDocumentCopies;

    /**
     * @var RequestDHLCustomsInvoice
     */
    private $RequestDHLCustomsInvoice;

    /**
     * @var string
     */
    private $DHLCustomsInvoiceType;

    private $CustomerLogo;

    /**
     * Constructor.
     *
     * @param RequestWaybillDocument $requestWaybillDocument The waybill document request option.
     */
    public function __construct(RequestWaybillDocument $requestWaybillDocument, RequestDHLCustomsInvoice $requestDHLCustomsInvoice)
    {
        $this->setRequestWaybillDocument($requestWaybillDocument);
        $this->setRequestDHLCustomsInvoice($requestDHLCustomsInvoice);
    }

    /**
     * Returns the request waybill document option.
     *
     * @return RequestWaybillDocument
     */
    public function getRequestWaybillDocument(): RequestWaybillDocument
    {
        return $this->RequestWaybillDocument;
    }

    /**
     * Sets the delivery option.
     *
     * @param RequestWaybillDocument $requestWaybillDocument The waybill document request option.
     *
     * @return self
     */
    public function setRequestWaybillDocument(RequestWaybillDocument $requestWaybillDocument): LabelOptions
    {
        $this->RequestWaybillDocument = $requestWaybillDocument;
        return $this;
    }

    public function getRequestDHLCustomsInvoice()
    {
        return $this->RequestDHLCustomsInvoice;
    }

    public function getRequestDHLCustomsInvoiceType()
    {
        return $this->DHLCustomsInvoiceType;
    }

    public function setRequestDHLCustomsInvoice(RequestDHLCustomsInvoice $requestDHLCustomsInvoice, $dhlCustomsInvoiceType = self::PROFORMA_INVOICE)
    {
        $this->RequestDHLCustomsInvoice = $requestDHLCustomsInvoice;
        $this->DHLCustomsInvoiceType = $dhlCustomsInvoiceType;
        return $this;
    }
}
