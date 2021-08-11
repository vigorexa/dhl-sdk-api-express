<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentResponse;

/**
 */
class Document
{
    public function __construct($documentName, $DocumentImage, $DocumentFormat)
    {
        $this->DocumentName = $documentName;
        $this->DocumentImage = $DocumentImage;
        $this->DocumentFormat = $DocumentFormat;
    }

    /**
     * @var null|string
     */
    private $DocumentFormat;

    /**
     * @var string
     */
    private $DocumentImage;

    /**
     * @var string
     */
    private $DocumentName;

    /**
     * @return string|null
     */
    public function getDocumentFormat(): ?string
    {
        return $this->DocumentFormat;
    }

    /**
     * @return string
     */
    public function getDocumentImage(): string
    {
        return $this->DocumentImage;
    }

    /**
     * @return string
     */
    public function getDocumentName(): string
    {
        return $this->DocumentName;
    }

}
