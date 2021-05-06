<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * LevelOfDetails class.
 *
 * @api
 */
class LanguageCode {

    const __DEFAULT = 'eng';
    const ENG = 'eng'; // English
    const FRE = 'fre'; // French
    const BAK = 'bak'; // Bashkir
    const BUL = 'bul'; // Bulgarian
    const CZE = 'cze'; // Czech
    const DAN = 'dan'; // Danish
    const GER = 'ger'; // German
    const EWE = 'ewe'; // Ewé
    const GRE = 'gre'; // Greek
    const SPA = 'spa'; // Spanish
    const EST = 'est'; // Estonian
    const FIN = 'fin'; // Finnish
    const HEB = 'heb'; // Hebrew
    const HRV = 'hrv'; // Croatian
    const HUN = 'hun'; // Hungarian
    const IND = 'ind'; // Indonesian
    const ITA = 'ita'; // Italian
    const JPN = 'jpn'; // Japanese
    const KOR = 'kor'; // Korean
    const LIT = 'lit'; // Lithuanian
    const LAV = 'lav'; // Latvian
    const MAC = 'mac'; // Macedonian
    const DUT = 'dut'; // Dutch
    const NOR = 'nor'; // Norwegian
    const POL = 'pol'; // Polish
    const POR = 'por'; // Portuguese
    const RUM = 'rum'; // Romanian
    const RUS = 'rus'; // Russian
    const SRD = 'srd'; //
    const SLO = 'slo'; // Slovak
    const SLV = 'slv'; // Slovenian
    const ALB = 'alb'; // Albanian

    static $supportedLanguageCodes = [
        self::ENG,
        self::FRE,
        self::BAK,
        self::BUL,
        self::CZE,
        self::DAN,
        self::GER,
        self::EWE,
        self::GRE,
        self::SPA,
        self::EST,
        self::FIN,
        self::HEB,
        self::HRV,
        self::HUN,
        self::IND,
        self::ITA,
        self::JPN,
        self::KOR,
        self::LIT,
        self::LAV,
        self::MAC,
        self::DUT,
        self::NOR,
        self::POL,
        self::POR,
        self::RUM,
        self::RUS,
        self::SRD,
        self::SLO,
        self::SLV,
        self::ALB,
    ];
}
