<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\DocumentImages;

class DocumentImage
{

    public function __construct(string $encodedDocumentImage, ?string $imageFormat = null, ?string $imageType = null)
    {
        $this->DocumentImage = $encodedDocumentImage;
        $this->DocumentImageFormat = $imageFormat;
        $this->DocumentImageType = $imageType;
    }

    /** @var string Base64 document image */
    private $DocumentImage;

    const TYPE_INVOICE = "INV";
    const TYPE_PROFORMA = "PNV";
    const TYPE_CERTIFICATE_OF_ORIGIN = "COO";
    const TYPE_NAFTA_CERTIFICATE_OF_ORIGIN = "NAF";
    const TYPE_COMMERCIAL_INVOICE = "CIN";
    const TYPE_CUSTOMS_DECLARATION = "DCL";
    const TYPE_WAYBILL = "AWB";

    /**
     * Possible values;
     * - INV, Invoice
     * - PNV, Proforma
     * - COO, Certificate of Origin
     * - NAF, Nafta Certificate of Origin
     * - CIN, Commercial Invoice
     * - DCL, Custom Declaration
     * - AWB, Air Waybill and Waybill
     *
     * @var string
     */
    private $DocumentImageType;

    const FORMAT_PDF = "PDF";
    const FORMAT_PNG = "PNG";
    const FORMAT_TIFF = "TIFF";
    const FORMAT_GIF = "GIF";
    const FORMAT_JPEG = "JPEG";

    /**
     * Possible values;
     * - PDF
     * - PNG
     * - TIFF
     * - GIF
     * - JPEG
     *
     * @var string
     */
    private $DocumentImageFormat;

}