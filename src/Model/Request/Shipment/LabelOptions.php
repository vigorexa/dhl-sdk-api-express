<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;
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
    private $dhlCustomsInvoiceType;

    public function __construct(bool $waybillDocumentRequested, bool $dhlCustomsInvoiceRequested = false, string $dhlCustomsInvoiceType = DhlCustomsInvoiceType::COMMERCIAL_INVOICE)
    {
        $this->waybillDocumentRequested = $waybillDocumentRequested;
        $this->dhlCustomsInvoiceRequested = $dhlCustomsInvoiceRequested;
        $this->dhlCustomsInvoiceType = $dhlCustomsInvoiceType;
    }

    public function isWaybillDocumentRequested(): bool
    {
        return $this->waybillDocumentRequested;
    }

    public function isDHLCustomsInvoiceRequested(): bool
    {
        return $this->dhlCustomsInvoiceRequested;
    }

    public function getDHLCustomsInvoiceType(): string
    {
        return $this->dhlCustomsInvoiceType;
    }
}
