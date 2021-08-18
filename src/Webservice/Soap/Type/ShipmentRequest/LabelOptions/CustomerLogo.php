<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\LabelOptions;

class CustomerLogo
{
    private $LogoImage;

    private $LogoImageFormat;

    const FORMAT_JPEG = "JPEG";
    const FORMAT_JPG = "JPG";
    const FORMAT_PNG = "PNG";
    const FORMAT_GIF = "GIF";

    public function __construct(string $logoImage, string $logoImageFormat)
    {
        $this->LogoImage = $logoImage;
        $this->LogoImageFormat = $logoImageFormat;
    }

    public function getLogoImage()
    {
        return $this->LogoImage;
    }

    public function getLogoImageFormat()
    {
        return $this->LogoImageFormat;
    }
}