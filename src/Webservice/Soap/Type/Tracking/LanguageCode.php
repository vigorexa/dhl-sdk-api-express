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

    /**
     * @var string[]
     */
    static $supportedLanguageCodes = [
        "en" => self::ENG,
        "fr" => self::FRE,
        "ba" => self::BAK,
        "bg" => self::BUL,
        "cs" => self::CZE,
        "da" => self::DAN,
        "de" => self::GER,
        "ee" => self::EWE,
        "el" => self::GRE,
        "es" => self::SPA,
        "et" => self::EST,
        "fi" => self::FIN,
        "he" => self::HEB,
        "hr" => self::HRV,
        "hu" => self::HUN,
        "id" => self::IND,
        "it" => self::ITA,
        "ja" => self::JPN,
        "ko" => self::KOR,
        "lt" => self::LIT,
        "lv" => self::LAV,
        "mk" => self::MAC,
        "nl" => self::DUT,
        "no" => self::NOR,
        "pl" => self::POL,
        "pt" => self::POR,
        "ro" => self::RUM,
        "ru" => self::RUS,
        "sc" => self::SRD,
        "sk" => self::SLO,
        "sl" => self::SLV,
        "sq" => self::ALB,
    ];

    /**
     * @param string $iso2
     * @return string
     */
    public static function isoToDhlLanguageCode(string $iso2) {
        if (strlen($iso2) === 3) {
            return $iso2;
        }
        return array_key_exists($iso2, self::$supportedLanguageCodes) ? self::$supportedLanguageCodes[$iso2] : $iso2;
    }
}
