<?php

/**
 * This class represents a country with all associated data. It also
 * contains static information about the countries.
 * Please note, that currently only English and Hungarian names are recorded next to the native names.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_Country {
	/**
	 * Country code of this country instance.
	 * @var string
	 */
	protected $code = "";

	/**
	 * Static array of all countries.
	 */
	protected static $countries = array(
		"AD" => array(
			"native" => array(
				0 => "ca",
			),
			"names" => array(
				"ca" => array(
					"short" => "Andorra",
					"official" => "Principat d'Andorra",
				),
				"en" => array(
					"short" => "Andorra",
					"official" => "Principality of Andorra",
				),
				"hu" => array(
					"short" => "Andorra",
					"official" => "Andorrai Fejedelemség",
				),
			),
			"eu" => true,
			"timezone" => "Europe/Andorra",
			"tld" => "ad",
		),
		"AE" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "الامارات",
					"official" => "دولة الإمارات العربية المتحدة",
				),
				"en" => array(
					"short" => "The Emirates",
					"official" => "United Arab Emirates",
				),
				"hu" => array(
					"short" => "Arab Emírségek",
					"official" => "Egyesült Arab Emírségek",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Dubai",
			"tld" => "ae",
		),
		"AF" => array(
			"native" => array(
				0 => "fa",
				1 => "ps",
			),
			"names" => array(
				"fa" => array(
					"short" => "افغانستان",
					"official" => "جمهوری اسلامی افغانستان",
				),
				"ps" => array(
					"short" => "افغانستان",
					"official" => "افغانستان اسلامي جمهوریت",
				),
				"en" => array(
					"short" => "Afghanistan",
					"official" => "Islamic Republic of Afghanistan",
				),
				"hu" => array(
					"short" => "Afganisztán",
					"official" => "Afganisztáni Iszlám Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Kabul",
			"tld" => "af",
		),
		"AG" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Antigua and Barbuda",
					"official" => "Antigua and Barbuda",
				),
				"hu" => array(
					"short" => "Antigua és Barbuda",
					"official" => "Antigua és Barbuda",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "ag",
		),
		"AI" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Anguilla",
					"official" => "Anguilla",
				),
				"hu" => array(
					"short" => "Anguilla",
					"official" => "Anguilla",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "ai",
		),
		"AL" => array(
			"native" => array(
				0 => "sq",
			),
			"names" => array(
				"sq" => array(
					"short" => "Shqipërisë",
					"official" => "Republika e Shqipërisë",
				),
				"en" => array(
					"short" => "Albania",
					"official" => "Republic of Albania",
				),
				"hu" => array(
					"short" => "Albánia",
					"official" => "Albán Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Tirana",
			"tld" => "al",
		),
		"AM" => array(
			"native" => array(
				0 => "hy",
			),
			"names" => array(
				"hy" => array(
					"short" => "Հայաստան",
					"official" => "Հայաստանի Հանրապետություն",
				),
				"en" => array(
					"short" => "Armenia",
					"official" => "Republic of Armenia",
				),
				"hu" => array(
					"short" => "Örményország",
					"official" => "Örmény Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Yerevan",
			"tld" => "am",
		),
		"AO" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "Angola",
					"official" => "República de Angola",
				),
				"en" => array(
					"short" => "Angola",
					"official" => "Republic of Angola",
				),
				"hu" => array(
					"short" => "Angola",
					"official" => "Angola",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Ruanda",
			"tld" => "ao",
		),
		"AQ" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Antarctica",
					"official" => "Antarctica",
				),
				"hu" => array(
					"short" => "Antarktisz",
					"official" => "Antarktisz",
				),
			),
			"eu" => false,
			"timezone" => "Antarctica/South_Pole",
			"tld" => "aq",
		),
		"AR" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Argentina",
					"official" => "República Argentina",
				),
				"en" => array(
					"short" => "Argentina",
					"official" => "Argentine Republic",
				),
				"hu" => array(
					"short" => "Argentína",
					"official" => "Argentína",
				),
			),
			"eu" => false,
			"timezone" => "America/Argentina/Buenos_Aires",
			"tld" => "ar",
		),
		"AS" => array(
			"native" => array(
				0 => "en",
				1 => "sm",
			),
			"names" => array(
				"sm" => array(
					"short" => "Sāmoa Amelika",
					"official" => "Sāmoa Amelika",
				),
				"en" => array(
					"short" => "American Samoa",
					"official" => "American Samoa",
				),
				"hu" => array(
					"short" => "Amerikai Szamoa",
					"official" => "Amerikai Szamoa",
				),
			),
			"eu" => false,
			"timezone" => "Australia/Sydney",
			"tld" => "as",
		),
		"AT" => array(
			"native" => "de",
			"names" => array(
				"en" => array(
					"short" => "Austria",
					"official" => "Republic of Austria",
				),
				"hu" => array(
					"short" => "Ausztria",
					"official" => "Osztrák Köztársaság",
				),
				"de" => array(
					"short" => "Österreich",
					"official" => "Republik Österreich",
				),
			),
			"eu" => true,
			"tld" => "at",
			"timezone" => "Europe/Vienna",
		),
		"AU" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Australia",
					"official" => "Commonwealth of Australia",
				),
				"hu" => array(
					"short" => "Ausztrália",
					"official" => "Ausztrál Államszövetség",
				),
			),
			"eu" => false,
			"timezone" => "Australia/Sydney",
			"tld" => "au",
		),
		"AW" => array(
			"native" => array(
				0 => "nl",
			),
			"names" => array(
				"nl" => array(
					"short" => "Aruba",
					"official" => "Aruba",
				),
				"en" => array(
					"short" => "Aruba",
					"official" => "Aruba",
				),
				"hu" => array(
					"short" => "Aruba",
					"official" => "Aruba",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "aw",
		),
		"AX" => array(
			"native" => array(
				0 => "sv",
			),
			"names" => array(
				"sv" => array(
					"short" => "Landskapet Åland",
					"official" => "Landskapet Åland",
				),
				"en" => array(
					"short" => "Åland Islands",
					"official" => "Åland Islands",
				),
				"hu" => array(
					"short" => "Åland",
					"official" => "Åland",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Helsinki",
			"tld" => "ax",
		),
		"AZ" => array(
			"native" => array(
				0 => "az",
			),
			"names" => array(
				"az" => array(
					"short" => "Azərbaycan",
					"official" => "Azərbaycan Respublikası",
				),
				"en" => array(
					"short" => "Azerbaijan",
					"official" => "Republic of Azerbaijan",
				),
				"hu" => array(
					"short" => "Azerbajdzsán",
					"official" => "Azerbajdzsáni Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Baku",
			"tld" => "az",
		),
		"BA" => array(
			"native" => array(
				0 => "bs",
				1 => "hr",
				2 => "sr",
			),
			"names" => array(
				"bs" => array(
					"short" => "Bosna i Hercegovina",
					"official" => "Bosna i Hercegovina",
				),
				"hr" => array(
					"short" => "Bosna i Hercegovina",
					"official" => "Bosna i Hercegovina",
				),
				"sr" => array(
					"short" => "Босна и Херцеговина",
					"official" => "Босна и Херцеговина",
				),
				"en" => array(
					"short" => "Bosnia and Herzegovina",
					"official" => "Bosnia and Herzegovina",
				),
				"hu" => array(
					"short" => "Bosznia-Hercegovina",
					"official" => "Bosznia-Hercegovina",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Sarajevo",
			"tld" => "ba",
		),
		"BB" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Barbados",
					"official" => "Barbados",
				),
				"hu" => array(
					"short" => "Barbados",
					"official" => "Barbados",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "bb",
		),
		"BD" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Bangladesh",
					"official" => "People's Republic of Bangladesh",
				),
				"hu" => array(
					"short" => "Banglades",
					"official" => "Banglades",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Dhaka",
			"tld" => "bd",
		),
		"BE" => array(
			"native" => array(
				0 => "nl",
				1 => "fr",
				2 => "de",
			),
			"names" => array(
				"nl" => array(
					"short" => "België",
					"official" => "Koninkrijk België",
				),
				"fr" => array(
					"short" => "Belgique",
					"official" => "Royaume de Belgique",
				),
				"de" => array(
					"short" => "Belgien",
					"official" => "Königreich Belgien",
				),
				"en" => array(
					"short" => "Belgium",
					"official" => "Kingdom of Belgium",
				),
				"hu" => array(
					"short" => "Belgium",
					"official" => "Belga Királyság",
				),
			),
			"eu" => true,
			"tld" => "nl",
			"timezone" => "Europe/Brussels",
		),
		"BF" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Burkina Faso",
					"official" => "Burkina Faso",
				),
				"en" => array(
					"short" => "Burkina Faso",
					"official" => "Burkina Faso",
				),
				"hu" => array(
					"short" => "Burkina Faso",
					"official" => "Burkina Faso",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Ouagadougou",
			"tld" => "bf",
		),
		"BG" => array(
			"native" => "bg",
			"names" => array(
				"bg" => array(
					"short" => "България",
					"official" => "Република България",
				),
				"en" => array(
					"short" => "Bulgaria",
					"official" => "Republic of Bulgaria",
				),
				"hu" => array(
					"short" => "Bulgária",
					"official" => "Bolgár Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "bg",
			"timezone" => "Europe/Sofia",
		),
		"BH" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "‏البحرين‎‎",
					"official" => "مملكة البحرين",
				),
				"en" => array(
					"short" => "Bahrain",
					"official" => "Kingdom of Bahrain",
				),
				"hu" => array(
					"short" => "Bahrein",
					"official" => "Bahrein",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Baghdad",
			"tld" => "bh",
		),
		"BI" => array(
			"native" => array(
				0 => "rn",
				1 => "fr",
			),
			"names" => array(
				"rn" => array(
					"short" => "Burundi",
					"official" => "Republika y'u Burundi",
				),
				"fr" => array(
					"short" => "Burundi",
					"official" => "République du Burundi",
				),
				"en" => array(
					"short" => "Burundi",
					"official" => "Republic of Burundi",
				),
				"hu" => array(
					"short" => "Burundi",
					"official" => "Burundi",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Bujumbura",
			"tld" => "bi",
		),
		"BJ" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Bénin",
					"official" => "République du Bénin",
				),
				"en" => array(
					"short" => "Benin",
					"official" => "Republic of Benin",
				),
				"hu" => array(
					"short" => "Benin",
					"official" => "Benin",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Porto-Novo",
			"tld" => "bj",
		),
		"BL" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Saint-Barthélemy",
					"official" => "Collectivité de Saint-Barthélemy",
				),
				"en" => array(
					"short" => "Saint Barthélemy",
					"official" => "Collectivity of Saint Barthélemy",
				),
				"hu" => array(
					"short" => "Saint-Barthélemy",
					"official" => "Saint-Barthélemy",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "bl",
		),
		"BM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Bermuda",
					"official" => "Bermuda",
				),
				"hu" => array(
					"short" => "Bermuda",
					"official" => "Bermuda",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "bm",
		),
		"BN" => array(
			"native" => array(
				0 => "ms",
			),
			"names" => array(
				"ms" => array(
					"short" => "Brunei",
					"official" => "Negara Brunei Darussalam",
				),
				"en" => array(
					"short" => "Brunei",
					"official" => "State of Brunei, Abode of Peace",
				),
				"hu" => array(
					"short" => "Brunei",
					"official" => "Brunei",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Singapore",
			"tld" => "bn",
		),
		"BO" => array(
			"native" => array(
				0 => "es",
				1 => "qu",
				2 => "ay",
			),
			"names" => array(
				"es" => array(
					"short" => "Bolivia",
					"official" => "Estado Plurinacional de Bolivia",
				),
				"qu" => array(
					"short" => "Bulivya",
					"official" => "Bulivya Mamallaqta",
				),
				"ay" => array(
					"short" => "Wuliwya Suyu",
					"official" => "Wuliwya Suyu",
				),
				"en" => array(
					"short" => "Bolivia",
					"official" => "Plurinational State of Bolivia",
				),
				"hu" => array(
					"short" => "Bolívia",
					"official" => "Bolívia",
				),
			),
			"eu" => false,
			"timezone" => "America/La_Paz",
			"tld" => "bo",
		),
		"BQ" => array(
			"native" => array(
				0 => "nl",
				1 => "en",
			),
			"names" => array(
				"nl" => array(
					"short" => "Caribisch Nederland",
					"official" => "Caribisch Nederland",
				),
				"en" => array(
					"short" => "Caribbean Netherlands",
					"official" => "Caribbean Netherlands",
				),
				"hu" => array(
					"short" => "Holland Királysági-szigetek",
					"official" => "Holland Királysági-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "bq",
		),
		"BR" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "Brasil",
					"official" => "República Federativa do Brasil",
				),
				"en" => array(
					"short" => "Brazil",
					"official" => "Federative Republic of Brazil",
				),
				"hu" => array(
					"short" => "Brazília",
					"official" => "Brazília",
				),
			),
			"eu" => false,
			"timezone" => "America/Sao_Paulo",
			"tld" => "br",
		),
		"BS" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Bahamas",
					"official" => "Commonwealth of The Bahamas",
				),
				"hu" => array(
					"short" => "Bahamák",
					"official" => "Bahama-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/Nassau",
			"tld" => "bs",
		),
		"BT" => array(
			"native" => array(
				0 => "dz",
			),
			"names" => array(
				"dz" => array(
					"short" => "Brug Rgyal-khab",
					"official" => "Brug Rgyal-khab",
				),
				"en" => array(
					"short" => "Bhutan",
					"official" => "Kingdom of Bhutan",
				),
				"hu" => array(
					"short" => "Bhután",
					"official" => "Bhután",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Thimbu",
			"tld" => "bt",
		),
		"BV" => array(
			"native" => array(
				0 => "nb",
			),
			"names" => array(
				"nb" => array(
					"short" => "Bouvetøya",
					"official" => "Bouvetøya",
				),
				"en" => array(
					"short" => "Bouvet Island",
					"official" => "Bouvet Island",
				),
				"hu" => array(
					"short" => "Bouvet-sziget",
					"official" => "Bouvet-sziget",
				),
			),
			"eu" => true,
			"timezone" => "Europe/Oslo",
			"tld" => "bv",
		),
		"BW" => array(
			"native" => array(
				0 => "en",
				1 => "tn",
			),
			"names" => array(
				"tn" => array(
					"short" => "Botswana",
					"official" => "Lefatshe la Botswana",
				),
				"en" => array(
					"short" => "Botswana",
					"official" => "Republic of Botswana",
				),
				"hu" => array(
					"short" => "Botswana",
					"official" => "Botswana",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Gaborone",
			"tld" => "bw",
		),
		"BY" => array(
			"native" => array(
				0 => "be",
				1 => "ru",
			),
			"names" => array(
				"be" => array(
					"short" => "Беларусь",
					"official" => "Рэспубліка Беларусь",
				),
				"ru" => array(
					"short" => "Беларусь",
					"official" => "Республика Беларусь",
				),
				"hu" => array(
					"short" => "Fehéroroszország",
					"official" => "Fehéroroszország",
				),
				"en" => array(
					"short" => "Belarus",
					"official" => "Republic of Belarus",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Minsk",
			"tld" => "by",
		),
		"BZ" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Belize",
					"official" => "Belize",
				),
				"hu" => array(
					"short" => "Belize",
					"official" => "Belize",
				),
			),
			"eu" => false,
			"timezone" => "America/Mexico_City",
			"tld" => "bz",
		),
		"CA" => array(
			"native" => array(
				0 => "en",
				1 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Canada",
					"official" => "Canada",
				),
				"en" => array(
					"short" => "Canada",
					"official" => "Canada",
				),
				"hu" => array(
					"short" => "Kanada",
					"official" => "Kanada",
				),
			),
			"eu" => false,
			"timezone" => "America/Toronto",
			"tld" => "ca",
		),
		"CC" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Cocos Islands",
					"official" => "Territory of the Cocos (Keeling) Islands",
				),
				"hu" => array(
					"short" => "Kókusz-szigetek",
					"official" => "Kókusz (Keeling)-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Rangoon",
			"tld" => "cc",
		),
		"CD" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "République Démocratique du Congo",
					"official" => "République Démocratique du Congo",
				),
				"en" => array(
					"short" => "Democratic Republic of the Congo",
					"official" => "Democratic Republic of the Congo",
				),
				"hu" => array(
					"short" => "Kongói Demokratikus Köztársaság",
					"official" => "Kongói Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Kinshasa",
			"tld" => "cd",
		),
		"CF" => array(
			"native" => array(
				0 => "sg",
				1 => "fr",
			),
			"names" => array(
				"sg" => array(
					"short" => "Ködörösêse tî Bêafrîka",
					"official" => "Ködörösêse tî Bêafrîka",
				),
				"fr" => array(
					"short" => "République centrafricaine",
					"official" => "République centrafricaine",
				),
				"en" => array(
					"short" => "Central African Republic",
					"official" => "Central African Republic",
				),
				"hu" => array(
					"short" => "Közép-afrikai Köztársaság",
					"official" => "Közép-afrikai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Bangui",
			"tld" => "cf",
		),
		"CG" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Congo",
					"official" => "République du Congo",
				),
				"en" => array(
					"short" => "Congo",
					"official" => "Republic of the Congo",
				),
				"hu" => array(
					"short" => "Kongó",
					"official" => "Kongói Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Brazzaville",
			"tld" => "cg",
		),
		"CH" => array(
			"native" => array(
				0 => "de",
				1 => "fr",
				2 => "it",
			),
			"names" => array(
				"de" => array(
					"short" => "Schweiz",
					"official" => "Schweizerische Eidgenossenschaft",
				),
				"fr" => array(
					"short" => "Confédération suisse",
					"official" => "Confédération suisse",
				),
				"it" => array(
					"short" => "Svizzera",
					"official" => "Confederazione Svizzera",
				),
				"en" => array(
					"short" => "Swiss Confederation",
					"official" => "Swiss Confederation",
				),
				"hu" => array(
					"short" => "Svájc",
					"official" => "Svájc",
				),
			),
			"eu" => true,
			"timezone" => "Europe/Berlin",
			"tld" => "ch",
		),
		"CI" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Côte d'Ivoire",
					"official" => "République de Côte d'Ivoire",
				),
				"en" => array(
					"short" => "Côte d'Ivoire",
					"official" => "Republic of Côte d'Ivoire",
				),
				"hu" => array(
					"short" => "Elefántcsontpart",
					"official" => "Elefántcsontpart",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Casablanca",
			"tld" => "ci",
		),
		"CK" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Cook Islands",
					"official" => "Cook Islands",
				),
				"hu" => array(
					"short" => "Cook-szigetek",
					"official" => "Cook-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Australia/Sydney",
			"tld" => "ck",
		),
		"CL" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Chile",
					"official" => "República de Chile",
				),
				"en" => array(
					"short" => "Chile",
					"official" => "Republic of Chile",
				),
				"hu" => array(
					"short" => "Chile",
					"official" => "Chilei Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "America/Santiago",
			"tld" => "cl",
		),
		"CM" => array(
			"native" => array(
				0 => "en",
				1 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Cameroun",
					"official" => "République du Cameroun",
				),
				"en" => array(
					"short" => "Cameroon",
					"official" => "Republic of Cameroon",
				),
				"hu" => array(
					"short" => "Kamerun",
					"official" => "Kamerun",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Kinshasa",
			"tld" => "cm",
		),
		"CN" => array(
			"native" => array(
				0 => "zh",
			),
			"names" => array(
				"zh" => array(
					"short" => "Zhōnghuá Rénmín Gònghéguó",
					"official" => "Zhōnghuá Rénmín Gònghéguó",
				),
				"en" => array(
					"short" => "China",
					"official" => "People's Republic of China",
				),
				"hu" => array(
					"short" => "Kína",
					"official" => "Kínai Népköztársaság",
				),
				"cn" => array(
					"short" => "中华人民共和国",
					"official" => "中华人民共和国",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Hong_Kong",
			"tld" => "cn",
		),
		"CO" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Colombia",
					"official" => "República de Colombia",
				),
				"en" => array(
					"short" => "Colombia",
					"official" => "Republic of Colombia",
				),
				"hu" => array(
					"short" => "Kolumbia",
					"official" => "Kolumbiai Köztársaság ",
				),
			),
			"eu" => false,
			"timezone" => "America/Bogota",
			"tld" => "co",
		),
		"CR" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Costa Rica",
					"official" => "República de Costa Rica",
				),
				"en" => array(
					"short" => "Costa Rica",
					"official" => "Republic of Costa Rica",
				),
				"hu" => array(
					"short" => "Costa Rica",
					"official" => "Costa Rica",
				),
			),
			"eu" => false,
			"timezone" => "America/Mexico_City",
			"tld" => "cr",
		),
		"CU" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Cuba",
					"official" => "República de Cuba",
				),
				"en" => array(
					"short" => "Cuba",
					"official" => "Republic of Cuba",
				),
				"hu" => array(
					"short" => "Kuba",
					"official" => "Kubai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "America/Havana",
			"tld" => "cu",
		),
		"CV" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "Cabo Verde",
					"official" => "República de Cabo Verde",
				),
				"en" => array(
					"short" => "Cape Verde",
					"official" => "Republic of Cape Verde",
				),
				"hu" => array(
					"short" => "Zöld-foki Köztársaság",
					"official" => "Zöld-foki Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Atlantic/Cape_Verde",
			"tld" => "cv",
		),
		"CW" => array(
			"native" => array(
				0 => "de",
			),
			"names" => array(
				"de" => array(
					"short" => "Curaçao",
					"official" => "Land Curaçao",
				),
				"en" => array(
					"short" => "Curaçao",
					"official" => "Country of Curaçao",
				),
				"hu" => array(
					"short" => "Curaçao",
					"official" => "Curaçao ország",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "cw",
		),
		"CX" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Christmas Island",
					"official" => "Territory of Christmas Island",
				),
				"hu" => array(
					"short" => "Karácsony-sziget",
					"official" => "Karácsony-sziget",
				),
			),
			"eu" => true,
			"timezone" => "Europe/Nicosia",
			"tld" => "cx",
		),
		"CY" => array(
			"native" => array(
				0 => "el",
				1 => "tr",
			),
			"names" => array(
				"el" => array(
					"short" => "Κύπρος",
					"official" => "Kipriakí Dimokratía",
				),
				"tr" => array(
					"short" => "Kıbrıs",
					"official" => "Kıbrıs Cumhuriyeti",
				),
				"en" => array(
					"short" => "Cyprus",
					"official" => "Republic of Cyprus",
				),
				"hu" => array(
					"short" => "Ciprus",
					"official" => "Ciprusi Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "cy",
			"timezone" => "Asia/Nicosia",
		),
		"CZ" => array(
			"native" => "cz",
			"names" => array(
				"cz" => array(
					"short" => "Česko",
					"official" => "Česká republika",
				),
				"en" => array(
					"short" => "Czech",
					"official" => "Czech Republic",
				),
				"hu" => array(
					"short" => "Csehország",
					"official" => "Cseh Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "cz",
			"timezone" => "Europe/Prague",
		),
		"DE" => array(
			"native" => "de",
			"names" => array(
				"de" => array(
					"short" => "Deutschland",
					"official" => "Bundesrepublik Deutschland",
				),
				"en" => array(
					"short" => "Germany",
					"official" => "Federal Republic of Germany",
				),
				"hu" => array(
					"short" => "Németország",
					"official" => "Német Szövetségi Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "de",
			"timezone" => "Europe/Berlin",
		),
		"DJ" => array(
			"native" => array(
				0 => "ar",
				1 => "fr",
			),
			"names" => array(
				"ar" => array(
					"short" => "جيبوتي",
					"official" => "جمهورية جيبوتي",
				),
				"fr" => array(
					"short" => "Djibouti",
					"official" => "République de Djibouti",
				),
				"en" => array(
					"short" => "Djibouti",
					"official" => "Republic of Djibouti",
				),
				"hu" => array(
					"short" => "Dzsibuti",
					"official" => "Dzsibuti",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Djibouti",
			"tld" => "dj",
		),
		"DK" => array(
			"native" => "dk",
			"names" => array(
				"dk" => array(
					"short" => "Danmark",
					"official" => "Kongeriget Danmark",
				),
				"en" => array(
					"short" => "Denmark",
					"official" => "Kingdom of Denmark",
				),
				"hu" => array(
					"short" => "Dánia",
					"official" => "Dán Királyság",
				),
			),
			"eu" => true,
			"tld" => "dk",
			"timezone" => "Europe/Copenhagen",
		),
		"DM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Dominica",
					"official" => "Commonwealth of Dominica",
				),
				"hu" => array(
					"short" => "Dominika",
					"official" => "Dominikai Közösség",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "dm",
		),
		"DO" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "República Dominicana",
					"official" => "República Dominicana",
				),
				"en" => array(
					"short" => "Dominican Republic",
					"official" => "Dominican Republic",
				),
				"hu" => array(
					"short" => "Dominikai Köztársaság",
					"official" => "Dominikai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "America/Santo_Domingo",
			"tld" => "do",
		),
		"DZ" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "الجزائر‎",
					"official" => "الجمهورية الجزائرية الديمقراطية الشّعبية",
				),
				"en" => array(
					"short" => "Algeria",
					"official" => "People's Democratic Republic of Algeria",
				),
				"hu" => array(
					"short" => "Algéria",
					"official" => "Algéria",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Algiers",
			"tld" => "dz",
		),
		"EC" => array(
			"native" => "es",
			"names" => array(
				"en" => array(
					"short" => "Ecuador",
					"official" => "Republica of Ecuador",
				),
				"es" => array(
					"short" => "Ecuador",
					"official" => "República del Ecuador",
				),
				"hu" => array(
					"short" => "Ecuador",
					"official" => "Ecuador köztársaság",
				),
			),
			"eu" => false,
			"tld" => "ec",
			"timezone" => "UTC-05",
		),
		"EE" => array(
			"native" => "et",
			"names" => array(
				"et" => array(
					"short" => "Eesti",
					"official" => "Eesti Vabariik",
				),
				"en" => array(
					"short" => "Estonia",
					"official" => "Republic of Estonia",
				),
				"hu" => array(
					"short" => "Észtország",
					"official" => "Észt Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "ee",
			"timezone" => "Europe/Tallinn",
		),
		"EG" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "مصر",
					"official" => "جمهورية مصر العربية",
				),
				"en" => array(
					"short" => "Egypt",
					"official" => "Arab Republic of Egypt",
				),
				"hu" => array(
					"short" => "Egyiptom",
					"official" => "Egyiptom",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Cairo",
			"tld" => "eg",
		),
		"EH" => array(
			"native" => array(
				0 => "ar",
				1 => "es",
				2 => "fr",
			),
			"names" => array(
				"ar" => array(
					"short" => "Aṣ-Ṣaḥrā’ al-Gharbīyah",
					"official" => "Aṣ-Ṣaḥrā’ al-Gharbīyah",
				),
				"es" => array(
					"short" => "Sahara Occidental",
					"official" => "Sahara Occidental",
				),
				"fr" => array(
					"short" => "Sahara Occidental",
					"official" => "Sahara Occidental",
				),
				"en" => array(
					"short" => "The Western Sahara",
					"official" => "The Western Sahara",
				),
				"hu" => array(
					"short" => "Nyugat-Szahara",
					"official" => "Szaharai Arab Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Nouakchott",
			"tld" => "eh",
		),
		"EL" => array(
			"native" => "el",
			"names" => array(
				"el" => array(
					"short" => "Ελλάδα",
					"official" => "Ελληνική Δημοκρατία",
				),
				"en" => array(
					"short" => "Greece",
					"official" => "Hellenic Republic",
				),
				"hu" => "Görögország",
			),
			"eu" => true,
			"tld" => "el",
			"timezone" => "Europe/Athens",
		),
		"ER" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "Iritrīya",
					"official" => "Dawlat Iritrīya",
				),
				"en" => array(
					"short" => "Eritrea",
					"official" => "State of Eritrea",
				),
				"hu" => array(
					"short" => "Eritrea",
					"official" => "Eritrea",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Asmara",
			"tld" => "er",
		),
		"ES" => array(
			"native" => "es",
			"names" => array(
				"es" => array(
					"short" => "España",
					"official" => "Reino de España",
				),
				"en" => array(
					"short" => "Spain",
					"official" => "Kingdom of Spain",
				),
				"hu" => array(
					"short" => "Spanyolország",
					"official" => "Spanyol Királyság",
				),
			),
			"eu" => true,
			"tld" => "es",
			"timezone" => "Europe/Madrid",
		),
		"ET" => array(
			"native" => array(
				0 => "am",
			),
			"names" => array(
				"am" => array(
					"short" => "ʾĪtyōṗṗyā",
					"official" => "ye-Ītyōṗṗyā Fēdēralāwī Dīmōkrāsīyāwī Rīpeblīk",
				),
				"en" => array(
					"short" => "Ethiopia",
					"official" => "Federal Democratic Republic of Ethiopia",
				),
				"hu" => array(
					"short" => "Etiópia",
					"official" => "Etióp Szövetségi Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Addis_Ababa",
			"tld" => "et",
		),
		"FI" => array(
			"native" => array(
				0 => "fi",
				1 => "sv",
			),
			"names" => array(
				"fi" => array(
					"short" => "Suomi",
					"official" => "Suomen tasavalta",
				),
				"sv" => array(
					"short" => "Finland",
					"official" => "Republiken Finland",
				),
				"en" => array(
					"short" => "Finland",
					"official" => "Republic of Finland",
				),
				"hu" => array(
					"short" => "Finnország",
					"official" => "Finn Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "fi",
			"timezone" => "Europe/Helsinki",
		),
		"FJ" => array(
			"native" => array(
				0 => "fj",
			),
			"names" => array(
				"fj" => array(
					"short" => "Matanitu ko Viti",
					"official" => "Matanitu Tu-Vaka-i-koya ko Viti",
				),
				"en" => array(
					"short" => "Fiji",
					"official" => "Republic of the Fiji Islands",
				),
				"hu" => array(
					"short" => "Fidzsi-szigetek",
					"official" => "Fidzsi-szigeteki Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Fiji",
			"tld" => "fj",
		),
		"FK" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Falkland Islands",
					"official" => "Falkland Islands",
				),
				"hu" => array(
					"short" => "Falkland-szigetek",
					"official" => "Falkland-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Atlantic/Stanley",
			"tld" => "fk",
		),
		"FM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Micronesia",
					"official" => "Federated States of Micronesia",
				),
				"hu" => array(
					"short" => "Mikronézia",
					"official" => "Mikronéziai Szövetségi Államok",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Palau",
			"tld" => "fm",
		),
		"FO" => array(
			"native" => array(
				0 => "fo",
			),
			"names" => array(
				"fo" => array(
					"short" => "Føroyar",
					"official" => "Føroyar",
				),
				"hu" => array(
					"short" => "Feröer",
					"official" => "Feröer-szigetek",
				),
				"en" => array(
					"short" => "Faroe Islands",
					"official" => "Faroe Islands",
				),
			),
			"eu" => false,
			"timezone" => "Atlantic/Faroe",
			"tld" => "fo",
		),
		"FR" => array(
			"native" => "fr",
			"names" => array(
				"fr" => array(
					"short" => "France",
					"official" => "République française",
				),
				"en" => array(
					"short" => "France",
					"official" => "Republic of France",
				),
				"hu" => array(
					"short" => "Franciaország",
					"official" => "Francia Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "fr",
			"timezone" => "Europe/Paris",
		),
		"GA" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Gabon",
					"official" => "République Gabonaise",
				),
				"en" => array(
					"short" => "Gabon",
					"official" => "Gabonese Republic",
				),
				"hu" => array(
					"short" => "Gabon",
					"official" => "Gabon",
				),
				"ie" => array(
					"short" => "Éire",
					"official" => "Poblacht na hÉireann",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Libreville",
			"tld" => "ga",
		),
		"GB" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "United Kingdom",
					"official" => "United Kingdom of Great Britain and Northern ",
				),
				"hu" => array(
					"short" => "Egyesült Királyság",
					"official" => "Nagy-Britannia és Észak-Írország Egyesült Kir",
				),
			),
			"eu" => true,
			"timezone" => "Europe/London",
			"tld" => "uk",
		),
		"GD" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Grenada",
					"official" => "Grenada",
				),
				"hu" => array(
					"short" => "Grenada",
					"official" => "Grenada",
				),
			),
			"eu" => false,
			"timezone" => "America/Grenada",
			"tld" => "gd",
		),
		"GE" => array(
			"native" => array(
				0 => "ka",
			),
			"names" => array(
				"ka" => array(
					"short" => "საქართველო",
					"official" => "საქართველო",
				),
				"en" => array(
					"short" => "Georgia",
					"official" => "Georgia",
				),
				"hu" => array(
					"short" => "Grúzia",
					"official" => "Grúzia",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Tbilisi",
			"tld" => "ge",
		),
		"GF" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Guyane",
					"official" => "Guyane Française",
				),
				"en" => array(
					"short" => "French Guiana",
					"official" => "French Guiana",
				),
				"hu" => array(
					"short" => "Francia Guyana",
					"official" => "Francia Guyana",
				),
			),
			"eu" => false,
			"timezone" => "America/Cayenne",
			"tld" => "gf",
		),
		"GG" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Guernsey",
					"official" => "Bailiwick of Guernsey",
				),
				"hu" => array(
					"short" => "Guernsey",
					"official" => "Guernsey",
				),
				"en" => array(
					"short" => "Guernsey",
					"official" => "Bailiwick of Guernsey",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Guernsey",
			"tld" => "gg",
		),
		"GH" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Ghana",
					"official" => "Republic of Ghana",
				),
				"hu" => array(
					"short" => "Ghána",
					"official" => "Ghánai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Accra",
			"tld" => "gh",
		),
		"GI" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Gibraltar",
					"official" => "Gibraltar",
				),
				"hu" => array(
					"short" => "Gibraltár",
					"official" => "Gibraltár",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Gibraltar",
			"tld" => "gi",
		),
		"GL" => array(
			"native" => array(
				0 => "kl",
			),
			"names" => array(
				"kl" => array(
					"short" => "Kalaallit Nunaat",
					"official" => "Kalaallit Nunaat",
				),
				"en" => array(
					"short" => "Greenland",
					"official" => "Greenland",
				),
				"hu" => array(
					"short" => "Grönland",
					"official" => "Grönland",
				),
			),
			"eu" => false,
			"timezone" => "America/Godthab",
			"tld" => "gl",
		),
		"GM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Gambia",
					"official" => "Republic of the Gambia",
				),
				"hu" => array(
					"short" => "Gambia",
					"official" => "Gambia",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Banjul",
			"tld" => "gm",
		),
		"GN" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Guinée",
					"official" => "République de Guinée",
				),
				"en" => array(
					"short" => "Guinea",
					"official" => "Republic of Guinea",
				),
				"hu" => array(
					"short" => "Guinea",
					"official" => "Guineai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Conakry",
			"tld" => "gn",
		),
		"GP" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Guadeloupe",
					"official" => "Guadeloupe",
				),
				"en" => array(
					"short" => "Guadeloupe",
					"official" => "Guadeloupe",
				),
				"hu" => array(
					"short" => "Guadeloupe",
					"official" => "Guadeloupe",
				),
			),
			"eu" => false,
			"timezone" => "America/Guadeloupe",
			"tld" => "gp",
		),
		"GQ" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Guinea Ecuatorial",
					"official" => "República de Guinea Ecuatorial",
				),
				"en" => array(
					"short" => "Equatorial Guinea",
					"official" => "Republic of Equatorial Guinea",
				),
				"hu" => array(
					"short" => "Egyenlítői-Guinea",
					"official" => "Egyenlítői-Guinea-i Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Malabo",
			"tld" => "gq",
		),
		"GR" => array(
			"native" => array(
				0 => "el",
			),
			"names" => array(
				"el" => array(
					"short" => "Elláda",
					"official" => "Ellīnikī́ Dīmokratía",
				),
				"en" => array(
					"short" => "Greece",
					"official" => "Hellenic Republic",
				),
				"hu" => array(
					"short" => "Görögország",
					"official" => "Görög Köztársaság",
				),
			),
			"eu" => true,
			"timezone" => "Europe/Athens",
			"tld" => "gr",
		),
		"GS" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "South Georgia and the South Sandwich Islands",
					"official" => "South Georgia and the South Sandwich Islands",
				),
				"hu" => array(
					"short" => "Déli-Georgia és Déli-Sandwich-szigetek",
					"official" => "Déli-Georgia és Déli-Sandwich-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Atlantic/South_Georgia",
			"tld" => "gs",
		),
		"GT" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Guatemala",
					"official" => "República de Guatemala",
				),
				"en" => array(
					"short" => "Guatemala",
					"official" => "Republic of Guatemala",
				),
				"hu" => array(
					"short" => "Guatemala",
					"official" => "Guatemala",
				),
			),
			"eu" => false,
			"timezone" => "America/Guatemala",
			"tld" => "gt",
		),
		"GU" => array(
			"native" => array(
				0 => "en",
				1 => "ch",
			),
			"names" => array(
				"ch" => array(
					"short" => "Guåhan",
					"official" => "Guåhan",
				),
				"en" => array(
					"short" => "Guam",
					"official" => "Guam",
				),
				"hu" => array(
					"short" => "Guam",
					"official" => "Guam",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Guam",
			"tld" => "gu",
		),
		"GW" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "Guiné-Bissau",
					"official" => "República da Guiné-Bissau",
				),
				"en" => array(
					"short" => "Guinea-Bissau",
					"official" => "Republic of Guinea-Bissau",
				),
				"hu" => array(
					"short" => "Bissau-Guinea",
					"official" => "Bissau-Guineai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Bissau",
			"tld" => "gw",
		),
		"GY" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Guyana",
					"official" => "Co-operative Republic of Guyana",
				),
				"hu" => array(
					"short" => "Guyana",
					"official" => "Guyana",
				),
			),
			"eu" => false,
			"timezone" => "America/Guyana",
			"tld" => "gy",
		),
		"HK" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Hong Kong",
					"official" => "Hong Kong Special Administrative Region of th",
				),
				"hu" => array(
					"short" => "Hongkong",
					"official" => "Hongkong, a Kínai Népköztársaság Különleges K",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Hong_Kong",
			"tld" => "hk",
		),
		"HN" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Honduras",
					"official" => "República de Honduras",
				),
				"en" => array(
					"short" => "Honduras",
					"official" => "Republic of Honduras",
				),
				"hu" => array(
					"short" => "Honduras",
					"official" => "Honduras",
				),
			),
			"eu" => false,
			"timezone" => "America/Tegucigalpa",
			"tld" => "hn",
		),
		"HR" => array(
			"native" => array(
				0 => "hr",
			),
			"names" => array(
				"hr" => array(
					"short" => "Hrvatska",
					"official" => "Republika Hrvatska",
				),
				"en" => array(
					"short" => "Croatia",
					"official" => "Republic of Croatia",
				),
				"hu" => array(
					"short" => "Horvátország",
					"official" => "Horvát Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Zagreb",
			"tld" => "hr",
		),
		"HT" => array(
			"native" => array(
				0 => "fr",
				1 => "ht",
			),
			"names" => array(
				"fr" => array(
					"short" => "Haïti",
					"official" => "République d'Ayiti",
				),
				"en" => array(
					"short" => "Haiti",
					"official" => "Republic of Haiti",
				),
				"hu" => array(
					"short" => "Haiti",
					"official" => "Haiti",
				),
				"ht" => array(
					"short" => "Ayiti",
					"official" => "Repiblik Ayiti",
				),
			),
			"eu" => false,
			"timezone" => "America/Port-au-Prince",
			"tld" => "ht",
		),
		"HU" => array(
			"native" => "hu",
			"names" => array(
				"en" => array(
					"short" => "Hungary",
					"official" => "Hungary",
				),
				"hu" => array(
					"short" => "Magyarország",
					"official" => "Magyarország",
				),
			),
			"eu" => true,
			"tld" => "hu",
			"timezone" => "Europe/Budapest",
		),
		"ID" => array(
			"native" => array(
				0 => "id",
			),
			"names" => array(
				"id" => array(
					"short" => "Indonesia",
					"official" => "Republik Indonesia",
				),
				"en" => array(
					"short" => "Indonesia",
					"official" => "Republic of Indonesia",
				),
				"hu" => array(
					"short" => "Indonézia",
					"official" => "Indonézia",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Jakarta",
			"tld" => "id",
		),
		"IE" => array(
			"native" => array(
				0 => "en",
				1 => "ga",
			),
			"names" => array(
				"en" => array(
					"short" => "Ireland",
					"official" => "Republic of Ireland",
				),
				"ga" => array(
					"short" => "Éire",
					"official" => "Poblacht na hÉireann",
				),
				"hu" => array(
					"short" => "Írország",
					"official" => "Ír Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "ie",
			"timezone" => "Europe/Dublin",
		),
		"IL" => array(
			"native" => array(
				0 => "he",
				1 => "ar",
			),
			"names" => array(
				"he" => array(
					"short" => "יִשְׂרָאֵל‎‎",
					"official" => "מְדִינַת יִשְׂרָאֵל",
				),
				"ar" => array(
					"short" => "إِسْرَائِيل‎",
					"official" => "دَوْلَة إِسْرَائِيل",
				),
				"en" => array(
					"short" => "Israel",
					"official" => "State of Israel",
				),
				"hu" => array(
					"short" => "Izrael",
					"official" => "Izrael Állam",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Jerusalem",
			"tld" => "il",
		),
		"IM" => array(
			"native" => array(
				0 => "gv",
				1 => "en",
			),
			"names" => array(
				"gv" => array(
					"short" => "Ellan Vannin",
					"official" => "Ellan Vannin",
				),
				"en" => array(
					"short" => "Isle of Man",
					"official" => "Isle of Man",
				),
				"hu" => array(
					"short" => "Man",
					"official" => "Man",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Isle_of_Man",
			"tld" => "im",
		),
		"IN" => array(
			"native" => array(
				0 => "hi",
				1 => "en",
			),
			"names" => array(
				"hi" => array(
					"short" => "Bhārat",
					"official" => "Bhārat Ganarājya",
				),
				"en" => array(
					"short" => "India",
					"official" => "Republic of India",
				),
				"hu" => array(
					"short" => "India",
					"official" => "Indiai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Calcutta",
			"tld" => "in",
		),
		"IO" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Chagos Islands",
					"official" => "British Indian Ocean Territory",
				),
				"hu" => array(
					"short" => "Brit Indiai-óceáni Terület",
					"official" => "Brit Indiai-óceáni Terület",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Chagos",
			"tld" => "io",
		),
		"IQ" => array(
			"native" => array(
				0 => "ar",
				1 => "ku",
			),
			"names" => array(
				"ar" => array(
					"short" => "العراق",
					"official" => "جمهورية العراق",
				),
				"ku" => array(
					"short" => "ێراق",
					"official" => "كؤماری عێراق",
				),
				"en" => array(
					"short" => "Iraq",
					"official" => "Republic of Iraq",
				),
				"hu" => array(
					"short" => "Irak",
					"official" => "Irak",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Baghdad",
			"tld" => "iq",
		),
		"IS" => array(
			"native" => array(
				0 => "is",
			),
			"names" => array(
				"is" => array(
					"short" => "Ísland",
					"official" => "Ísland",
				),
				"en" => array(
					"short" => "Iceland",
					"official" => "Iceland",
				),
				"hu" => array(
					"short" => "Izland",
					"official" => "Izland",
				),
			),
			"eu" => false,
			"timezone" => "Atlantic/Reykjavik",
			"tld" => "is",
		),
		"IT" => array(
			"native" => "it",
			"names" => array(
				"it" => array(
					"short" => "Italia",
					"official" => "Repubblica italiana",
				),
				"en" => array(
					"short" => "Italy",
					"official" => "Italian Republic",
				),
				"hu" => array(
					"short" => "Olaszország",
					"official" => "Olasz Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "it",
			"timezone" => "Europe/Rome",
		),
		"JE" => array(
			"native" => array(
				0 => "en",
				1 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Jersey",
					"official" => "Bailliage de Jersey",
				),
				"en" => array(
					"short" => "Jersey",
					"official" => "Bailiwick of Jersey",
				),
				"hu" => array(
					"short" => "Jersey",
					"official" => "Jersey",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Jersey",
			"tld" => "je",
		),
		"JM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Jamaica",
					"official" => "Jamaica",
				),
				"hu" => array(
					"short" => "Jamaica",
					"official" => "Jamaica",
				),
			),
			"eu" => false,
			"timezone" => "America/Jamaica",
			"tld" => "jm",
		),
		"JO" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "الأردن",
					"official" => "المملكة الأردنية الهاشمية",
				),
				"en" => array(
					"short" => "Jordan",
					"official" => "Hashemite Kingdom of Jordan",
				),
				"hu" => array(
					"short" => "Jordánia",
					"official" => "Jordán Hasemita Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Amman",
			"tld" => "jo",
		),
		"JP" => array(
			"native" => array(
				0 => "ja",
			),
			"names" => array(
				"hu" => array(
					"short" => "Japán",
					"official" => "Japán",
				),
				"en" => array(
					"short" => "Japan",
					"official" => "Japan",
				),
				"ja" => array(
					"short" => "ジャパン",
					"official" => "ジャパン",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Tokyo",
			"tld" => "jp",
		),
		"KE" => array(
			"native" => array(
				0 => "sw",
				1 => "en",
			),
			"names" => array(
				"sw" => array(
					"short" => "Kenya",
					"official" => "Jamhuri ya Kenya",
				),
				"en" => array(
					"short" => "Kenya",
					"official" => "Republic of Kenya",
				),
				"hu" => array(
					"short" => "Kenya",
					"official" => "Kenya",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Nairobi",
			"tld" => "ke",
		),
		"KG" => array(
			"native" => array(
				0 => "ru",
			),
			"names" => array(
				"ru" => array(
					"short" => "Kyrgyzskaya",
					"official" => "Kyrgyzskaya Respublika",
				),
				"en" => array(
					"short" => "Kyrgyzstan",
					"official" => "Kyrgyz Republic",
				),
				"hu" => array(
					"short" => "Kirgizisztán",
					"official" => "Kirgizisztán",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Bishkek",
			"tld" => "kg",
		),
		"KH" => array(
			"native" => array(
				0 => "km",
			),
			"names" => array(
				"km" => array(
					"short" => "Kâmpŭchéa",
					"official" => "Preăh Réachéa Nachâk Kâmpŭchéa",
				),
				"en" => array(
					"short" => "Cambodia",
					"official" => "Kingdom of Cambodia",
				),
				"hu" => array(
					"short" => "Kambodzsa",
					"official" => "Kambodzsa",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Phnom_Penh",
			"tld" => "kh",
		),
		"KI" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Kiribati",
					"official" => "Republic of Kiribati",
				),
				"hu" => array(
					"short" => "Kiribati",
					"official" => "Kiribati Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Tarawa",
			"tld" => "ki",
		),
		"KM" => array(
			"native" => array(
				0 => "ar",
				1 => "fr",
			),
			"names" => array(
				"ar" => array(
					"short" => "جزر القمر‎",
					"official" => "الاتحاد القمري",
				),
				"fr" => array(
					"short" => "Comores",
					"official" => "Union des Comores",
				),
				"en" => array(
					"short" => "Comoros",
					"official" => "Union of the Comoros",
				),
				"hu" => array(
					"short" => "Comore-szigetek",
					"official" => "Comore-szigeteki Unió",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Comoro",
			"tld" => "km",
		),
		"KN" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Saint Kitts and Nevis",
					"official" => "Federation of Saint Christopher and Nevis",
				),
				"hu" => array(
					"short" => "Saint Kitts és Nevis",
					"official" => "Saint Christopher és Nevis Államszövetség",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Kitts",
			"tld" => "kn",
		),
		"KP" => array(
			"native" => array(
				0 => "ko",
			),
			"names" => array(
				"ko" => array(
					"short" => "Chosŏn Minjujuŭi Inmin Konghwaguk",
					"official" => "Chosŏn Minjujuŭi Inmin Konghwaguk",
				),
				"en" => array(
					"short" => "North Korea",
					"official" => "Democratic People's Republic of Korea",
				),
				"hu" => array(
					"short" => "Észak-Korea",
					"official" => "Koreai Népi Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Pyongyang",
			"tld" => "kp",
		),
		"KR" => array(
			"native" => array(
				0 => "ko",
			),
			"names" => array(
				"ko" => array(
					"short" => "Daehanminguk",
					"official" => "Daehanminguk",
				),
				"en" => array(
					"short" => "South Korea",
					"official" => "Republic of Korea",
				),
				"hu" => array(
					"short" => "Dél-Korea",
					"official" => "Koreai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Seoul",
			"tld" => "kr",
		),
		"KW" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "دولة الكويت",
					"official" => "دولة الكويت",
				),
				"en" => array(
					"short" => "Kuwait",
					"official" => "State of Kuwait",
				),
				"hu" => array(
					"short" => "Kuvait",
					"official" => "Kuvait",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Kuwait",
			"tld" => "kw",
		),
		"KY" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Cayman Islands",
					"official" => "Cayman Islands",
				),
				"hu" => array(
					"short" => "Kajmán-szigetek",
					"official" => "Kajmán-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/Cayman",
			"tld" => "ky",
		),
		"KZ" => array(
			"native" => array(
				0 => "kk",
				1 => "ru",
			),
			"names" => array(
				"kk" => array(
					"short" => "Qazaqstan",
					"official" => "Qazaqstan Respublïkası",
				),
				"ru" => array(
					"short" => "Казахстан",
					"official" => "Қазақстан Республикасы",
				),
				"en" => array(
					"short" => "Kazakhstan",
					"official" => "Republic of Kazakhstan",
				),
				"hu" => array(
					"short" => "Kazahsztán",
					"official" => "Kazahsztán",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Almaty",
			"tld" => "kz",
		),
		"LA" => array(
			"native" => array(
				0 => "lo",
			),
			"names" => array(
				"lo" => array(
					"short" => "Sathalanalat Paxathipatai Paxaxon Lao",
					"official" => "Sathalanalat Paxathipatai Paxaxon Lao",
				),
				"en" => array(
					"short" => "Laos",
					"official" => "Lao People's Democratic Republic",
				),
				"hu" => array(
					"short" => "Laosz",
					"official" => "Laosz",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Vientiane",
			"tld" => "la",
		),
		"LB" => array(
			"native" => array(
				0 => "ar",
				1 => "fr",
			),
			"names" => array(
				"ar" => array(
					"short" => "لُبْنَان‎",
					"official" => "اَلْجُمْهُورِيَّة اَللُّبْنَانِيَّة",
				),
				"fr" => array(
					"short" => "Liban",
					"official" => "République libanaise",
				),
				"en" => array(
					"short" => "Lebanon",
					"official" => "Republic of Lebanon",
				),
				"hu" => array(
					"short" => "Libanon",
					"official" => "Libanon",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Beirut",
			"tld" => "lb",
		),
		"LC" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Saint Lucia",
					"official" => "Saint Lucia",
				),
				"hu" => array(
					"short" => "Saint Lucia",
					"official" => "Saint Lucia",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Lucia",
			"tld" => "lc",
		),
		"LI" => array(
			"native" => array(
				0 => "de",
			),
			"names" => array(
				"de" => array(
					"short" => "Liechtenstein",
					"official" => "Fürstentum Liechtenstein",
				),
				"en" => array(
					"short" => "Liechtenstein",
					"official" => "Principality of Liechtenstein",
				),
				"hu" => array(
					"short" => "Liechtenstein",
					"official" => "Liechtenstein Hercegség",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Vaduz",
			"tld" => "li",
		),
		"LK" => array(
			"native" => array(
				0 => "si",
				1 => "ta",
			),
			"names" => array(
				"si" => array(
					"short" => "Sri Lanka",
					"official" => "Sri Lanka",
				),
				"ta" => array(
					"short" => "Sri Lanka",
					"official" => "Sri Lanka",
				),
				"en" => array(
					"short" => "Sri Lanka",
					"official" => "Democratic Socialist Republic of Sri Lanka",
				),
				"hu" => array(
					"short" => "Srí Lanka",
					"official" => "Srí Lanka",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Colombo",
			"tld" => "lk",
		),
		"LR" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Liberia",
					"official" => "Republic of Liberia",
				),
				"hu" => array(
					"short" => "Libéria",
					"official" => "Libériai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Monrovia",
			"tld" => "lr",
		),
		"LS" => array(
			"native" => array(
				0 => "st",
				1 => "en",
			),
			"names" => array(
				"st" => array(
					"short" => "Lesotho",
					"official" => "Muso oa Lesotho",
				),
				"en" => array(
					"short" => "Lesotho",
					"official" => "Kingdom of Lesotho",
				),
				"hu" => array(
					"short" => "Lesotho",
					"official" => "Lesothói Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Maseru",
			"tld" => "ls",
		),
		"LT" => array(
			"native" => array(
				0 => "lt",
			),
			"names" => array(
				"lt" => array(
					"short" => "Lietuva",
					"official" => "Lietuvos Respublika",
				),
				"en" => array(
					"short" => "Lithuania",
					"official" => "Republic of Lithuania",
				),
				"hu" => array(
					"short" => "Litvánia",
					"official" => "Litván Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "lt",
			"timezone" => "Europe/Vilnius",
		),
		"LU" => array(
			"native" => array(
				0 => "lb",
				1 => "de",
				2 => "fr",
			),
			"names" => array(
				"lb" => array(
					"short" => "Luxembourg",
					"official" => "Groussherzogtum Lëtzebuerg",
				),
				"de" => array(
					"short" => "Luxemburg",
					"official" => "Großherzogtum Luxemburg",
				),
				"fr" => array(
					"short" => "Luxembourg",
					"official" => "Grand-Duché de Luxembourg",
				),
				"en" => array(
					"short" => "Luxembourg",
					"official" => "Grand Duchy of Luxembourg",
				),
				"hu" => array(
					"short" => "Luxemburg",
					"official" => "Luxemburgi Nagyhercegség",
				),
			),
			"eu" => true,
			"tld" => "lu",
			"timezone" => "Europe/Luxembourg",
		),
		"LV" => array(
			"native" => "lv",
			"names" => array(
				"lv" => array(
					"short" => "Latvija",
					"official" => "Latvijas Republika",
				),
				"en" => array(
					"short" => "Latvia",
					"official" => "Republic of Latvia",
				),
				"hu" => array(
					"short" => "Lettország",
					"official" => "Lett Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "lv",
			"timezone" => "Europe/Riga",
		),
		"LY" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "ليبيا",
					"official" => "ليبيا",
				),
				"en" => array(
					"short" => "Libya",
					"official" => "Libya",
				),
				"hu" => array(
					"short" => "Líbia",
					"official" => "Líbia",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Tripoli",
			"tld" => "ly",
		),
		"MA" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "المغرب‎",
					"official" => "المملكة المغربية",
				),
				"en" => array(
					"short" => "Kingdom of Morocco",
					"official" => "Kingdom of Morocco",
				),
				"hu" => array(
					"short" => "Marokkó",
					"official" => "Marokkói Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Casablanca",
			"tld" => "ma",
		),
		"MC" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Monaco",
					"official" => "Principauté de Monaco",
				),
				"en" => array(
					"short" => "Monaco",
					"official" => "Principality of Monaco",
				),
				"hu" => array(
					"short" => "Monaco",
					"official" => "Monacói Hercegség",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Monaco",
			"tld" => "mc",
		),
		"MD" => array(
			"native" => array(
				0 => "mo",
			),
			"names" => array(
				"mo" => array(
					"short" => "Moldova",
					"official" => "Republica Moldova",
				),
				"en" => array(
					"short" => "Moldova",
					"official" => "Republic of Moldova",
				),
				"hu" => array(
					"short" => "Moldova",
					"official" => "Moldovai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Chisinau",
			"tld" => "md",
		),
		"ME" => array(
			"native" => array(
			),
			"names" => array(
				"en" => array(
					"short" => "Montenegro",
					"official" => "Montenegro",
				),
				"hu" => array(
					"short" => "Montenegró",
					"official" => "Montenegró",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Podgorica",
			"tld" => "me",
		),
		"MF" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Saint-Martin",
					"official" => "Collectivité de Saint-Martin",
				),
				"en" => array(
					"short" => "Saint Martin",
					"official" => "Collectivity of Saint Martin",
				),
				"hu" => array(
					"short" => "Saint-Martin",
					"official" => "Saint Martin Közösség",
				),
			),
			"eu" => false,
			"timezone" => "America/Marigot",
			"tld" => "mf",
		),
		"MG" => array(
			"native" => array(
				0 => "mg",
				1 => "fr",
			),
			"names" => array(
				"mg" => array(
					"short" => "Madagasikara",
					"official" => "Repoblikan'i Madagasikara",
				),
				"fr" => array(
					"short" => "Madagascar",
					"official" => "République de Madagascar",
				),
				"en" => array(
					"short" => "Madagascar",
					"official" => "Republic of Madagascar",
				),
				"hu" => array(
					"short" => "Madagaszkár",
					"official" => "Madagaszkári Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Antananarivo",
			"tld" => "mg",
		),
		"MH" => array(
			"native" => array(
				0 => "mh",
				1 => "en",
			),
			"names" => array(
				"mh" => array(
					"short" => "Aolepān Aorōkin Majel",
					"official" => "Aolepān Aorōkin Majel",
				),
				"en" => array(
					"short" => "Marshall Islands",
					"official" => "Republic of the Marshall Islands",
				),
				"hu" => array(
					"short" => "Marshall-szigetek",
					"official" => "Marshall-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Majuro",
			"tld" => "mh",
		),
		"MK" => array(
			"native" => array(
				0 => "mk",
			),
			"names" => array(
				"mk" => array(
					"short" => "Makedonija",
					"official" => "Republika Makedonija",
				),
				"en" => array(
					"short" => "Macedonia",
					"official" => "Republic of Macedonia",
				),
				"hu" => array(
					"short" => "Macedónia",
					"official" => "Macedón Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Skopje",
			"tld" => "mk",
		),
		"ML" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Mali",
					"official" => "République du Mali",
				),
				"en" => array(
					"short" => "Mali",
					"official" => "Republic of Mali",
				),
				"hu" => array(
					"short" => "Mali",
					"official" => "Mali Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Bamako",
			"tld" => "ml",
		),
		"MM" => array(
			"native" => array(
				0 => "my",
			),
			"names" => array(
				"my" => array(
					"short" => "Myanma",
					"official" => "Pyidaunzu Thanmăda Myăma Nainngandaw",
				),
				"en" => array(
					"short" => "Burma",
					"official" => "Republic of the Union of Myanmar",
				),
				"hu" => array(
					"short" => "Mianmar",
					"official" => "Mianmari Államszövetség Köztársasága",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Rangoon",
			"tld" => "mm",
		),
		"MN" => array(
			"native" => array(
				0 => "mn",
			),
			"names" => array(
				"mn" => array(
					"short" => "Mongol uls",
					"official" => "Mongol uls",
				),
				"en" => array(
					"short" => "Mongolia",
					"official" => "Mongolia",
				),
				"hu" => array(
					"short" => "Mongólia",
					"official" => "Mongólia",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Ulan_Bator",
			"tld" => "mn",
		),
		"MO" => array(
			"native" => array(
				0 => "zh",
				1 => "pt",
			),
			"names" => array(
				"zh" => array(
					"short" => "澳門",
					"official" => "中華人民共和國澳門特別行政區",
				),
				"pt" => array(
					"short" => "Macau",
					"official" => "Região Administrativa Especial de Macau da Re",
				),
				"en" => array(
					"short" => "Macao",
					"official" => "Macao Special Administrative Region of the Pe",
				),
				"hu" => array(
					"short" => "Makaó",
					"official" => "Makaó, a Kínai Népköztársaság Különleges Közi",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Macau",
			"tld" => "mo",
		),
		"MP" => array(
			"native" => array(
				0 => "ch",
				1 => "en",
			),
			"names" => array(
				"ch" => array(
					"short" => "Sankattan Siha Na Islas Mariånas",
					"official" => "Sankattan Siha Na Islas Mariånas",
				),
				"en" => array(
					"short" => "Northern Mariana Islands",
					"official" => "Commonwealth of the Northern Mariana Islands",
				),
				"hu" => array(
					"short" => "Északi-Mariana-szigetek",
					"official" => "Északi-Mariana-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Saipan",
			"tld" => "mp",
		),
		"MQ" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Martinique ",
					"official" => "Martinique ",
				),
				"en" => array(
					"short" => "Martinique",
					"official" => "Martinique",
				),
				"hu" => array(
					"short" => "Martinique",
					"official" => "Martinique",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "mq",
		),
		"MR" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "موريتانيا",
					"official" => "الجمهورية الإسلامية الموريتانية",
				),
				"en" => array(
					"short" => "Mauritania",
					"official" => "Islamic Republic of Mauritania",
				),
				"hu" => array(
					"short" => "Mauritánia",
					"official" => "Mauritániai Iszlám Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Nouakchott",
			"tld" => "mr",
		),
		"MS" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Montserrat",
					"official" => "Montserrat",
				),
				"hu" => array(
					"short" => "Montserrat",
					"official" => "Montserrat",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Johns",
			"tld" => "ms",
		),
		"MT" => array(
			"native" => array(
				0 => "en",
				1 => "mt",
			),
			"names" => array(
				"mt" => array(
					"short" => "Malta",
					"official" => "Repubblika ta' Malta",
				),
				"en" => array(
					"short" => "Malta",
					"official" => "Republic of Malta",
				),
				"hu" => array(
					"short" => "Málta",
					"official" => "Máltai Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "mt",
			"timezone" => "Europe/Malta",
		),
		"MU" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Mauritius",
					"official" => "Republic of Mauritius",
				),
				"hu" => array(
					"short" => "Mauritius",
					"official" => "Mauritiusi Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Mauritius",
			"tld" => "mu",
		),
		"MV" => array(
			"native" => array(
				0 => "dv",
			),
			"names" => array(
				"dv" => array(
					"short" => "Dhivehi Raa'je",
					"official" => "Dhivehi Raa'jeyge Jumhooriyya",
				),
				"en" => array(
					"short" => "Maldives",
					"official" => "Republic of Maldives",
				),
				"hu" => array(
					"short" => "Maldív-szigetek",
					"official" => "Maldív Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Maldives",
			"tld" => "mv",
		),
		"MW" => array(
			"native" => array(
				0 => "ny",
				1 => "en",
			),
			"names" => array(
				"ny" => array(
					"short" => "Malawi",
					"official" => "Chalo cha Malawi",
				),
				"en" => array(
					"short" => "Malawi",
					"official" => "Republic of Malawi",
				),
				"hu" => array(
					"short" => "Malawi",
					"official" => "Malawi Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Maputo",
			"tld" => "mw",
		),
		"MX" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "México",
					"official" => "Estados Unidos Mexicanos",
				),
				"en" => array(
					"short" => "Mexico",
					"official" => "United Mexican States",
				),
				"hu" => array(
					"short" => "Mexikó",
					"official" => "Mexikói Egyesült Államok",
				),
			),
			"eu" => false,
			"timezone" => "America/Mexico_City",
			"tld" => "mx",
		),
		"MY" => array(
			"native" => array(
			),
			"names" => array(
				"en" => array(
					"short" => "Malaysia",
					"official" => "Malaysia",
				),
				"hu" => array(
					"short" => "Malajzia",
					"official" => "Malajzia",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Kuala_Lumpur",
			"tld" => "my",
		),
		"MZ" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "Moçambique",
					"official" => "República de Moçambique",
				),
				"en" => array(
					"short" => "Mozambique",
					"official" => "Republic of Mozambique",
				),
				"hu" => array(
					"short" => "Mozambik",
					"official" => "Mozambiki Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Maputo",
			"tld" => "mz",
		),
		"NA" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Namibia",
					"official" => "Republic of Namibia",
				),
				"hu" => array(
					"short" => "Namíbia",
					"official" => "Namíbiai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Windhoek",
			"tld" => "na",
		),
		"NC" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Nouvelle-Calédonie",
					"official" => "Nouvelle-Calédonie",
				),
				"en" => array(
					"short" => "New Caledonia",
					"official" => "New Caledonia",
				),
				"hu" => array(
					"short" => "Új-Kaledónia",
					"official" => "Új-Kaledónia",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Noumea",
			"tld" => "nc",
		),
		"NE" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Niger",
					"official" => "République du Niger",
				),
				"en" => array(
					"short" => "Niger",
					"official" => "Republic of Niger",
				),
				"hu" => array(
					"short" => "Niger",
					"official" => "Niger",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Niamey",
			"tld" => "ne",
		),
		"NF" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Norfolk Island",
					"official" => "Territory of Norfolk Island",
				),
				"hu" => array(
					"short" => "Norfolk-sziget",
					"official" => "Norfolk-sziget",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Norfolk",
			"tld" => "nf",
		),
		"NG" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Nigeria",
					"official" => "Federal Republic of Nigeria",
				),
				"hu" => array(
					"short" => "Nigéria",
					"official" => "Nigériai Szövetségi Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Lagos",
			"tld" => "ng",
		),
		"NI" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Nicaragua",
					"official" => "República de Nicaragua",
				),
				"en" => array(
					"short" => "Nicaragua",
					"official" => "Republic of Nicaragua",
				),
				"hu" => array(
					"short" => "Nicaragua",
					"official" => "Nicaragua",
				),
			),
			"eu" => false,
			"timezone" => "America/Managua",
			"tld" => "ni",
		),
		"NL" => array(
			"native" => "nl",
			"names" => array(
				"en" => array(
					"short" => "Netherlands",
					"official" => "Kingdom of Netherlands",
				),
				"hu" => array(
					"short" => "Hollandia",
					"official" => "Holland Királyság",
				),
				"nl" => array(
					"short" => "Nederland",
					"official" => "Koninkrijk der Nederlanden",
				),
			),
			"eu" => true,
			"tld" => "nl",
			"timezone" => "Europe/Amsterdam",
		),
		"NO" => array(
			"native" => array(
				0 => "nn",
			),
			"names" => array(
				"nn" => array(
					"short" => "Norge",
					"official" => "Kongeriket Norge",
				),
				"en" => array(
					"short" => "Norway",
					"official" => "Kingdom of Norway",
				),
				"hu" => array(
					"short" => "Norvégia",
					"official" => "Norvég Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Oslo",
			"tld" => "no",
		),
		"NP" => array(
			"native" => array(
				0 => "ne",
			),
			"names" => array(
				"ne" => array(
					"short" => "Nepāl",
					"official" => "Sanghiya Loktāntrik Ganatantra Nepāl",
				),
				"en" => array(
					"short" => "Nepal",
					"official" => "Federal Democratic Republic of Nepal",
				),
				"hu" => array(
					"short" => "Nepál",
					"official" => "Nepál",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Katmandu",
			"tld" => "np",
		),
		"NR" => array(
			"native" => array(
				0 => "en",
				1 => "na",
			),
			"names" => array(
				"en" => array(
					"short" => "Nauru",
					"official" => "Republic of Nauru",
				),
				"na" => array(
					"short" => "Naoero",
					"official" => "Ripublik Naoero",
				),
				"hu" => array(
					"short" => "Nauru",
					"official" => "Nauru",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Nauru",
			"tld" => "nr",
		),
		"NU" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Niue",
					"official" => "Niue",
				),
				"hu" => array(
					"short" => "Niue",
					"official" => "Niue",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Niue",
			"tld" => "nu",
		),
		"NZ" => array(
			"native" => array(
				0 => "en",
				1 => "mi",
			),
			"names" => array(
				"en" => array(
					"short" => "New Zealand",
					"official" => "New Zealand",
				),
				"mi" => array(
					"short" => "Aotearoa",
					"official" => "Aotearoa",
				),
				"hu" => array(
					"short" => "Új-Zéland",
					"official" => "Új-Zéland",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Auckland",
			"tld" => "nz",
		),
		"OM" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "ʻUmān",
					"official" => "Salṭanat ʻUmān",
				),
				"en" => array(
					"short" => "Oman",
					"official" => "Sultanate of Oman",
				),
				"hu" => array(
					"short" => "Omán",
					"official" => "Omán",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Muscat",
			"tld" => "om",
		),
		"PA" => array(
			"native" => array(
				0 => "en",
				1 => "es",
			),
			"names" => array(
				"en" => array(
					"short" => "Panama",
					"official" => "Republic of Panama",
				),
				"es" => array(
					"short" => "Panamá",
					"official" => "República de Panamá",
				),
				"hu" => array(
					"short" => "Panama",
					"official" => "Panamai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "America/Panama",
			"tld" => "pa",
		),
		"PE" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Perú",
					"official" => "República del Perú",
				),
				"en" => array(
					"short" => "Peru",
					"official" => "Republic of Peru",
				),
				"hu" => array(
					"short" => "Peru",
					"official" => "Peru",
				),
			),
			"eu" => false,
			"timezone" => "America/Lima",
			"tld" => "pe",
		),
		"PF" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Polynésie française",
					"official" => "Polynésie française",
				),
				"en" => array(
					"short" => "French Polynesia",
					"official" => "French Polynesia",
				),
				"hu" => array(
					"short" => "Francia Polinézia",
					"official" => "Francia Polinézia",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Tahiti",
			"tld" => "pf",
		),
		"PG" => array(
			"native" => array(
				0 => "en",
				1 => "ho",
			),
			"names" => array(
				"en" => array(
					"short" => "Papua New Guinea",
					"official" => "Independent State of Papua New Guinea",
				),
				"ho" => array(
					"short" => "Papua Niugini",
					"official" => "Independen Stet bilong Papua Niugini",
				),
				"hu" => array(
					"short" => "Pápua Új-Guinea",
					"official" => "Pápua Új-Guinea",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Port_Moresby",
			"tld" => "pg",
		),
		"PH" => array(
			"native" => array(
				0 => "tl",
				1 => "en",
			),
			"names" => array(
				"tl" => array(
					"short" => "Pilipinas",
					"official" => "Republika ng Pilipinas",
				),
				"en" => array(
					"short" => "Philippines",
					"official" => "Republic of the Philippines",
				),
				"hu" => array(
					"short" => "Fülöp-szigetek",
					"official" => "Fülöp-szigeteki Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Manila",
			"tld" => "ph",
		),
		"PK" => array(
			"native" => array(
				0 => "ur",
				1 => "en",
			),
			"names" => array(
				"ur" => array(
					"short" => "پاکِستان",
					"official" => "اسلامی جمہوریۂ پاکستان",
				),
				"en" => array(
					"short" => "Pakistan",
					"official" => "Islamic Republic of Pakistan",
				),
				"hu" => array(
					"short" => "Pakisztán",
					"official" => "Pakisztáni Iszlám Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Karachi",
			"tld" => "pk",
		),
		"PL" => array(
			"native" => "pl",
			"names" => array(
				"pl" => array(
					"short" => "Polska",
					"official" => "Rzeczpospolita Polska",
				),
				"en" => array(
					"short" => "Poland",
					"official" => "Republic of Poland",
				),
				"hu" => array(
					"short" => "Lengyelország",
					0 => "Lengyen Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "pl",
			"timezone" => "Europe/Warsaw",
		),
		"PM" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Saint-Pierre-et-Miquelon",
					"official" => "Collectivité territoriale de Saint-Pierre-et-",
				),
				"en" => array(
					"short" => "Saint Pierre and Miquelon",
					"official" => "Territorial Collectivity of Saint Pierre and ",
				),
				"hu" => array(
					"short" => "Saint-Pierre és Miquelo",
					"official" => "Saint-Pierre és Miquelon Területi Közösség",
				),
			),
			"eu" => false,
			"timezone" => "America/Miquelon",
			"tld" => "pm",
		),
		"PN" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Pitcairn Islands",
					"official" => "Pitcairn, Henderson, Ducie and Oeno Islands",
				),
				"hu" => array(
					"short" => "Pitcairn-szigetek",
					"official" => "Pitcairn-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Pitcairn",
			"tld" => "pn",
		),
		"PR" => array(
			"native" => array(
				0 => "en",
				1 => "es",
			),
			"names" => array(
				"en" => array(
					"short" => "Puerto Rico",
					"official" => "Commonwealth of Puerto Rico",
				),
				"es" => array(
					"short" => "Puerto Rico",
					"official" => "Estado Libre Asociado de Puerto Rico",
				),
				"hu" => array(
					"short" => "Puerto Rico",
					"official" => "Puerto Ricoi Szabadon Társult Állam",
				),
			),
			"eu" => false,
			"timezone" => "America/Puerto_Rico",
			"tld" => "pr",
		),
		"PS" => array(
			"native" => array(
			),
			"names" => array(
				"en" => array(
					"short" => "Palestinian territories",
					"official" => "Palestinian territories",
				),
				"hu" => array(
					"short" => "Palesztin területek",
					"official" => "Palesztin területek",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Gaza",
			"tld" => "ps",
		),
		"PT" => array(
			"native" => "pt",
			"names" => array(
				"pt" => array(
					"short" => "Portugal",
					"official" => "República Portuguesa",
				),
				"en" => array(
					"short" => "Portugal",
					"official" => "Republic of Portugal",
				),
				"hu" => array(
					"short" => "Portugál",
					"official" => "Portugál Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "pt",
			"timezone" => "Atlantic/Azores",
		),
		"PW" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Palau",
					"official" => "Republic of Palau",
				),
				"hu" => array(
					"short" => "Palau",
					"official" => "Palau",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Palau",
			"tld" => "pw",
		),
		"PY" => array(
			"native" => array(
				0 => "gn",
				1 => "es",
			),
			"names" => array(
				"gn" => array(
					"short" => "Paraguái",
					"official" => "Tetã Paraguái",
				),
				"es" => array(
					"short" => "Paraguay",
					"official" => "República del Paraguay",
				),
				"en" => array(
					"short" => "Paraguay",
					"official" => "Republic of Paraguay",
				),
				"hu" => array(
					"short" => "Paraguay",
					"official" => "Paraguay",
				),
			),
			"eu" => false,
			"timezone" => "America/Asuncion",
			"tld" => "py",
		),
		"QA" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "قطر‎",
					"official" => "دولة قطر",
				),
				"en" => array(
					"short" => "Qatar",
					"official" => "State of Qatar",
				),
				"hu" => array(
					"short" => "Katar",
					"official" => "Katari Állam",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Qatar",
			"tld" => "qa",
		),
		"RE" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "La Réunion",
					"official" => "La Réunion",
				),
				"en" => array(
					"short" => "Réunion",
					"official" => "Réunion",
				),
				"hu" => array(
					"short" => "Réunion",
					"official" => "Réunion",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Reunion",
			"tld" => "re",
		),
		"RO" => array(
			"native" => "ro",
			"names" => array(
				"ro" => "România",
				"en" => "Romania",
				"hu" => "Románia",
			),
			"eu" => true,
			"tld" => "ro",
			"timezone" => "Europe/Bucharest",
		),
		"RS" => array(
			"native" => array(
				0 => "sr",
			),
			"names" => array(
				"sr" => array(
					"short" => "Србија",
					"official" => "Република Србија",
				),
				"en" => array(
					"short" => "Serbia",
					"official" => "Republic of Serbia",
				),
				"hu" => array(
					"short" => "Szerbia",
					"official" => "Szerbia Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Belgrade",
			"tld" => "rs",
		),
		"RU" => array(
			"native" => array(
				0 => "ru",
			),
			"names" => array(
				"ru" => array(
					"short" => "Россия",
					"official" => "Российская Федерация",
				),
				"en" => array(
					"short" => "Russia",
					"official" => "Russian Federation",
				),
				"hu" => array(
					"short" => "Oroszország",
					"official" => "Oroszországi Föderáció",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Moscow",
			"tld" => "ru",
		),
		"RW" => array(
			"native" => array(
				0 => "rw",
				1 => "fr",
				2 => "en",
			),
			"names" => array(
				"rw" => array(
					"short" => "Rwanda",
					"official" => "Repubulika y'u Rwanda",
				),
				"fr" => array(
					"short" => "Rwanda",
					"official" => "République du Rwanda",
				),
				"en" => array(
					"short" => "Rwanda",
					"official" => "Republic of Rwanda",
				),
				"hu" => array(
					"short" => "Ruanda",
					"official" => "Ruandai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Kigali",
			"tld" => "rw",
		),
		"SA" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "العربية السعودية",
					"official" => "المملكة العربية السعودية",
				),
				"en" => array(
					"short" => "Saudi Arabia",
					"official" => "Kingdom of Saudi Arabia",
				),
				"hu" => array(
					"short" => "Szaúd-Arábia",
					"official" => "Szaúd-Arábia",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Riyadh",
			"tld" => "sa",
		),
		"SB" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Solomon Islands",
					"official" => "Solomon Islands",
				),
				"hu" => array(
					"short" => "Salamon-szigetek",
					"official" => "Salamon-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Guadalcanal",
			"tld" => "sb",
		),
		"SC" => array(
			"native" => array(
				0 => "fr",
				1 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Seychelles",
					"official" => "Republic of Seychelles",
				),
				"fr" => array(
					"short" => "Seychelles",
					"official" => "République des Seychelles",
				),
				"hu" => array(
					"short" => "Seychelle-szigetek",
					"official" => "Seychelle-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Mahe",
			"tld" => "sc",
		),
		"SD" => array(
			"native" => array(
				0 => "ar",
				1 => "en",
			),
			"names" => array(
				"ar" => array(
					"short" => "جمهورية السودان",
					"official" => "جمهورية السودان",
				),
				"en" => array(
					"short" => "Sudan",
					"official" => "Republic of the Sudan",
				),
				"hu" => array(
					"short" => "Szudán",
					"official" => "Szudáni Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Khartoum",
			"tld" => "sd",
		),
		"SE" => array(
			"native" => "sv",
			"names" => array(
				"sv" => array(
					"short" => "Sverige",
					"official" => "Konungariket Sverige",
				),
				"en" => array(
					"short" => "Sweden",
					"official" => "Kingdom of Sweden",
				),
				"hu" => array(
					"short" => "Svédország",
					"official" => "Svéd királyság",
				),
			),
			"eu" => true,
			"tld" => "fi",
			"timezone" => "Europe/Stockholm",
		),
		"SG" => array(
			"native" => array(
				0 => "ta",
				1 => "zh",
				2 => "ms",
				3 => "en",
			),
			"names" => array(
				"ta" => array(
					"short" => "Singapura",
					"official" => "Singapura",
				),
				"zh" => array(
					"short" => "新加坡共和国",
					"official" => "新加坡共和国",
				),
				"ms" => array(
					"short" => "Singapore",
					"official" => "Singapore",
				),
				"en" => array(
					"short" => "Singapore",
					"official" => "Republic of Singapore",
				),
				"hu" => array(
					"short" => "Szingapúr",
					"official" => "Szingapúri Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Singapore",
			"tld" => "sg",
		),
		"SH" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Saint Helena, Ascension and Tristan da Cunha",
					"official" => "Saint Helena, Ascension and Tristan da Cunha",
				),
				"hu" => array(
					"short" => "Saint Helena, Ascension és Tristan da Cunha",
					"official" => "Saint Helena, Ascension és Tristan da Cunha",
				),
			),
			"eu" => false,
			"timezone" => "Atlantic/St_Helena",
			"tld" => "sh",
		),
		"SI" => array(
			"native" => "sl",
			"names" => array(
				"sl" => array(
					"short" => "Slovenija",
					"official" => "Republika Slovenija",
				),
				"en" => array(
					"short" => "Slovenia",
					"official" => "Republic of Slovenia",
				),
				"hu" => array(
					"short" => "Szlovénia",
					"official" => "Szlovén Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "si",
			"timezone" => "Europe/Ljubljana",
		),
		"SJ" => array(
			"native" => array(
				0 => "nb",
			),
			"names" => array(
				"nb" => array(
					"short" => "Svalbard og Jan Mayen",
					"official" => "Svalbard og Jan Mayen",
				),
				"en" => array(
					"short" => "Svalbard and Jan Mayen",
					"official" => "Svalbard and Jan Mayen",
				),
				"hu" => array(
					"short" => "Svalbard és Jan Mayen",
					"official" => "Svalbard és Jan Mayen",
				),
			),
			"eu" => false,
			"timezone" => "Arctic/Longyearbyen",
			"tld" => "sj",
		),
		"SK" => array(
			"native" => "sk",
			"names" => array(
				"sk" => array(
					"short" => "Slovensko",
					"official" => "Slovenská republika",
				),
				"en" => array(
					"short" => "Slovakia",
					"official" => "Republic of Slovakia",
				),
				"hu" => array(
					"short" => "Szlovákia",
					"official" => "Szlovák Köztársaság",
				),
			),
			"eu" => true,
			"tld" => "sk",
			"timezone" => "Europe/Bratislava",
		),
		"SL" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Sierra Leone",
					"official" => "Republic of Sierra Leone Sierra Leone",
				),
				"hu" => array(
					"short" => "Sierra Leone",
					"official" => "Sierra Leone Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Freetown",
			"tld" => "sl",
		),
		"SM" => array(
			"native" => array(
				0 => "it",
			),
			"names" => array(
				"it" => array(
					"short" => "San Marino",
					"official" => "Repubblica di San Marino",
				),
				"en" => array(
					"short" => "San Marino",
					"official" => "Republic of San Marino",
				),
				"hu" => array(
					"short" => "San Marino",
					"official" => "San Marino Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/San_Marino",
			"tld" => "sm",
		),
		"SN" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Sénégal",
					"official" => "République du Sénégal",
				),
				"en" => array(
					"short" => "Senegal",
					"official" => "Republic of Senegal",
				),
				"hu" => array(
					"short" => "Szenegál",
					"official" => "Szenegáli Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Dakar",
			"tld" => "sn",
		),
		"SO" => array(
			"native" => array(
				0 => "so",
				1 => "ar",
			),
			"names" => array(
				"so" => array(
					"short" => "Soomaaliya",
					"official" => "Jamhuuriyadda Soomaaliya",
				),
				"ar" => array(
					"short" => "الصومال‎",
					"official" => "جمهورية الصومال‎",
				),
				"en" => array(
					"short" => "Somalia",
					"official" => "Somali Republic",
				),
				"hu" => array(
					"short" => "Szomália",
					"official" => "Szomáliai Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Mogadishu",
			"tld" => "so",
		),
		"SR" => array(
			"native" => array(
				0 => "nl",
			),
			"names" => array(
				"nl" => array(
					"short" => "Suriname",
					"official" => "Republiek Suriname",
				),
				"en" => array(
					"short" => "Suriname",
					"official" => "Republic of Suriname",
				),
				"hu" => array(
					"short" => "Suriname",
					"official" => "Suriname",
				),
			),
			"eu" => false,
			"timezone" => "America/Paramaribo",
			"tld" => "sr",
		),
		"ST" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "São Tomé e Príncipe",
					"official" => "República Democrática de São Tomé e Príncipe",
				),
				"en" => array(
					"short" => "São Tomé and Príncipe",
					"official" => "Democratic Republic of São Tomé and Príncipe",
				),
				"hu" => array(
					"short" => "São Tomé és Príncipe",
					"official" => "São Tomé és Príncipe Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Sao_Tome",
			"tld" => "st",
		),
		"SV" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "El Salvador",
					"official" => "República de El Salvador",
				),
				"en" => array(
					"short" => "El Salvador",
					"official" => "Republic of El Salvador",
				),
				"hu" => array(
					"short" => "Salvador",
					"official" => "Salvador",
				),
			),
			"eu" => false,
			"timezone" => "America/El_Salvador",
			"tld" => "sv",
		),
		"SX" => array(
			"native" => array(
				0 => "nl",
				1 => "en",
			),
			"names" => array(
				"nl" => array(
					"short" => "Sint Maarten",
					"official" => "Sint Maarten",
				),
				"en" => array(
					"short" => "Sint Maarten",
					"official" => "Sint Maarten",
				),
				"hu" => array(
					"short" => "Sint Maarten",
					"official" => "Sint Maarten",
				),
			),
			"eu" => false,
			"timezone" => "America/Marigot",
			"tld" => "sx",
		),
		"SY" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "سورية",
					"official" => "الجمهورية العربية السورية",
				),
				"en" => array(
					"short" => "Syria",
					"official" => "Syrian Arab Republic",
				),
				"hu" => array(
					"short" => "Szíria",
					"official" => "Szíriai Arab Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Damascus",
			"tld" => "sy",
		),
		"SZ" => array(
			"native" => array(
				0 => "ss",
				1 => "en",
			),
			"names" => array(
				"ss" => array(
					"short" => "Swatini",
					"official" => "Umbuso weSwatini",
				),
				"en" => array(
					"short" => "Swaziland",
					"official" => "Kingdom of Swaziland",
				),
				"hu" => array(
					"short" => "Szváziföld",
					"official" => "Szváziföldi Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Mbabane",
			"tld" => "sz",
		),
		"TC" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Turks and Caicos Islands",
					"official" => "Turks and Caicos Islands",
				),
				"hu" => array(
					"short" => "Turks- és Caicos-szigetek",
					"official" => "Turks- és Caicos-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/Grand_Turk",
			"tld" => "tc",
		),
		"TD" => array(
			"native" => array(
				0 => "ar",
				1 => "fr",
			),
			"names" => array(
				"ar" => array(
					"short" => "تشاد",
					"official" => "جمهورية تشاد",
				),
				"fr" => array(
					"short" => "Tchad",
					"official" => "République du Tchad",
				),
				"en" => array(
					"short" => "Chad",
					"official" => "Republic of Chad",
				),
				"hu" => array(
					"short" => "Csád",
					"official" => "Csád Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Ndjamena",
			"tld" => "td",
		),
		"TF" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Terres australes et antarctiques françaises",
					"official" => "Territoire des Terres australes et antarctiqu",
				),
				"en" => array(
					"short" => "French Southern and Antarctic Lands",
					"official" => "Territory of the French Southern and Antarcti",
				),
				"hu" => array(
					"short" => "Francia déli és antarktiszi területek",
					"official" => "Francia déli és antarktiszi területek",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Kerguelen",
			"tld" => "tf",
		),
		"TG" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Togo",
					"official" => "République togolaise",
				),
				"en" => array(
					"short" => "Togo",
					"official" => "Togolese Republic",
				),
				"hu" => array(
					"short" => "Togo",
					"official" => "Togói Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Lome",
			"tld" => "tg",
		),
		"TH" => array(
			"native" => array(
				0 => "th",
			),
			"names" => array(
				"th" => array(
					"short" => "ราชอาณาจักรไทย",
					"official" => "ราชอาณาจักรไทย",
				),
				"en" => array(
					"short" => "Thailand",
					"official" => "Kingdom of Thailand",
				),
				"hu" => array(
					"short" => "Thaiföld",
					"official" => "Thaiföldi Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Bangkok",
			"tld" => "th",
		),
		"TJ" => array(
			"native" => array(
				0 => "tg",
			),
			"names" => array(
				"tg" => array(
					"short" => "Тоҷикистон",
					"official" => "Ҷумҳурии Тоҷикистон",
				),
				"en" => array(
					"short" => "Tajikistan",
					"official" => "Republic of Tajikistan",
				),
				"hu" => array(
					"short" => "Tádzsikisztán",
					"official" => "Tádzsik Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Dushanbe",
			"tld" => "tj",
		),
		"TK" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Tokelau",
					"official" => "Tokelau",
				),
				"hu" => array(
					"short" => "Tokelau-szigetek",
					"official" => "Tokelau-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Fakaofo",
			"tld" => "tk",
		),
		"TL" => array(
			"native" => array(
				0 => "pt",
			),
			"names" => array(
				"pt" => array(
					"short" => "Timor-Leste",
					"official" => "República Democrática de Timor-Leste",
				),
				"en" => array(
					"short" => "Timor-Leste",
					"official" => "Democratic Republic of Timor-Leste",
				),
				"hu" => array(
					"short" => "Kelet-Timor",
					"official" => "Kelet-timori Demokratikus Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Dili",
			"tld" => "tl",
		),
		"TM" => array(
			"native" => array(
				0 => "tk",
			),
			"names" => array(
				"tk" => array(
					"short" => "Türkmenistan",
					"official" => "Türkmenistan Jumhuriýäti",
				),
				"en" => array(
					"short" => "Turkmenistan",
					"official" => "Turkmenistan",
				),
				"hu" => array(
					"short" => "Türkmenisztán",
					"official" => "Türkmén Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Ashgabat",
			"tld" => "tm",
		),
		"TN" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "تونس‎",
					"official" => "الجمهورية التونسية",
				),
				"en" => array(
					"short" => "Tonga",
					"official" => "Kingdom of Tonga",
				),
				"hu" => array(
					"short" => "Tonga",
					"official" => "Tongai Királyság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Tunis",
			"tld" => "tn",
		),
		"TO" => array(
			"native" => array(
				0 => "to",
				1 => "en",
			),
			"names" => array(
				"to" => array(
					"short" => "Tonga",
					"official" => "Puleʻanga Fakatuʻi ʻo Tonga",
				),
				"en" => array(
					"short" => "Tonga",
					"official" => "Kingdom of Tonga",
				),
				"hu" => array(
					"short" => "Tonga",
					"official" => "Tonga-i királyság",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Tongatapu",
			"tld" => "to",
		),
		"TR" => array(
			"native" => array(
				0 => "tr",
			),
			"names" => array(
				"tr" => array(
					"short" => "Türkiye",
					"official" => "Türkiye Cumhuriyeti",
				),
				"en" => array(
					"short" => "Turkey",
					"official" => "Republic of Turkey",
				),
				"hu" => array(
					"short" => "Törökország",
					"official" => "Török Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Istanbul",
			"tld" => "tr",
		),
		"TT" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Trinidad and Tobago",
					"official" => "Republic of Trinidad and Tobago",
				),
				"hu" => array(
					"short" => "Trinidad és Tobago",
					"official" => "Trinidad és Tobago",
				),
			),
			"eu" => false,
			"timezone" => "America/Port_of_Spain",
			"tld" => "tt",
		),
		"TV" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Tuvalu",
					"official" => "Tuvalu",
				),
				"hu" => array(
					"short" => "Tuvalu",
					"official" => "Tuvalu",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Funafuti",
			"tld" => "tv",
		),
		"TW" => array(
			"native" => array(
				0 => "zh",
			),
			"names" => array(
				"zh" => array(
					"short" => "臺灣",
					"official" => "臺灣",
				),
				"en" => array(
					"short" => "Taiwan",
					"official" => "Taiwan",
				),
				"hu" => array(
					"short" => "Tajvan",
					"official" => "Tajvan",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Taipei",
			"tld" => "tw",
		),
		"TZ" => array(
			"native" => array(
				0 => "sw",
				1 => "en",
			),
			"names" => array(
				"sw" => array(
					"short" => "Tanzania",
					"official" => "Jamhuri ya Muungano wa Tanzania",
				),
				"en" => array(
					"short" => "Tanzania",
					"official" => "United Republic of Tanzania",
				),
				"hu" => array(
					"short" => "Tanzánia",
					"official" => "Tanzániai Egyesült Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Dar_es_Salaam",
			"tld" => "tz",
		),
		"UA" => array(
			"native" => array(
				0 => "uk",
			),
			"names" => array(
				"uk" => array(
					"short" => "Україна",
					"official" => "Україна",
				),
				"en" => array(
					"short" => "Ukraine",
					"official" => "Ukraine",
				),
				"hu" => array(
					"short" => "Ukrajna",
					"official" => "Ukrajna",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Kiev",
			"tld" => "ua",
		),
		"UG" => array(
			"native" => array(
				0 => "sw",
				1 => "en",
			),
			"names" => array(
				"sw" => array(
					"short" => "Uganda",
					"official" => "Jamhuri ya Uganda",
				),
				"en" => array(
					"short" => "Uganda",
					"official" => "Republic of Uganda",
				),
				"hu" => array(
					"short" => "Uganda",
					"official" => "Ugandai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Kampala",
			"tld" => "ug",
		),
		"UK" => array(
			"native" => "en",
			"names" => array(
				"en" => array(
					"short" => "United Kingdom",
					"official" => "United Kingdom of Great Britain and Northern Ireland",
				),
				"hu" => array(
					"short" => "Egyesült Királyság",
					"official" => "Nagy-Britannia és Észak-Írország Egyesült Királysága",
				),
			),
			"eu" => true,
			"tld" => "uk",
			"timezone" => "Europe/London",
		),
		"UM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "United States Minor Outlying Islands",
					"official" => "United States Minor Outlying Islands",
				),
				"hu" => array(
					"short" => "Az Amerikai Egyesült Államok lakatlan külbirt",
					"official" => "Az Amerikai Egyesült Államok lakatlan külbirt",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Johnston",
			"tld" => "um",
		),
		"US" => array(
			"native" => "en",
			"names" => array(
				"en" => array(
					"short" => "USA",
					"official" => "United States Of America",
				),
				"hu" => array(
					"short" => "USA",
					"official" => "Amerikai Egyesült Államok",
				),
			),
			"eu" => false,
			"tld" => "us",
			"timezone" => "US/Eastern",
		),
		"UY" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Uruguay",
					"official" => "República Oriental del Uruguay",
				),
				"en" => array(
					"short" => "Uruguay",
					"official" => "Oriental Republic of Uruguay",
				),
				"hu" => array(
					"short" => "Uruguay",
					"official" => "Uruguayi Keleti Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "America/Montevideo",
			"tld" => "uy",
		),
		"UZ" => array(
			"native" => array(
				0 => "uz",
			),
			"names" => array(
				"uz" => array(
					"short" => "O‘zbekiston",
					"official" => "O‘zbekiston Respublikasi",
				),
				"en" => array(
					"short" => "Uzbekistan",
					"official" => "Republic of Uzbekistan",
				),
				"hu" => array(
					"short" => "Üzbegisztán",
					"official" => "Üzbegisztán",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Samarkand",
			"tld" => "uz",
		),
		"VA" => array(
			"native" => array(
				0 => "it",
			),
			"names" => array(
				"it" => array(
					"short" => "Vaticano",
					"official" => "Stato della Città del Vaticano",
				),
				"en" => array(
					"short" => "Vatican",
					"official" => "Vatican City State",
				),
				"hu" => array(
					"short" => "Vatikán",
					"official" => "Vatikán",
				),
			),
			"eu" => false,
			"timezone" => "Europe/Vatican",
			"tld" => "va",
		),
		"VC" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Saint Vincent and the Grenadines",
					"official" => "Saint Vincent and the Grenadines",
				),
				"hu" => array(
					"short" => "Saint Vincent és a Grenadine-szigetek",
					"official" => "Saint Vincent és a Grenadine-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Vincent",
			"tld" => "vc",
		),
		"VE" => array(
			"native" => array(
				0 => "es",
			),
			"names" => array(
				"es" => array(
					"short" => "Venezuela",
					"official" => "República Bolivariana de Venezuela",
				),
				"en" => array(
					"short" => "Venezuela",
					"official" => "Bolivarian Republic of Venezuela",
				),
				"hu" => array(
					"short" => "Venezuela",
					"official" => "Venezuelai Bolivári Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "America/Caracas",
			"tld" => "ve",
		),
		"VG" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "British Virgin Islands",
					"official" => "British Virgin Islands",
				),
				"hu" => array(
					"short" => "Brit Virgin-szigetek",
					"official" => "Brit Virgin-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/Tortola",
			"tld" => "vg",
		),
		"VI" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "United States Virgin Islands",
					"official" => "United States Virgin Islands",
				),
				"hu" => array(
					"short" => "Amerikai Virgin-szigetek",
					"official" => "Amerikai Virgin-szigetek",
				),
			),
			"eu" => false,
			"timezone" => "America/St_Thomas",
			"tld" => "vi",
		),
		"VN" => array(
			"native" => array(
				0 => "vi",
			),
			"names" => array(
				"vi" => array(
					"short" => "Việt Nam",
					"official" => "Cộng hòa Xã hội chủ nghĩa Việt Nam",
				),
				"en" => array(
					"short" => "Socialist Republic of Vietnam",
					"official" => "Socialist Republic of Vietnam",
				),
				"hu" => array(
					"short" => "Vietnam",
					"official" => "Vietnami Szocialista Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Ho_Chi_Minh",
			"tld" => "vn",
		),
		"VU" => array(
			"native" => array(
				0 => "bi",
				1 => "fr",
				2 => "en",
			),
			"names" => array(
				"bi" => array(
					"short" => "Vanuatu",
					"official" => "Ripablik blong Vanuatu",
				),
				"fr" => array(
					"short" => "Vanuatu",
					"official" => "République de Vanuatu",
				),
				"en" => array(
					"short" => "Vanuatu",
					"official" => "Republic of Vanuatu",
				),
				"hu" => array(
					"short" => "Vanuatu",
					"official" => "Vanuatu",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Efate",
			"tld" => "vu",
		),
		"WF" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Wallis et Futuna",
					"official" => "Territoire des îles Wallis et Futuna",
				),
				"en" => array(
					"short" => "Wallis and Futuna",
					"official" => "Territory of the Wallis and Futuna Islands",
				),
				"hu" => array(
					"short" => "Wallis- és Futuna",
					"official" => "Wallis- és Futuna-szigetek Terület",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Wallis",
			"tld" => "wf",
		),
		"HM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Heard and McDonald Islands",
					"official" => "Heard and McDonald Islands",
				),
				"hu" => array(
					"short" => "Heard és McDonlad szigetek",
					"official" => "Heard és McDonlad szigetek",
				),
			),
			"eu" => false,
			"timezone" => "Etc/GMT+5",
			"tld" => "hm",
		),
		"WS" => array(
			"native" => array(
				0 => "sm",
				1 => "en",
			),
			"names" => array(
				"sm" => array(
					"short" => "Samoa",
					"official" => "Malo Sa'oloto Tuto'atasi o Samoa",
				),
				"en" => array(
					"short" => "Samoa",
					"official" => "Independent State of Samoa",
				),
				"hu" => array(
					"short" => "Szamoa",
					"official" => "Szamoai Független Állam",
				),
			),
			"eu" => false,
			"timezone" => "Pacific/Apia",
			"tld" => "ws",
		),
		"YE" => array(
			"native" => array(
				0 => "ar",
			),
			"names" => array(
				"ar" => array(
					"short" => "اليَمَن",
					"official" => "الجمهورية اليمنية",
				),
				"en" => array(
					"short" => "Yemen",
					"official" => "Republic of Yemen",
				),
				"hu" => array(
					"short" => "Jemen",
					"official" => "Jemeni Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Aden",
			"tld" => "ye",
		),
		"YT" => array(
			"native" => array(
				0 => "fr",
			),
			"names" => array(
				"fr" => array(
					"short" => "Mayotte",
					"official" => "Mayotte",
				),
				"en" => array(
					"short" => "Mayotte",
					"official" => "Mayotte",
				),
				"hu" => array(
					"short" => "Mayotte",
					"official" => "Mayotte",
				),
			),
			"eu" => false,
			"timezone" => "Indian/Mayotte",
			"tld" => "yt",
		),
		"ZA" => array(
			"native" => array(
				0 => "af",
				1 => "en",
				2 => "nr",
				3 => "st",
				4 => "ss",
				5 => "tn",
				6 => "ts",
				7 => "ve",
				8 => "xh",
				9 => "zu",
			),
			"names" => array(
				"af" => array(
					"short" => "Suid-Afrika",
					"official" => "Republiek van Suid-Afrika",
				),
				"en" => array(
					"short" => "South Africa",
					"official" => "Republic of South Africa",
				),
				"nr" => array(
					"short" => "Sewula Afrika",
					"official" => "iRiphabliki yeSewula Afrika",
				),
				"st" => array(
					"short" => "Afrika Borwa",
					"official" => "Rephaboliki ya Afrika Borwa",
				),
				"ss" => array(
					"short" => "Ningizimu Afrika",
					"official" => "iRiphabhulikhi yeNingizimu Afrika",
				),
				"tn" => array(
					"short" => "Aforika Borwa",
					"official" => "Rephaboliki ya Aforika Borwa",
				),
				"ts" => array(
					"short" => "Afrika Dzonga",
					"official" => "Riphabliki ra Afrika Dzonga",
				),
				"ve" => array(
					"short" => "Afurika Tshipembe",
					"official" => "Riphabuḽiki ya Afurika Tshipembe",
				),
				"xh" => array(
					"short" => "Zantsi Afrika",
					"official" => "iRiphabliki yomZantsi Afrika",
				),
				"zu" => array(
					"short" => "Ningizimu Afrika",
					"official" => "iRiphabhuliki yaseNingizimu Afrika",
				),
				"hu" => array(
					"short" => "Dél-afrikai Köztársaság",
					"official" => "Dél-afrikai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Johannesburg",
			"tld" => "za",
		),
		"ZM" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Zambia",
					"official" => "Republic of Zambia",
				),
				"hu" => array(
					"short" => "Zambia",
					"official" => "Zambiai Köztársaság",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Lusaka",
			"tld" => "zm",
		),
		"ZW" => array(
			"native" => array(
				0 => "en",
			),
			"names" => array(
				"en" => array(
					"short" => "Zimbabwe",
					"official" => "Republic of Zimbabwe",
				),
				"hu" => array(
					"short" => "Zimbabwe",
					"official" => "Zimbabwe",
				),
			),
			"eu" => false,
			"timezone" => "Africa/Harare",
			"tld" => "zw",
		),
		"IR" => array(
			"native" => array(
				0 => "fa",
			),
			"names" => array(
				"fa" => array(
					"short" => "ایران",
					"official" => "جمهوری اسلامی ایران",
				),
				"en" => array(
					"short" => "Iran",
					"official" => "Islamic Republic of Iran",
				),
				"hu" => array(
					"short" => "Irán",
					"official" => "Irán",
				),
			),
			"eu" => false,
			"timezone" => "Asia/Tehran",
			"tld" => "ir",
		),
	);

	/**
	 * Creates a country instance with a given code.
	 * @param string $code
	 */
	public function __construct($code) {
		$this->setCode($code);
	}

	/**
	 * Changes the country code on this country instance.
	 * @param string $code
	 * @throws I18N_Unknown if the $code does not represent a valid country code.
	 */
	public function setCode($code) {
		$code = strtoupper($code);
		if (array_key_exists($code, self::$countries)) {
			$this->code = $code;
		} else {
			throw new I18N_Unknown("Country code " . $code . " unknown.");
		}
	}

	/**
	 * Instantiates a new country with a given country code.
	 * @param string $code
	 * @return I18N_Country
	 */
	public static function getCountryByCode($code) {
		return new I18N_Country($code);
	}

	/**
	 * Returns a given country by the domain TLD.
	 * @param string $tld
	 * @throws I18N_Unknown if the TLD is not bound to a country/does not exist.
	 * @return I18N_Country
	 */
	public static function getCountryByTld($tld) {
		foreach (self::$countries as $code => $countrydata) {
			if (!is_array($countrydata['tld'])) {
				$countrydata['tld'] = array($countrydata['tld']);
			}
			foreach ($countrydata['tld'] as $ctld) {
				if ($ctld == $tld) {
					return new I18N_Country($code);
				}
			}
		}
		throw new I18N_Unknown();
	}

	/**
	 * Gets an array of all countries, optinally sorted by the name in a given language.
	 * This data takes a LONG time to produce, please be sure to cache it. You have been warned.
	 * @param bool $sortlocale default
	 * @param I18N_Language $language default null
	 * @return array
	 */
	public static function getAllCountries($sortlocale = false, I18N_Language $language = null) {
		$data = array();
		if ($sortlocale && !is_null($language)) {
			foreach (self::$countries as $code => $country) {
				$value1 = array_values($country);
				$countries2[$code]=$value1[1][$language->getCode()]['short'];
			}
			asort($countries2);
			foreach ($countries2 as $code => $country) {
				$data[$code] = self::getCountryByCode($code);
			}
		} else {
			foreach (self::$countries as $code => $country) {
				$data[$code] = self::getCountryByCode($code);
			}
		}

		return $data;
	}

	/**
	 * Get timezone of country capital.
	 * @throws I18N_Unknown if the timezone is unknown.
	 * @return string
	 */
	public function getMainTimezone() {
		if (array_key_exists("timezone", self::$countries[$this->code])) {
			return self::$countries[$this->code]["timezone"];
		} else {
			throw I18N_Unknown('Timezone of ' . $this->code . ' is unknown.');
		}
	}

	/**
	 * Returns, if a country is member of the EU.
	 * @return bool
	 */
	public function isEUMember() {
		if (array_key_exists($this->code, self::$countries) && array_key_exists("eu", self::$countries[$this->code])) {
			return self::$countries[$this->code]["eu"];
		} else {
			return false;
		}
	}

	/**
	 * Checks, if a string is a valid country code.
	 * @param string $code
	 * @return bool
	 */
	public static function isCountryCode($code) {
		if (array_key_exists($code, self::$countries)) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Returns a list of all languages, that are official in the country.
	 * @return array
	 */
	public function getNativeLanguages() {
		if (array_key_exists($this->code,self::$countries)) {
			$languages = self::$countries[$this->code]['native'];
			if (!is_array($languages)) {
				$languages = array($languages);
			}
			return $languages;
		}
		return array();
	}

	/**
	 * Gets the name of the country in the official languages.
	 * @return array
	 */
	public function getNativeShortName() {
		$data = array();
		foreach ($this->getNativeLanguages() as $locale) {
			$data[$locale] = $this->getShortNameByLocale($locale);
		}
		return $data;
	}

	/**
	 * Gets the official names of the country in the official languages.
	 */
	function getNativeOfficialName() {
		$data = array();
		foreach ($this->getNativeLanguages() as $locale) {
			$data[$locale] = $this->getOfficialNameByLocale($locale);
		}
		return $data;
	}

	/**
	 * Tries to produce a readable name combined from the native and translated names in the given language.
	 * This is best used for country selection boxes.
	 * @param string $locale
	 * @return string
	 */
	function getDisplayName($locale) {
		$languages = $this->getNativeLanguages();
		$localeindex = array_search($locale, $languages);
		if ($localeindex !== false) {
			unset($languages[$localeindex]);
		}
		$name = $this->getShortNameByLocale($locale);
		$nativenames = array();
		foreach ($this->getNativeLanguages() as $nativelocale) {
			$n = $this->getShortNameByLocale($nativelocale);
			if ($n != $name) {
				$nativenames[] = $n;
			}
		}
		$nativenames = array_unique($nativenames);
		if (count($nativenames)) {
			$name .= " (" . implode("/", $nativenames) . ")";
		}
		return $name;
	}

	/**
	 * Returns the short name for the country in a given locale.
	 * @param string $locale
	 * @throws I18N_Country if the country name has not been recorded in the given language. This is most likely a bug.
	 * @return string
	 */
	function getShortNameByLocale($locale) {
		if (!array_key_exists($locale, self::$countries[$this->code]['names'])) {
			throw new I18N_Unknown("Country name for " . $this->code . " unknown in " . $locale);
		}
		if (!is_array(self::$countries[$this->code]['names'][$locale])) {
			return self::$countries[$this->code]['names'][$locale];
		}
		if (array_key_exists("short", self::$countries[$this->code]['names'][$locale])) {
			return self::$countries[$this->code]['names'][$locale]['short'];
		}
		if (array_key_exists("official", self::$countries[$this->code]['names'][$locale])) {
			return self::$countries[$this->code]['names'][$locale]['official'];
		}
		throw new I18N_Unknown("Country name record invalid for " . $this->code . " in " . $locale . ". This is a bug!");
	}

	/**
	 * Returns the official name for the country in a given locale.
	 * @param string $locale
	 * @throws I18N_Country if the country name has not been recorded in the given language. This is most likely a bug.
	 * @return string
	 */
	function getOfficialNameByLocale($locale) {
		if (!array_key_exists($locale, self::$countries[$this->code]['names'])) {
			throw new I18N_Unknown("Country name for " . $this->code . " unknown in " . $locale);
		}
		if (!is_array(self::$countries[$this->code]['names'][$locale])) {
			return self::$countries[$this->code]['names'][$locale];
		}
		if (array_key_exists("official", self::$countries[$this->code]['names'][$locale])) {
			return self::$countries[$this->code]['names'][$locale]['official'];
		}
		if (array_key_exists("short", self::$countries[$this->code]['names'][$locale])) {
			return self::$countries[$this->code]['names'][$locale]['short'];
		}
		throw new I18N_Unknown("Country name record invalid for " . $this->code . " in " . $locale . ". This is a bug!");
	}

	/**
	 * Alias for getNativeShortName()
	 * @return string
	 */
	function getNativeName() {
		return $this->getNativeShortName();
	}

	/**
	 * Alias for getShortNameByLocale()
	 * @param string $localecode
	 * @return string
	 */
	function getNameByLocale($localecode) {
		return $this->getShortNameByLocale($localecode);
	}

	/**
	 * Returns the country code.
	 */
	function getCode() {
		return $this->code;
	}
}
