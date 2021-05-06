<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\Tracking\MessageInterface;
use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Webservice\Soap\Type\Tracking\LanguageCode;

/**
 * TrackingRequest Class.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingRequest implements TrackingRequestInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var string[]
     */
    private $awbNumbers;

    /**
     * @var string[]
     */
    private $lpNumbers;

    /**
     * @var string
     */
    private $levelOfDetails;

    /**
     * @var string
     */
    private $piecesEnabled;

    /**
     * @var bool
     */
    private $estimatedDeliveryDate;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * TrackingRequest constructor.
     *
     * @param MessageInterface $message
     * @param string[]         $awbOrLpNumbers
     * @param string           $levelOfDetails
     * @param string           $piecesEnabled
     * @param bool             $estimatedDeliveryDate
     * @param string           $languageCode
     * @param bool             $useLpNumbers
     */
    public function __construct(
        MessageInterface $message,
        array $awbOrLpNumbers,
        string $levelOfDetails,
        string $piecesEnabled,
        bool $estimatedDeliveryDate,
        string $languageCode = LanguageCode::__DEFAULT,
        bool $useLpNumbers = false
    ) {
        $this->message = $message;
        if ($useLpNumbers) {
            $this->lpNumbers = $awbOrLpNumbers;
        } else {
            $this->awbNumbers = $awbOrLpNumbers;
        }
        $this->levelOfDetails = $levelOfDetails;
        $this->piecesEnabled = $piecesEnabled;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        if (!in_array($languageCode, LanguageCode::$supportedLanguageCodes)) {
            throw new \InvalidArgumentException("Unsupported language code $languageCode");
        }

        $this->languageCode = $languageCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAwbNumber()
    {
        return $this->awbNumbers;
    }

    public function getLpNumber()
    {
        return $this->lpNumbers;
    }

    public function getLevelOfDetails()
    {
        return (string) $this->levelOfDetails;
    }

    public function getPiecesEnabled()
    {
        return (string) $this->piecesEnabled;
    }

    public function isEstimatedDeliveryDateRequested()
    {
        return (bool) $this->estimatedDeliveryDate;
    }

    public function getLanguageCode()
    {
        return (string) $this->languageCode;
    }
}
