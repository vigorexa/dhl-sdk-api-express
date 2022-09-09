<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\DocumentImages\DocumentImage;

class DocumentImages
{
    /**
     * @var DocumentImage
     */
    private $DocumentImage;

    /**
     * @return DocumentImage
     */
    public function getDocumentImage(): DocumentImage
    {
        return $this->DocumentImage;
    }

    /**
     * @param DocumentImage $DocumentImage
     * @return DocumentImages
     */
    public function setDocumentImage(DocumentImage $DocumentImage): DocumentImages
    {
        $this->DocumentImage = $DocumentImage;
        return $this;
    }
}