<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking\TrackingInfo;

/**
 * ShipmentEvent interface.
 *
 * DTO that Tracking information's shipment event.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentEventInterface
{
    /**
     * Returns the event's date
     *
     * @return string
     */
    public function getDate();

    /**
     * Returns the event's time
     *
     * @return string
     */
    public function getTime();

    /**
     * Returns the event's location description
     *
     * @return string
     */
    public function getLocationDescription();

    /**
     * Returns the event's service area code
     *
     * @return string
     */
    public function getLocationCode();

    /**
     * Returns the event's description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Returns the event's code
     *
     * @return string
     */
    public function getEventCode();

    /**
     * Returns the event's type
     *
     * @return string
     */
    public function getEventType();
}
