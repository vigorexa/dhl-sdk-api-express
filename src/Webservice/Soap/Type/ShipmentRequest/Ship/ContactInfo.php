<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address as ShipmentAddress;

/**
 * The contact info section.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ContactInfo
{
    /**
     * The contact.
     *
     * @var Contact
     */
    protected $Contact;

    /**
     * The address.
     *
     * @var ShipmentAddress
     */
    protected $Address;

    /**
     * @var RegistrationNumbers
     */
    private $RegistrationNumbers;

    /**
     * Constructor.
     *
     * @param Contact $contact The contact
     * @param ShipmentAddress $address The address
     */
    public function __construct(Contact $contact, ShipmentAddress $address, RegistrationNumbers $registrationNumbers = null)
    {
        $this->setContact($contact)
            ->setAddress($address);
        if ($registrationNumbers) {
            $this->setRegistrationNumbers($registrationNumbers);
        }
    }

    /**
     * Returns the contact.
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * Sets the contact.
     *
     * @param Contact $contact The contact.
     *
     * @return self
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }

    /**
     * Returns the address.
     *
     * @return ShipmentAddress
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Sets the address.
     *
     * @param ShipmentAddress $address The address
     *
     * @return self
     */
    public function setAddress(ShipmentAddress $address)
    {
        $this->Address = $address;
        return $this;
    }

    private function setRegistrationNumbers(RegistrationNumbers $registrationNumbers)
    {
        $this->RegistrationNumbers = $registrationNumbers;

        return $this;
    }

    public function getRegistrationNumbers()
    {
        return $this->RegistrationNumbers;
    }
}
