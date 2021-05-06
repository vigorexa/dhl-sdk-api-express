<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\TrackingRequestInterface;

/**
 * Tracking Request Builder Interface.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface TrackingRequestBuilderInterface
{
    /**
     * Sets the tracking message.
     *
     * @param int $time
     * @param string $reference
     * @return TrackingRequestBuilderInterface
     */
    public function setMessage($time, $reference);

    /**
     * Sets the tracking AWB numbers.
     *
     * @param string[] $awbNumbers
     * @return TrackingRequestBuilderInterface
     */
    public function setAwbNumbers(array $awbNumbers);

    /**
     * Adds a tracking AWB number.
     *
     * @param string $awbNumber
     * @return TrackingRequestBuilderInterface
     */
    public function addAwbNumber($awbNumber);

    /**
     * Sets the tracking Licence Plate numbers.
     *
     * @param string[] $lpNumbers
     * @return TrackingRequestBuilderInterface
     */
    public function setLpNumbers(array $lpNumbers);

    /**
     * Adds a tracking Licence Plate number.
     *
     * @param string $lpNumber
     * @return TrackingRequestBuilderInterface
     */
    public function addLpNumber($lpNumber);

    /**
     * Sets the tracking's level of details.
     *
     * @param string $levelOfDetails
     * @return TrackingRequestBuilderInterface
     */
    public function setLevelOfDetails($levelOfDetails);

    /**
     * Sets the tracking's pieces enabled code.
     *
     * @param string $piecesEnabled
     * @return TrackingRequestBuilderInterface
     */
    public function setPiecesEnabled($piecesEnabled);

    /**
     * Sets if the estimated delivery date should be displayed in the response, if available
     *
     * @param bool $eddRequested
     * @return TrackingRequestBuilderInterface
     */
    public function setEstimatedDeliveryDateRequested($eddRequested);

    /**
     * The language code requested by user.
     * @see LanguageCode
     *
     * @param $languageCode
     * @return TrackingRequestBuilderInterface
     */
    public function setLanguageCode($languageCode);

    /**
     * Builds the tracking request instance.
     *
     * @return TrackingRequestInterface
     */
    public function build();
}
