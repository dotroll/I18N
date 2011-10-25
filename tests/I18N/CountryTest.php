<?php

/**
 * This class tests the functionality of I18N_Country
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_CountryTest extends PHPUnit_Framework_TestCase {
	protected $countries = array(
		'AD', 'AE', 'AF', 'AG', 'AI', 'AL', 'AM', 'AO', 'AQ', 'AR', 'AS', 'AT',
		'AU', 'AW', 'AX', 'AZ', 'BA', 'BB', 'BD', 'BE', 'BF', 'BG', 'BH', 'BI',
		'BJ', 'BL', 'BM', 'BN', 'BO', 'BQ', 'BR', 'BS', 'BT', 'BV', 'BW', 'BY',
		'BZ', 'CA', 'CC', 'CD', 'CF', 'CG', 'CH', 'CI', 'CK', 'CL', 'CM', 'CN',
		'CO', 'CR', 'CU', 'CV', 'CW', 'CX', 'CY', 'CZ', 'DE', 'DJ', 'DK', 'DM',
		'DO', 'DZ', 'EC', 'EE', 'EG', 'EH', 'ER', 'ES', 'ET', 'FI', 'FJ', 'FK',
		'FM', 'FO', 'FR', 'GA', 'GB', 'GD', 'GE', 'GF', 'GG', 'GH', 'GI', 'GL',
		'GM', 'GN', 'GP', 'GQ', 'GR', 'GS', 'GT', 'GU', 'GW', 'GY', 'HK', 'HM',
		'HN', 'HR', 'HT', 'HU', 'ID', 'IE', 'IL', 'IM', 'IN', 'IO', 'IQ', 'IR',
		'IS', 'IT', 'JE', 'JM', 'JO', 'JP', 'KE', 'KG', 'KH', 'KI', 'KM', 'KN',
		'KP', 'KR', 'KW', 'KY', 'KZ', 'LA', 'LB', 'LC', 'LI', 'LK', 'LR', 'LS',
		'LT', 'LU', 'LV', 'LY', 'MA', 'MC', 'MD', 'ME', 'MF', 'MG', 'MH', 'MK',
		'ML', 'MM', 'MN', 'MO', 'MP', 'MQ', 'MR', 'MS', 'MT', 'MU', 'MV', 'MW',
		'MX', 'MY', 'MZ', 'NA', 'NC', 'NE', 'NF', 'NG', 'NI', 'NL', 'NO', 'NP',
		'NR', 'NU', 'NZ', 'OM', 'PA', 'PE', 'PF', 'PG', 'PH', 'PK', 'PL', 'PM',
		'PN', 'PR', 'PS', 'PT', 'PW', 'PY', 'QA', 'RE', 'RO', 'RS', 'RU', 'RW',
		'SA', 'SB', 'SC', 'SD', 'SE', 'SG', 'SH', 'SI', 'SJ', 'SK', 'SL', 'SM',
		'SN', 'SO', 'SR', 'ST', 'SV', 'SX', 'SY', 'SZ', 'TC', 'TD', 'TF', 'TG',
		'TH', 'TJ', 'TK', 'TL', 'TM', 'TN', 'TO', 'TR', 'TT', 'TV', 'TW', 'TZ',
		'UA', 'UG', 'UM', 'US', 'UY', 'UZ', 'VA', 'VC', 'VE', 'VG', 'VI', 'VN',
		'VU', 'WF', 'WS', 'YE', 'YT', 'ZA', 'ZM', 'ZW'
	);

	function testGetCountryByHost() {
		$hu = new I18N_Country("HU");
		$this->assertEquals(array("hu" => "Magyarország"), $hu->getNativeName());
		$this->assertEquals(array("hu" => "Magyarország"), $hu->getNativeShortName());
		$this->assertEquals(array("hu" => "Magyar Köztársaság"), $hu->getNativeOfficialName());
		$this->assertEquals("Hungary (Magyarország)", $hu->getDisplayName("en"));
		$this->assertEquals("Europe/Budapest", $hu->getMainTimezone());
		$this->assertEquals(true, $hu->isEUMember());
		$hu = new I18N_Country("PT");
		$this->assertEquals(array("pt" => "Portugal"), $hu->getNativeName());
		$this->assertEquals(array("pt" => "Portugal"), $hu->getNativeShortName());
		$this->assertEquals(array("pt" => "República Portuguesa"), $hu->getNativeOfficialName());
		$this->assertEquals("Portugal", $hu->getDisplayName("en"));
		$this->assertEquals("Atlantic/Azores", $hu->getMainTimezone());
		$this->assertEquals(true, $hu->isEUMember());

		$countries = $hu->getAllCountries();
		foreach ($countries as $country) {
			$this->assertNotNull($country->getShortNameByLocale('hu'));
			$this->assertNotNull($country->getShortNameByLocale('en'));
			$this->assertNotNull($country->getNativeShortName());
		}

		foreach ($this->countries as $countryCode) {
			$this->assertTrue(array_key_exists($countryCode, $countries), $countryCode . ' not found');
		}
	}
}
