<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\DHLCustomsInvoiceLanguageCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions\DhlCustomsInvoiceType;

class LabelOptions implements LabelOptionsInterface
{
    /**
     * @var bool
     */
    private $waybillDocumentRequested;

    /**
     * @var bool
     */
    private $dhlCustomsInvoiceRequested;

    /**
     * @var string
     */
    private $dhlCustomsInvoiceLanguageCode;

    /**
     * @var string
     */
    private $dhlCustomsInvoiceType;

    /**
     * @var bool
     */
    private $barcodeInfoRequested = false;

    /**
     * @var bool
     */
    private $dhlLogoOnLabelRequested = true;

    /**
     * @var bool
     */
    private $shipmentReceiptRequested = false;

    /**
     * @var string
     */
    private $customerLogo;

    /**
     * @var string
     */
    private $customerLogoFormat;

    public function __construct(
        bool   $waybillDocumentRequested = true,
        bool   $dhlCustomsInvoiceRequested = false,
        string $dhlCustomsInvoiceType = DhlCustomsInvoiceType::COMMERCIAL_INVOICE
    )
    {
        $this->setWaybillDocumentRequested($waybillDocumentRequested);
        if ($dhlCustomsInvoiceRequested) {
            $this->setDHLCustomsInvoiceRequested($dhlCustomsInvoiceRequested);
            $this->setDHLCustomsInvoiceType($dhlCustomsInvoiceType);
        }
    }

    public function isWaybillDocumentRequested(): bool
    {
        return boolval($this->waybillDocumentRequested);
    }

    public function setWaybillDocumentRequested(bool $value): LabelOptions
    {
        $this->waybillDocumentRequested = $value;
        return $this;
    }

    public function isDHLCustomsInvoiceRequested(): bool
    {
        return boolval($this->dhlCustomsInvoiceRequested);
    }

    public function setDHLCustomsInvoiceRequested(bool $value): LabelOptions
    {
        $this->dhlCustomsInvoiceRequested = $value;
        return $this;
    }

    public function getDHLCustomsInvoiceType(): ?string
    {
        return $this->dhlCustomsInvoiceType ?: DhlCustomsInvoiceType::COMMERCIAL_INVOICE;
    }

    public function setDHLCustomsInvoiceType(string $value): LabelOptions
    {
        $this->dhlCustomsInvoiceType = $value;
        return $this;
    }

    public function isBarCodeInfoRequested(): bool
    {
        return $this->barcodeInfoRequested;
    }

    public function setBarcodeInfoRequest(bool $value): LabelOptions
    {
        $this->barcodeInfoRequested = $value;
        return $this;
    }

    public function isDHLLogoOnLabelRequested(): bool
    {
        return $this->dhlLogoOnLabelRequested;
    }

    public function setDHLLogoOnLabelRequested(bool $value): LabelOptions
    {
        $this->dhlLogoOnLabelRequested = $value;
        return $this;
    }

    public function isShipmentReceiptRequested(): bool
    {
        return $this->shipmentReceiptRequested;
    }

    public function setShipmentReceiptRequested(bool $isRequested): LabelOptions
    {
        $this->shipmentReceiptRequested = $isRequested;
        return $this;
    }

    public function getDhlCustomsInvoiceLanguageCode(): ?string
    {
        return $this->dhlCustomsInvoiceLanguageCode ?: DHLCustomsInvoiceLanguageCode::__DEFAULT;
    }

    public function setDhlCustomsInvoiceLanguageCode(string $languageCode): LabelOptions
    {
        $this->dhlCustomsInvoiceLanguageCode = $languageCode;
        return $this;
    }

    public function setCustomerLogo($customerLogo, $customerLogoFormat)
    {
        $this->customerLogo = $customerLogo;
        $this->customerLogoFormat = $customerLogoFormat;
        return $this;
    }

    public function getCustomerLogo()
    {
        return $this->customerLogo;
    }

    public function getCustomerLogoFormat()
    {
        return $this->customerLogoFormat;
    }
}
