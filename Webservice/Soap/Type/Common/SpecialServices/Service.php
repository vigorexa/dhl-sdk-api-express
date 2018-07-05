<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;

use Dhl\Express\Webservice\Soap\Type\Common\CurrencyCode;
use Dhl\Express\Webservice\Soap\Type\Common\Date;
use Dhl\Express\Webservice\Soap\Type\Common\Money;

/**
 * A special service.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Service
{
    /**
     * Enter II if you wish to get a quote for Insurance with your prospect shipment. If not needed
     * then leave the SpecialServices section out.
     *
     * @var ServiceType
     */
    private $ServiceType;

    /**
     * Monetary value of service (e.g. Insured Value) – this is needed if you wish to get a quote on
     * Insurance with your prospect shipment.
     *
     * @var null|Money
     */
    private $ServiceValue;

    /**
     * Currency code – this is needed if you wish to get a quote on Insurance with your prospect shipment.
     *
     * @var null|CurrencyCode
     */
    private $CurrencyCode;

    /**
     * For future use.
     *
     * @var null|PaymentCode
     */
    private $PaymentCode;

    /**
     * For future use.
     *
     * @var null|Date
     */
    private $StartDate;

    /**
     * For future use.
     *
     * @var null|Date
     */
    private $EndDate;

    /**
     * For future use.
     *
     * @var null|TextInstruction
     */
    private $TextInstruction;

    /**
     * Constructor.
     *
     * @param string $serviceType The service type
     */
    public function __construct(string $serviceType)
    {
        $this->setServiceType($serviceType);
    }

    /**
     * Returns the service type.
     *
     * @return ServiceType
     */
    public function getServiceType(): ServiceType
    {
        return $this->ServiceType;
    }

    /**
     * Sets the service type.
     *
     * @param string $serviceType The service type
     *
     * @return self
     */
    public function setServiceType(string $serviceType): Service
    {
        $this->ServiceType = new ServiceType($serviceType);
        return $this;
    }

    /**
     * Returns the service value.
     *
     * @return null|Money
     */
    public function getServiceValue(): ?Money
    {
        return $this->ServiceValue;
    }

    /**
     * Sets the service value.
     *
     * @param float $serviceValue The service value
     *
     * @return self
     */
    public function setServiceValue(float $serviceValue): Service
    {
        $this->ServiceValue = new Money($serviceValue);
        return $this;
    }

    /**
     * Returns the currency code.
     *
     * @return null|CurrencyCode
     */
    public function getCurrencyCode(): ?CurrencyCode
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets the currency code.
     *
     * @param string $currencyCode The currency code
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): Service
    {
        $this->CurrencyCode = new CurrencyCode($currencyCode);
        return $this;
    }

    /**
     * Returns the payment code.
     *
     * @return null|PaymentCode
     */
    public function getPaymentCode(): ?PaymentCode
    {
        return $this->PaymentCode;
    }

    /**
     * Sets the payment code.
     *
     * @param string $paymentCode The payment code
     *
     * @return self
     */
    public function setPaymentCode(string $paymentCode): Service
    {
        $this->PaymentCode = new PaymentCode($paymentCode);
        return $this;
    }

    /**
     * Returns the start date.
     *
     * @return null|Date
     */
    public function getStartDate(): ?Date
    {
        return $this->StartDate;
    }

    /**
     * Sets the start date.
     *
     * @param int|string|\DateTime $startDate The start date (timestamp, date string or \DateTime instance)
     *
     * @return self
     */
    public function setStartDate($startDate): Service
    {
        $this->StartDate = new Date($startDate);
        return $this;
    }

    /**
     * Returns the end date.
     *
     * @return null|Date
     */
    public function getEndDate(): ?Date
    {
        return $this->EndDate;
    }

    /**
     * Sets the end date
     *
     * @param int|string|\DateTime $endDate The end date (timestamp, date string or \DateTime instance)
     *
     * @return self
     */
    public function setEndDate($endDate): Service
    {
        $this->EndDate = new Date($endDate);
        return $this;
    }

    /**
     * Returns the text instruction.
     *
     * @return null|TextInstruction
     */
    public function getTextInstruction(): ?TextInstruction
    {
        return $this->TextInstruction;
    }

    /**
     * Sets the text instruction.
     *
     * @param string $textInstruction The text instruction
     *
     * @return self
     */
    public function setTextInstruction(string $textInstruction): Service
    {
        $this->TextInstruction = new TextInstruction($textInstruction);
        return $this;
    }
}
