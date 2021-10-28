<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

/**
 * The contact info section.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class BuyerContactInfo extends ContactInfo
{
    /**
     * Constructor.
     *
     * @param Contact $contact The buyer contact
     * @param Address $address The buyer address
     */
    public function __construct(Contact $contact, Address $address)
    {
        parent::__construct($contact, $address, null);
    }
}
