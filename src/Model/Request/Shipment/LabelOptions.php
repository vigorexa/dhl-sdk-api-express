<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;

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

    public function __construct(bool $waybillDocumentRequested, bool $dhlCustomsInvoiceRequested = false)
    {
        $this->waybillDocumentRequested = $waybillDocumentRequested;
        $this->dhlCustomsInvoiceRequested = $dhlCustomsInvoiceRequested;
    }

    public function isWaybillDocumentRequested(): bool
    {
        return $this->waybillDocumentRequested;
    }

    public function isDHLCustomsInvoiceRequested(): bool
    {
        return $this->dhlCustomsInvoiceRequested;
    }
}
