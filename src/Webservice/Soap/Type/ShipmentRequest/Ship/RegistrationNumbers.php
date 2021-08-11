<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Type\Common\Ship\RegistrationNumber;

class RegistrationNumbers
{
    /**
     * @var RegistrationNumber[] $RegistrationNumber
     */
    var $RegistrationNumber;

    public function __construct(RegistrationNumber $registrationNumber)
    {
        $this->setRegistrationNumber($registrationNumber);
    }

    public function setRegistrationNumber($registrationNumber)
    {
        $this->RegistrationNumber[] = $registrationNumber;
    }

    public function getRegistrationNumber()
    {
        return $this->RegistrationNumber;
    }

}