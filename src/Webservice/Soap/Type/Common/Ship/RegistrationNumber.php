<?php

namespace Dhl\Express\Webservice\Soap\Type\Common\Ship;

class RegistrationNumber
{
    /** @var string */
    var $Number;

    /** @var string Registration number type : VAT, EOR, EIN.... */
    var $NumberTypeCode;

    /** @var */
    var $NumberIssuerCountryCode;

    /** Value-Added tax */
    const VAT = 'VAT';
    /** Employer Identification Number */
    const EIN = 'EIN';
    /** Goods and Service Tax */
    const GST = 'GST';
    /** Social Security Number */
    const SSN = 'SSN';
    /** European Union Registration and Identification */
    const EORI = 'EOR';
    /** Data Universal Number System */
    const DUNS = 'DUN';
    /** Federal Tax ID */
    const FED = 'FED';
    /** State Tax ID */
    const STA = 'STA';
    /** Brazil CNPJ/CPF Federal Tax */
    const CNPJ = 'CNP';
    /** Brazil type IE/RG Federal Tax */
    const IE = 'IE';
    /** Russia bank details section - INN */
    const INN = 'INN';
    /** Russia bank details section - KPP */
    const KPP = 'KPP';
    /** Russia bank details section - OGRN */
    const OGRN = 'OGR';
    /** Russia bank details section – OKPO */
    const OKPO = 'OKP';
    /** Germany Movement Reference Number */
    const MRN = 'MRN';
    /** Overseas Registered Supplier GST Number */
    const OSR = 'OSR';

    public function __construct($number, $numberTypeCode, $countryCode)
    {
        $this->Number = $number;
        $this->NumberTypeCode = $numberTypeCode;
        $this->NumberIssuerCountryCode = $countryCode;
    }

}