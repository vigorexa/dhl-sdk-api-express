<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentEventInterface;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceArea;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceEvent;

/**
 * Shipping event class.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentEvent implements ShipmentEventInterface
{
    /**
     * Event date
     *
     * @var string
     */
    private $date;

    /**
     * Event time
     *
     * @var string
     */
    private $time;

    /**
     * @var ServiceArea
     */
    private $serviceArea;

    /**
     * @var ServiceEvent
     */
    private $serviceEvent;

    // Progress Event Codes
    const AGREED_DELIVERY = 'AD';
    const ARRIVED_FACILITY = 'AF';
    const ARRIVED_IN_DELIVERY_FACILITY = 'AR';
    const CUSTOMER_BROKER_NOTIFIED = 'BN';
    const AWAITING_CONSIGNEE_COLLECTION = 'CC';
    const CLEARANCE_RELEASE = 'CR';
    const DEPART_FACILITY = 'DF';
    const FORWARDED_TO_THIRD_PARTY_DETAILS_EXPECTED = 'FD';
    const IN_CLEARANCE_PROCESSING = 'IC';
    const PROCESSED_AT_LOCATION = 'PL';
    const SHIPMENT_PICKUP = 'PU';
    const SHIPMENT_ACKNOWLEDGED = 'SA';
    const RECORD_OF_TRANSIT = 'TR';
    const WITH_DELIVERY_COURIER = 'WC';

    // Service Incident Event Codes
    const BAD_ADDRESS = 'BA';
    const CLOSED_ON_ARRIVAL = 'CA';
    const CONTROLLABLE_CLEARANCE_DELAY = 'CD';
    const CUSTOMER_MOVED = 'CM';
    const HELD_FOR_PAYMENT = 'HP';
    const MISSED_DELIVERY_CYCLE = 'MD';
    const MISCODE = 'MC';
    const MISSORT = 'MS';
    const NOT_HOME = 'NH';
    const ON_HOLD = 'OH';
    const REFUSED_DELIVERY = 'RD';
    const SERVICE_CHANGED = 'SC';
    const UNCONTROLLABLE_CLEARANCE_DELAY = 'UD';

    // Completion Event Codes
    const CLEARED_AND_DELIVERED_BY_CUSTOMS_BROKER = 'BR';
    const CLOSED_SHIPMENT = 'CS';
    const DELIVERED_DAMAGED = 'DD';
    const DESTROYED_DISPOSAL = 'DS';
    const PARTIAL_DELIVERY = 'PD';
    const DELIVERY = 'OK';
    const RETURNED_TO_CONSIGNOR = 'RT';
    const SHIPMENT_STOPPED = 'SS';
    const FORWARDED_TO_THIRD_PARTY_NO_DETAILS_EXPECTED = 'TP';

    /**
     * @var string[]
     */
    static $progressEventCodes = [
        self::AGREED_DELIVERY,
        self::ARRIVED_FACILITY,
        self::ARRIVED_IN_DELIVERY_FACILITY,
        self::CUSTOMER_BROKER_NOTIFIED,
        self::AWAITING_CONSIGNEE_COLLECTION,
        self::CLEARANCE_RELEASE,
        self::DEPART_FACILITY,
        self::FORWARDED_TO_THIRD_PARTY_DETAILS_EXPECTED,
        self::IN_CLEARANCE_PROCESSING,
        self::PROCESSED_AT_LOCATION,
        self::SHIPMENT_PICKUP,
        self::SHIPMENT_ACKNOWLEDGED,
        self::RECORD_OF_TRANSIT,
        self::WITH_DELIVERY_COURIER,
    ];

    /**
     * @var string[]
     */
    static $incidentEventCodes = [
        self::BAD_ADDRESS,
        self::CLOSED_ON_ARRIVAL,
        self::CONTROLLABLE_CLEARANCE_DELAY,
        self::CUSTOMER_MOVED,
        self::HELD_FOR_PAYMENT,
        self::MISSED_DELIVERY_CYCLE,
        self::MISCODE,
        self::MISSORT,
        self::NOT_HOME,
        self::ON_HOLD,
        self::REFUSED_DELIVERY,
        self::SERVICE_CHANGED,
        self::UNCONTROLLABLE_CLEARANCE_DELAY,
    ];

    /**
     * @var string[]
     */
    static $completionEventCodes = [
        self::CLEARED_AND_DELIVERED_BY_CUSTOMS_BROKER,
        self::CLOSED_SHIPMENT,
        self::DELIVERED_DAMAGED,
        self::DESTROYED_DISPOSAL,
        self::PARTIAL_DELIVERY,
        self::DELIVERY,
        self::RETURNED_TO_CONSIGNOR,
        self::SHIPMENT_STOPPED,
        self::FORWARDED_TO_THIRD_PARTY_NO_DETAILS_EXPECTED,
    ];

    const EVENT_TYPE_COMPLETION = 'completion';
    const EVENT_TYPE_PROGRESS = 'progress';
    const EVENT_TYPE_INCIDENT = 'incident';

    /**
     * ShipmentEvent constructor.
     *
     * @param string $date
     * @param string $time
     * @param ServiceArea $serviceArea
     * @param ServiceEvent $serviceEvent
     */
    public function __construct($date, $time, ServiceArea $serviceArea, ServiceEvent $serviceEvent) {
        $this->date = $date;
        $this->time = $time;
        $this->serviceArea = $serviceArea;
        $this->serviceEvent = $serviceEvent;
    }

    public function getDate() {
        return (string)$this->date;
    }

    public function getTime() {
        return (string)$this->time;
    }

    public function getLocationDescription() {
        return (string)$this->serviceArea->getDescription();
    }

    public function getLocationCode() {
        return (string)$this->serviceArea->getServiceAreaCode();
    }

    public function getDescription() {
        return (string)$this->serviceEvent->getDescription();
    }

    public function getEventCode() {
        return (string)$this->serviceEvent->getEventCode();
    }

    public function getEventType() {
        if (in_array($this->getEventCode(), self::$progressEventCodes)) {
            return self::EVENT_TYPE_PROGRESS;
        } elseif (in_array($this->getEventCode(), self::$completionEventCodes)) {
            return self::EVENT_TYPE_COMPLETION;
        } elseif (in_array($this->getEventCode(), self::$incidentEventCodes)) {
            return self::EVENT_TYPE_INCIDENT;
        }

        return "unknown";
    }
}
