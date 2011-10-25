<?php

/**
 * This class is a phone prefix instance and also contains the country phone prefixes as static information.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_PhonePrefix {
	/**
	 * Prefix instance.
	 * @var string
	 */
	protected $prefix = "";

	/**
	 * All phone prefixes.
	 * @var array
	 */
	protected static $prefixes = array(
		"+1" => array("US", "CA"),
		"+1 242" => array("BS"),
		"+1 246" => array("BB"),
		"+1 264" => array("AI"),
		"+1 268" => array("AG"),
		"+1 284" => array("VG"),
		"+1 340" => array("VI"),
		"+1 345" => array("KY"),
		"+1 441" => array("BM"),
		"+1 473" => array("GD"),
		"+1 649" => array("TC"),
		"+1 664" => array("MS"),
		"+1 670" => array("MP"),
		"+1 671" => array("GU"),
		"+1 684" => array("AS"),
		"+1 758" => array("LC"),
		"+1 767" => array("DM"),
		"+1 784" => array("VC"),
		"+1 787" => array("PR"),
		"+1 809" => array("DO"),
		"+1 829" => array("DO"),
		"+1 849" => array("DO"),
		"+1 868" => array("TT"),
		"+1 869" => array("KN"),
		"+1 876" => array("JM"),
		"+1 939" => array("PR"),
		"+20" => array("EG"),
		"+210" => array(),
		"+211" => array(),
		"+212" => array("MA", "EH"),
		"+213" => array("DZ"),
		"+214" => array(),
		"+215" => array(),
		"+216" => array("TN"),
		"+217" => array(),
		"+218" => array("LY"),
		"+219" => array(),
		"+220" => array("GM"),
		"+221" => array("SN"),
		"+222" => array("MR"),
		"+223" => array("ML"),
		"+224" => array("GN"),
		"+225" => array("CI"),
		"+226" => array("BF"),
		"+227" => array("NE"),
		"+228" => array("TG"),
		"+229" => array("BJ"),
		"+230" => array("MU"),
		"+231" => array("LR"),
		"+232" => array("SL"),
		"+233" => array("GH"),
		"+234" => array("NG"),
		"+235" => array("TD"),
		"+236" => array("CF"),
		"+237" => array("CM"),
		"+238" => array("CV"),
		"+239" => array("ST"),
		"+240" => array("GQ"),
		"+241" => array("GA"),
		"+242" => array("CG"),
		"+243" => array("CD"),
		"+244" => array("AO"),
		"+245" => array("GW"),
		"+246" => array("IO"),
		"+247" => array("AC"),
		"+248" => array("SC"),
		"+249" => array("SD"),
		"+250" => array("RW"),
		"+251" => array("ET"),
		"+252" => array("SO", "QS"),
		"+253" => array("DJ"),
		"+254" => array("KE"),
		"+255" => array("TZ"),
		"+256" => array("UG"),
		"+257" => array("BI"),
		"+258" => array("MZ"),
		"+259" => array(),
		"+260" => array("ZM"),
		"+261" => array("MG"),
		"+262" => array("RE", "YT"),
		"+263" => array("ZW"),
		"+264" => array("NA"),
		"+265" => array("MW"),
		"+266" => array("LS"),
		"+267" => array("BW"),
		"+268" => array("SZ"),
		"+269" => array("KM"),
		"+27" => array("ZA"),
		"+28" => array(),
		"+290" => array("SH", "TA"),
		"+291" => array("ER"),
		"+292" => array(),
		"+293" => array(),
		"+294" => array(),
		"+295" => array(),
		"+296" => array(),
		"+297" => array("AW"),
		"+298" => array("FO"),
		"+299" => array("GL"),
		"+30" => array("GR"),
		"+31" => array("NL"),
		"+32" => array("BE"),
		"+33" => array("FR"),
		"+34" => array("ES"),
		"+350" => array("GI"),
		"+351" => array("PT"),
		"+352" => array("LU"),
		"+353" => array("IE"),
		"+354" => array("IS"),
		"+355" => array("AL"),
		"+356" => array("MT"),
		"+357" => array("CY"),
		"+358" => array("FI", "AX"),
		"+359" => array("BG"),
		"+36" => array("HU"),
		"+370" => array("LT"),
		"+371" => array("LV"),
		"+372" => array("EE"),
		"+373" => array("MD"),
		"+374" => array("AM", "QN"),
		"+375" => array("BY"),
		"+376" => array("AD"),
		"+377" => array("MC"),
		"+378" => array("SM"),
		"+379" => array("VA"),
		"+380" => array("UA"),
		"+381" => array("RS"),
		"+382" => array("ME"),
		"+383" => array(),
		"+384" => array(),
		"+385" => array("HR"),
		"+386" => array("SI"),
		"+387" => array("BA"),
		"+388" => array("EU"),
		"+389" => array("MK"),
		"+39" => array("IT", "VA"),
		"+40" => array("RO"),
		"+41" => array("CH"),
		"+420" => array("CZ"),
		"+421" => array("SK"),
		"+422" => array(),
		"+423" => array("LI"),
		"+424" => array(),
		"+425" => array(),
		"+426" => array(),
		"+427" => array(),
		"+428" => array(),
		"+429" => array(),
		"+43" => array("AT"),
		"+44" => array("GB", "GG", "IM", "JE"),
		"+45" => array("DK"),
		"+46" => array("SE"),
		"+47" => array("NO", "SJ"),
		"+48" => array("PL"),
		"+49" => array("DE"),
		"+500" => array("FK"),
		"+501" => array("BZ"),
		"+502" => array("GT"),
		"+503" => array("SV"),
		"+504" => array("HN"),
		"+505" => array("NI"),
		"+506" => array("CR"),
		"+507" => array("PA"),
		"+508" => array("PM"),
		"+509" => array("HT"),
		"+51" => array("PE"),
		"+52" => array("MX"),
		"+53" => array("CU"),
		"+54" => array("AR"),
		"+55" => array("BR"),
		"+56" => array("CL"),
		"+57" => array("CO"),
		"+58" => array("VE"),
		"+590" => array("GP", "BL", "MF"),
		"+591" => array("BO"),
		"+592" => array("GY"),
		"+593" => array("EC"),
		"+594" => array("GF"),
		"+595" => array("PY"),
		"+596" => array("MQ"),
		"+597" => array("SR"),
		"+598" => array("UY"),
		"+599" => array("AN"),
		"+60" => array("MY"),
		"+61" => array("AU", "CX", "CC"),
		"+62" => array("ID"),
		"+63" => array("PH"),
		"+64" => array("NZ"),
		"+65" => array("SG"),
		"+66" => array("TH"),
		"+670" => array("TL"),
		"+671" => array(),
		"+672" => array("NF", "AQ"),
		"+673" => array("BN"),
		"+674" => array("NR"),
		"+675" => array("PG"),
		"+676" => array("TO"),
		"+677" => array("SB"),
		"+678" => array("VU"),
		"+679" => array("FJ"),
		"+680" => array("PW"),
		"+681" => array("WF"),
		"+682" => array("CK"),
		"+683" => array("NU"),
		"+684" => array(),
		"+685" => array("WS"),
		"+686" => array("KI"),
		"+687" => array("NC"),
		"+688" => array("TV"),
		"+689" => array("PF"),
		"+690" => array("TK"),
		"+691" => array("FM"),
		"+692" => array("MH"),
		"+693" => array(),
		"+694" => array(),
		"+695" => array(),
		"+696" => array(),
		"+697" => array(),
		"+698" => array(),
		"+699" => array(),
		"+7" => array("RU", "KZ"),
		"+800" => array("XT"),
		"+801" => array(),
		"+802" => array(),
		"+803" => array(),
		"+804" => array(),
		"+805" => array(),
		"+806" => array(),
		"+807" => array(),
		"+808" => array("XS"),
		"+809" => array(),
		"+81" => array("JP"),
		"+82" => array("KR"),
		"+83" => array(),
		"+84" => array("VN"),
		"+850" => array("KP"),
		"+851" => array(),
		"+852" => array("HK"),
		"+853" => array("MO"),
		"+854" => array(),
		"+855" => array("KH"),
		"+856" => array("LA"),
		"+857" => array("XN"),
		"+858" => array("XN"),
		"+859" => array(),
		"+86" => array("CN"),
		"+870" => array("XN"),
		"+871" => array(),
		"+872" => array(),
		"+873" => array(),
		"+874" => array(),
		"+875" => array(),
		"+876" => array(),
		"+877" => array(),
		"+878" => array("XP"),
		"+879" => array(),
		"+880" => array("BD"),
		"+881" => array("XG"),
		"+882" => array("XV"),
		"+883" => array("XL"),
		"+884" => array(),
		"+885" => array(),
		"+886" => array("TW"),
		"+887" => array(),
		"+888" => array("XD"),
		"+889" => array(),
		"+89" => array(),
		"+90" => array("TR", "QY"),
		"+91" => array("IN"),
		"+92" => array("PK"),
		"+93" => array("AF"),
		"+94" => array("LK"),
		"+95" => array("MM"),
		"+960" => array("MV"),
		"+961" => array("LB"),
		"+962" => array("JO"),
		"+963" => array("SY"),
		"+964" => array("IQ"),
		"+965" => array("KW"),
		"+966" => array("SA"),
		"+967" => array("YE"),
		"+968" => array("OM"),
		"+969" => array(),
		"+970" => array("PS"),
		"+971" => array("AE"),
		"+972" => array("IL"),
		"+973" => array("BH"),
		"+974" => array("QA"),
		"+975" => array("BT"),
		"+976" => array("MN"),
		"+977" => array("NP"),
		"+978" => array(),
		"+979" => array("XR"),
		"+98" => array("IR"),
		"+990" => array(),
		"+991" => array("XC"),
		"+992" => array("TJ"),
		"+993" => array("TM"),
		"+994" => array("AZ", "QN"),
		"+995" => array("GE"),
		"+996" => array("KG"),
		"+997" => array(),
		"+998" => array("UZ"),
		"+999" => array()
	);
	/**
	 * Creates an instance with a prefix.
	 * @param string $prefix
	 * @throws I18N_Unknown if the phone prefix doesn't exist.
	 */
	function __construct($prefix) {
		if (!array_key_exists($prefix, self::$prefixes)) {
			throw new I18N_Unknown($prefix);
		}
		$this->prefix = $prefix;
	}

	/**
	 * Returns the country list for the prefix. (May be a empty array)
	 * @return array of country codes
	 */
	function getCountry() {
		return $this->prefixes[$this->prefix];
	}
	/**
	 * Get a prefix for a given country.
	 * @param I18N_Country $country
	 * @return I18N_PhonePrefix
	 * @throws I18N_Unknown if the given country has no dedicated phone prefix.
	 */
	static function getByCountry(I18N_Country $country) {
		$code = $country->getCode();
		$prefix = false;
		foreach (self::$prefixes as $candidate => $countries) {
			if (in_array($code, $countries)) {
				$prefix = $candidate;
				break;
			}
		}
		if ($prefix) {
			return new I18N_PhonePrefix($prefix);
		} else {
			throw new I18N_Unknown();
		}
	}
	/**
	 * Get a list of all phone prefixes.
	 * @return array
	 */
	static function getAllPrefix() {
		return self::$prefixes;
	}
}
