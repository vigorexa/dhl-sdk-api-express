<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration;


class InvoiceSignatureDetails
{
    /** @var string Name of signatory */
    private $SignatureName;

    /** @var string Title of signatory */
    private $SignatureTitle;

    /** @var string Signature image in base64 format. Max of size is 1 MB. Valid format of image are: PNG, GIF, JPEG, JPG */
    private $SignatureImage;

    /**
     * InvoiceSignature constructor.
     *
     * @param string $name
     * @param string $title
     * @param string $image
     */
    public function __construct(string $name, string $title, string $image) {
        $this->SignatureName = $name;
        $this->SignatureTitle = $title;
        $this->SignatureImage = $image;
    }

    /**
     * @return string
     */
    public function getSignatureName(): string {
        return $this->SignatureName;
    }

    /**
     * @return string
     */
    public function getSignatureTitle(): string {
        return $this->SignatureTitle;
    }

    /**
     * @return string
     */
    public function getSignatureImage(): string {
        return $this->SignatureImage;
    }

}