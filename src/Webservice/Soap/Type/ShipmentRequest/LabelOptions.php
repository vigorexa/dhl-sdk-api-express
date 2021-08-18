<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\CustomerLogo;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\DHLCustomsInvoiceLanguageCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\DhlCustomsInvoiceType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestBarcodeInfo;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestDHLCustomsInvoice;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestDHLLogoOnLabel;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\RequestShipmentReceipt;
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
     * @var DhlCustomsInvoiceType
     */
    private $DHLCustomsInvoiceType;

    /**
     * @var CustomerLogo
     */
    private $CustomerLogo;

    /**
     * @var RequestBarcodeInfo
     */
    private $RequestBarcodeInfo;

    /**
     * @var RequestDHLLogoOnLabel
     */
    private $RequestDHLLogoOnLabel;

    /**
     * @var DHLCustomsInvoiceLanguageCode
     */
    private $DHLCustomsInvoiceLanguageCode;

    /**
     * @var RequestShipmentReceipt
     */
    private $RequestShipmentReceipt;

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

    public function getRequestDHLCustomsInvoice(): RequestDHLCustomsInvoice
    {
        return $this->RequestDHLCustomsInvoice;
    }

    public function getRequestDHLCustomsInvoiceType(): DhlCustomsInvoiceType
    {
        return $this->DHLCustomsInvoiceType;
    }

    public function setRequestDHLCustomsInvoice(
        RequestDHLCustomsInvoice      $requestDHLCustomsInvoice,
        DhlCustomsInvoiceType         $dhlCustomsInvoiceType,
        DHLCustomsInvoiceLanguageCode $dhlCustomsInvoiceLanguageCode): LabelOptions
    {
        $this->RequestDHLCustomsInvoice = $requestDHLCustomsInvoice;
        $this->DHLCustomsInvoiceType = $dhlCustomsInvoiceType;
        $this->DHLCustomsInvoiceLanguageCode = $dhlCustomsInvoiceLanguageCode;
        return $this;
    }

    public function setRequestBarcodeInfo(RequestBarcodeInfo $RequestBarcodeInfo)
    {
        $this->RequestBarcodeInfo = $RequestBarcodeInfo;
    }

    public function setRequestDHLLogoOnLabel(RequestDHLLogoOnLabel $requestDHLLogoOnLabel)
    {
        $this->RequestDHLLogoOnLabel = $requestDHLLogoOnLabel;
    }

    public function setDHLCustomsInvoiceLanguageCode(DHLCustomsInvoiceLanguageCode $customsInvoiceLanguageCode)
    {
        $this->DHLCustomsInvoiceLanguageCode = $customsInvoiceLanguageCode;
    }

    public function getRequestBarcodeInfo(): RequestBarcodeInfo
    {
        return $this->RequestBarcodeInfo;
    }

    public function getRequestDHLLogoOnLabel(): RequestDHLLogoOnLabel
    {
        return $this->RequestDHLLogoOnLabel;
    }

    public function setRequestShipmentReceipt(RequestShipmentReceipt $requestShipmentReceipt): LabelOptions
    {
        $this->RequestShipmentReceipt = $requestShipmentReceipt;
        return $this;
    }

    public function setCustomerLogo(CustomerLogo $customerLogo): LabelOptions
    {
        $this->CustomerLogo = $customerLogo;
        return $this;
    }

    /**
     * @return CustomerLogo
     */
    public function getCustomerLogo(): CustomerLogo
    {
        return $this->CustomerLogo;
    }
}
