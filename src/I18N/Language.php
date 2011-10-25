<?php

/**
 * This class is an abstract ancestor for all language classes
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
abstract class I18N_Language {
	/**
	 * This is a cache for the letter match regexp populated by setHelperVariables()
	 * @var string
	 */
	protected $letterMatch = "";
	/**
	 * This is a cache for the first letter match regexp populated by setHelperVariables()
	 * @var string
	 */
	protected $firstLetterMatch = "";
	/**
	 * This is a cache for the list of the unknown character map populated by setHelperVariables()
	 * @var string
	 */
	protected $unknowncharmapcache = "";
	/**
	 * Returns the names of the months.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return array
	 */
	protected function getMonths() {
		return array(
			1 => 'January',
			2 => 'February',
			3 => 'March',
			4 => 'April',
			5 => 'May',
			6 => 'June',
			7 => 'July',
			8 => 'August',
			9 => 'September',
			10 => 'October',
			11 => 'November',
			12 => 'December',
		);
	}
	/**
	 * Returns the short codes for months.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return array
	 */
	protected function getShortMonths() {
		return array(
			1 => 'Jan',
			2 => 'Feb',
			3 => 'Mar',
			4 => 'Apr',
			5 => 'May',
			6 => 'Jun',
			7 => 'Jul',
			8 => 'Aug',
			9 => 'Sep',
			10 => 'Oct',
			11 => 'Nov',
			12 => 'Dec',
		);
	}
	/**
	 * Serialization helper function.
	 * @return array()
	 */
	public function __sleep() {
		return array();
	}
	/**
	 * Unserialization helper function.
	 */
	public function __wakeup() {
		$this->setHelperVariables();
	}
	/**
	 * This function returns the locale code for internal usage.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function locale() {
		return 'en_US.UTF-8';
	}
	/**
	 * This function returns the date format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function dateFormat() {
		return '%Y-%m-%d';
	}
	/**
	 * This function returns the long date format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function longDateFormat() {
		return '%Y-%m-%d';
	}
	/**
	 * This function returns the time format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function timeFormat() {
		return '%H:%M';
	}
	/**
	 * This function returns the long time format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function longTimeFormat() {
		return '%H:%M:%S';
	}
	/**
	 * This function returns the unknown character translation map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function unknowncharmap() {
		return array();
	}
	/**
	 * Returns the language code for internal usage.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function code() {
		return "mul";
	}
	/**
	 * This function returns the thousand separator for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function thousandSeparator() {
		return ",";
	}
	/**
	 * This function returns the decimal separator for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function decimalSeparator() {
		return " ";
	}
	/**
	 * This function returns the thousand separator for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function moneyThousandSeparator() {
		return " ";
	}
	/**
	 * This function returns the decimal separator for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function moneyDecimalSeparator() {
		return ",";
	}
	/**
	 * This function returns the currency separator for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function moneyCurrencySeparator() {
		return " ";
	}
	/**
	 * This function returns the valid characters for this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function characters() {
		return array();
	}
	/**
	 * This function returns the lexicographic order of letters for this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function lexicographicOrder() {
		return array();
	}
	/**
	 * This function returns the lower->upper character map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function uppermap() {
		return array();
	}
	/**
	 * This function returns the upper->lower character map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function lowermap() {
		return array();
	}
	/**
	 * This function returns thw vowels in this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function vowels() {
		return array();
	}
	/**
	 * This function returns the consonants in this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function consonants() {
		return array();
	}
	/**
	 * This function returns the special character translation map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function specialcharmap() {
		return array();
	}
	/**
	 * This function returns the generic unicode character map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function unicodecharmap() {
		return array(
			/* Latin 1 */
			'À' => 'A',
			'Á' => 'A',
			'Â' => 'A',
			'Ã' => 'A',
			'Ä' => 'A',
			'Å' => 'A',
			'Æ' => 'AE',
			'Ç' => 'C',
			'È' => 'E',
			'É' => 'E',
			'Ê' => 'E',
			'Ë' => 'E',
			'Ì' => 'I',
			'Í' => 'I',
			'Î' => 'I',
			'Ï' => 'I',
			'Ð' => 'D',
			'Ñ' => 'N',
			'Ò' => 'O',
			'Ó' => 'O',
			'Ô' => 'O',
			'Õ' => 'O',
			'Ö' => 'O',
			'Ù' => 'U',
			'Ú' => 'U',
			'Û' => 'U',
			'Ü' => 'U',
			'Ý' => 'Y',
			'ß' => 'ss',
			'à' => 'a',
			'á' => 'a',
			'â' => 'a',
			'ã' => 'a',
			'ä' => 'a',
			'å' => 'a',
			'æ' => 'ae',
			'ç' => 'c',
			'è' => 'e',
			'é' => 'e',
			'ê' => 'e',
			'ë' => 'e',
			'ì' => 'i',
			'í' => 'i',
			'î' => 'i',
			'ï' => 'i',
			'ð' => 'd',
			'ñ' => 'n',
			'ò' => 'o',
			'ó' => 'o',
			'ô' => 'o',
			'õ' => 'o',
			'ö' => 'o',
			'ù' => 'u',
			'ú' => 'u',
			'û' => 'u',
			'ü' => 'u',
			'ý' => 'y',
			'ÿ' => 'y',
			/* Latin ext A, B */
			'Ā' => 'A',
			'ā' => 'a',
			'Ă' => 'A',
			'ă' => 'a',
			'Ą' => 'A',
			'ą' => 'a',
			'Ć' => 'C',
			'ć' => 'c',
			'Ĉ' => 'C',
			'ĉ' => 'c',
			'Ċ' => 'C',
			'ċ' => 'c',
			'Č' => 'C',
			'č' => 'c',
			'Ď' => 'D',
			'ď' => 'd',
			'Đ' => 'D',
			'đ' => 'd',
			'Ē' => 'E',
			'ē' => 'e',
			'Ĕ' => 'E',
			'ĕ' => 'e',
			'Ė' => 'E',
			'ė' => 'e',
			'Ę' => 'E',
			'ę' => 'e',
			'Ě' => 'E',
			'ě' => 'e',
			'Ĝ' => 'G',
			'ĝ' => 'g',
			'Ğ' => 'G',
			'ğ' => 'g',
			'Ġ' => 'G',
			'ġ' => 'g',
			'Ģ' => 'G',
			'ģ' => 'g',
			'Ĥ' => 'H',
			'ĥ' => 'h',
			'Ħ' => 'H',
			'ħ' => 'h',
			'Ĩ' => 'I',
			'ĩ' => 'i',
			'Ī' => 'I',
			'ī' => 'i',
			'Ĭ' => 'I',
			'ĭ' => 'i',
			'Į' => 'I',
			'į' => 'i',
			'İ' => 'I',
			'ı' => 'i',
			'Ĳ' => 'IJ',
			'ĳ' => 'ij',
			'Ĵ' => 'J',
			'ĵ' => 'j',
			'Ķ' => 'K',
			'ķ' => 'k',
			'ĸ' => 'k',
			'Ĺ' => 'L',
			'ĺ' => 'l',
			'Ļ' => 'L',
			'ļ' => 'l',
			'Ľ' => 'L',
			'ľ' => 'l',
			'Ŀ' => 'L',
			'Ł' => 'L',
			'ł' => 'l',
			'Ń' => 'N',
			'ń' => 'n',
			'Ņ' => 'N',
			'ņ' => 'n',
			'Ň' => 'N',
			'ň' => 'n',
			'ŉ' => 'n',
			'Ŋ' => 'N',
			'ŋ' => 'n',
			'Ō' => 'O',
			'ō' => 'o',
			'Ŏ' => 'O',
			'ŏ' => 'o',
			'Ő' => 'O',
			'ő' => 'o',
			'Œ' => 'OE',
			'œ' => 'oe',
			'Ŕ' => 'R',
			'ŕ' => 'r',
			'Ŗ' => 'R',
			'ŗ' => 'r',
			'Ř' => 'R',
			'ř' => 'r',
			'Ś' => 'S',
			'ś' => 's',
			'Ŝ' => 'S',
			'ŝ' => 's',
			'Ş' => 'S',
			'ş' => 's',
			'Š' => 'S',
			'š' => 's',
			'Ţ' => 'T',
			'ţ' => 't',
			'Ť' => 'T',
			'ť' => 't',
			'Ŧ' => 'T',
			'ŧ' => 't',
			'Ũ' => 'U',
			'ũ' => 'u',
			'Ū' => 'U',
			'ū' => 'u',
			'Ŭ' => 'U',
			'ŭ' => 'u',
			'Ů' => 'U',
			'ů' => 'u',
			'Ų' => 'U',
			'Ű' => 'U',
			'ű' => 'u',
			'ų' => 'u',
			'Ŵ' => 'W',
			'ŵ' => 'w',
			'Ŷ' => 'Y',
			'ŷ' => 'y',
			'Ÿ' => 'Y',
			'Ź' => 'Z',
			'ź' => 'z',
			'Ż' => 'Z',
			'ż' => 'z',
			'Ž' => 'Z',
			'ž' => 'z',
			'ſ' => 'f',
			'ƀ' => 'b',
			'Ɓ' => 'B',
			'Ƃ' => 'b',
			'ƃ' => 'B',
			'Ƅ' => 'b',
			'ƅ' => 'B',
			'Ɔ' => 'C',
			'Ƈ' => 'C',
			'ƈ' => 'c',
			'Ɖ' => 'D',
			'Ɗ' => 'D',
			'Ƌ' => 'd',
			'ƌ' => 'D',
			//'ƍ' => '',
			//'Ǝ' => '',
			//'Ə' => 'e',
			//'Ɛ' => '',
			'Ƒ' => 'F',
			'ƒ' => 'f',
			'Ɠ' => 'G',
			'Ɣ' => 'y',
			//'ƕ' => '',
			//'Ɩ' => '',
			//'Ɨ' => '',
			'Ƙ' => 'K',
			'ƙ' => 'l',
			'ƚ' => 'l',
			'ƛ' => 'L',
			//'Ɯ' => '',
			//'Ɲ' => '',
			//'ƞ' => '',
			//'Ɵ' => '',
			//'Ơ' => '',
			//'ơ' => '',
			//'Ƣ' => '',
			//'ƣ' => '',
			//'Ƥ' => '',
			//'ƥ' => '',
			//'Ʀ' => '',
			//'Ƨ' => '',
			//'ƨ' => '',
			//'Ʃ' => '',
			//'ƪ' => '',
			//'ƫ' => '',
			//'Ƭ' => '',
			//'ƭ' => '',
			//'Ʈ' => '',
			'Ư' => 'U',
			'ư' => 'u',
			//'Ʊ' => '',
			//'Ʋ' => '',
			'Ƴ' => 'Y',
			'ƴ' => 'y',
			'Ƶ' => 'Z',
			'ƶ' => 'z',
			'Ʒ' => '3',
			'Ƹ' => '3',
			'ƹ' => '3',
			'ƺ' => '3',
			'ƻ' => '2',
			'Ƽ' => '5',
			'ƽ' => '5',
			//'ƾ' => '',
			//'ƿ' => '',
			'ǀ' => '',
			'ǁ' => '',
			'ǂ' => '',
			'ǃ' => '!',
			'Ǆ' => 'DZ',
			'ǅ' => 'Dz',
			'ǆ' => 'dz',
			'Ǉ' => 'LJ',
			'ǈ' => 'Lj',
			'ǉ' => 'lj',
			'Ǌ' => 'NJ',
			'ǋ' => 'Nj',
			'ǌ' => 'nj',
			'Ǎ' => 'A',
			'ǎ' => 'a',
			'Ǐ' => 'I',
			'ǐ' => 'i',
			'Ǒ' => 'O',
			'ǒ' => 'o',
			'Ǔ' => 'U',
			'ǔ' => 'u',
			'Ǖ' => 'U',
			'ǖ' => 'u',
			'Ǘ' => 'U',
			'ǘ' => 'u',
			'Ǚ' => 'U',
			'ǚ' => 'u',
			'Ǜ' => 'U',
			'ǜ' => 'u',
			//'ǝ' => '',
			'Ǟ' => 'A',
			'ǟ' => 'a',
			'Ǡ' => 'A',
			'ǡ' => 'a',
			'Ǣ' => 'AE',
			'ǣ' => 'ae',
			'Ǥ' => 'G',
			'ǥ' => 'g',
			'Ǧ' => 'G',
			'ǧ' => 'g',
			'Ǩ' => 'K',
			'ǩ' => 'k',
			'Ǫ' => 'O',
			'ǫ' => 'o',
			'Ǭ' => 'O',
			'ǭ' => 'o',
			//'Ǯ' => '',
			//'ǯ' => '',
			'ǰ' => 'j',
			'Ǳ' => 'DZ',
			'ǲ' => 'Dz',
			'ǳ' => 'dz',
			'Ǵ' => 'G',
			'ǵ' => 'g',
			//'Ƕ' => '',
			//'Ƿ' => '',
			'Ǹ' => 'N',
			'ǹ' => 'n',
			'Ǻ' => 'A',
			'ǻ' => 'a',
			'Ǽ' => 'AE',
			'ǽ' => 'ae',
			'Ǿ' => 'O',
			'ǿ' => 'o',
			'Ȁ' => 'A',
			'ȁ' => 'a',
			'Ȃ' => 'A',
			'ȃ' => 'a',
			'Ȅ' => 'E',
			'ȅ' => 'e',
			'Ȇ' => 'E',
			'ȇ' => 'e',
			'Ȉ' => 'I',
			'ȉ' => 'i',
			'Ȋ' => 'I',
			'ȋ' => 'i',
			'Ȍ' => 'O',
			'ȍ' => 'o',
			'Ȏ' => 'O',
			'ȏ' => 'o',
			'Ȑ' => 'R',
			'ȑ' => 'r',
			'Ȓ' => 'R',
			'ȓ' => 'r',
			'Ȕ' => 'U',
			'ȕ' => 'u',
			'Ȗ' => 'U',
			'ȗ' => 'u',
			'Ș' => 'S',
			'ș' => 's',
			'Ț' => 'T',
			'ț' => 't',
			//'Ȝ' => ''
			//'ȝ' => '',
			'Ȟ' => 'H',
			'ȟ' => 'h',
			'Ƞ' => 'n',
			'ȡ' => 'd',
			//'Ȣ' => ''
			//'ȣ' => ''
			'Ȥ' => 'Z',
			'ȥ' => 'z',
			'Ȧ' => 'A',
			'ȧ' => 'a',
			'Ȩ' => 'E',
			'ȩ' => 'e',
			'Ȫ' => 'O',
			'ȫ' => 'o',
			'Ȭ' => 'O',
			'ȭ' => 'O',
			'Ȯ' => 'O',
			'ȯ' => 'o',
			'Ȱ' => 'O',
			'ȱ' => 'o',
			'Ȳ' => 'Y',
			'ȳ' => 'y',
			//'ȴ' => ''
			//'ȵ' => '',
			//'ȶ' => '',
			//'ȷ' => '',
			//'ȸ' => '',
			//'ȹ' => '',
			'Ⱥ' => 'A',
			'Ȼ' => 'C',
			'ȼ' => 'c',
			'Ƚ' => 'L',
			'Ⱦ' => 'T',
			'ȿ' => 's',
			'ɀ' => 'z',
			//'Ɂ' => '',
			//'ɂ' => '',
			'Ƀ' => 'B',
			'Ʉ' => 'U',
			'Ʌ' => '',
			'Ɇ' => 'E',
			'ɇ' => 'e',
			'Ɉ' => 'J',
			'ɉ' => 'j',
			'Ɋ' => 'Q',
			'ɋ' => 'q',
			'Ɍ' => 'R',
			'ɍ' => 'r',
			'Ɏ' => 'Y',
			'ɏ' => 'y',
			'À' => 'A',
			'Á' => 'A',
			'Â' => 'A',
			'Ã' => 'A',
			'Ä' => 'A',
			'Å' => 'A',
			'Æ' => 'AE',
			'Ç' => 'C',
			'È' => 'E',
			'É' => 'E',
			'Ê' => 'E',
			'Ë' => 'E',
			'Ì' => 'I',
			'Í' => 'I',
			'Î' => 'I',
			'Ï' => 'I',
			'Ð' => 'D',
			'Ñ' => 'N',
			'Ò' => 'O',
			'Ó' => 'O',
			'Ô' => 'O',
			'Õ' => 'O',
			'Ö' => 'O',
			'Ù' => 'U',
			'Ú' => 'U',
			'Û' => 'U',
			'Ü' => 'U',
			'Ý' => 'Y',
			'ß' => 'ss',
			'à' => 'a',
			'á' => 'a',
			'â' => 'a',
			'ã' => 'a',
			'ä' => 'a',
			'å' => 'a',
			'æ' => 'ae',
			'ç' => 'c',
			'è' => 'e',
			'é' => 'e',
			'ê' => 'e',
			'ë' => 'e',
			'ì' => 'i',
			'í' => 'i',
			'î' => 'i',
			'ï' => 'i',
			'ð' => 'd',
			'ñ' => 'n',
			'ò' => 'o',
			'ó' => 'o',
			'ô' => 'o',
			'õ' => 'o',
			'ö' => 'o',
			'ù' => 'u',
			'ú' => 'u',
			'û' => 'u',
			'ü' => 'u',
			'ý' => 'y',
			'ÿ' => 'y',
		);
	}
	/**
	 * This function returns common punctuation / symbols.
	 */
	protected function punctuation() {
		return array(
			'.',  /* dot */
			',',  /* comma */
			'!',  /* exclamation mark */
			'¡',   /* spanish exclamation mark */
			'?',  /* question mark */
			'¿',  /* spanish question mark */
			':',  /* colon */
			';',  /* semicolon */
			'&',  /* ampersand */
			'—',  /* en dash */
			'—',  /* em dash */
			'‘',  /* single left upper quotation mark */
			'‚',  /* single left lower quotation mark */
			'’',  /* single right upper quotation mark */
			'“',  /* double left upper quotation mark */
			'„',  /* double left lower quotation mark */
			'”',  /* double right upper quotation mark */
			'\'', /* apostrophe */
			'"',  /* simple double quotation mark */
			'«',  /* double french left quotation mark*/
			'»',  /* double french right quotation mark*/
			'‹',  /* single french left quotation mark*/
			'›',  /* single right left quotation mark*/
			'「', /* left single eastern corner brackets */
			'」', /* right single eastern corner brackets */
			'﹁', /* top single eastern corner brackets */
			'﹂', /* bottom single eastern corner brackets */
			'『', /* left double eastern corner brackets */
			'』', /* right double eastern corner brackets */
			'﹃', /* top double eastern corner brackets */
			'﹄', /* bottom double eastern corner brackets */
			'《', /* left wide angle brackets */
			'》', /* right wide angle brackets */
			'(',  /* left brackets*/
			')',  /* right brackets*/
			'[',  /* left square brackets*/
			']',  /* right square brackets*/
			'{',  /* left curly brackets */
			'}',  /* right curly brackets*/
			'*',  /* asterix */
			'@',  /* at */
			'…',  /* ellipsis (tripple dot) */
			'•',  /* bullet point */
			'^',  /* carret */
			'†',  /* dagger */
			'‡',  /* double dagger */
		);
	}

	/**
	 * This function returns the definite article for a word.
	 * This function exists, so the serialized format is fairly small.
	 * @param string $word
	 * @return string
	 */
	public function getDefiniteArticle($word) {
		return '';
	}
	/**
	 * This function returns the indefinite article for a word.
	 * This function exists, so the serialized format is fairly small.
	 * @param string $word
	 * @return string
	 */
	public function getIndefiniteArticle($word) {
		return '';
	}
	/**
	 * Write a number as text
	 * @param int $number
	 * @param bool $useSpecialChars default false use special chars for number
	 *	separators where applicable.
	 * @return string
	 */
	public function writeIntAsText($number, $useSpecialChars = false) {
		return '';
	}
	/**
	 * Sets helper variables.
	 */
	public function __construct() {
		$this->setHelperVariables();
	}
	/**
	 * Constructs the match regexps, etc.
	 * @internal
	 */
	protected function setHelperVariables() {
		$this->letterMatch = "/(?P<letter>" . implode("|", array_merge(array_keys($this->lowermap()), array_keys($this->uppermap()))) . ")/";
		$this->firstLetterMatch = "/^(?P<letter>" . implode("|", array_merge(array_keys($this->lowermap()), array_keys($this->uppermap()))) . ")/";
		$this->unknowncharmapcache = array_merge($this->unicodecharmap(), $this->unknowncharmap());
		$is = array_intersect(array_keys($this->unknowncharmapcache), $this->characters());
		foreach ($is as $char) {
			unset($this->unknowncharmapcache[$char]);
		}
	}
	/**
	 * Cleans up the helper variables to reduce serialization footprint.
	 * @deprecated
	 * @internal
	 */
	protected function clearHelperVariables() {
		$this->letterMatch = "";
		$this->firstLetterMatch = "";
		$this->unknowncharmapcache = "";
	}
	/**
	 * Formats a number according to the rules of this language.
	 * @param int|float number
	 * @param int $decmals default 0
	 * @return string
	 */
	public function formatNumber($number, $decimals = 0) {
		return number_format($number, (int)$decimals, $this->decimalSeparator(), $this->thousandSeparator());
	}
	/**
	 * Formats a number according to the rules of this language.
	 * @param int|float money
	 * @param I18N_Currency $currency
	 * @return string
	 */
	public function formatMoney($money, I18N_Currency $currency) {
		$money = number_format($money, $currency->getDecimals(), $this->moneyDecimalSeparator(), $this->moneyThousandSeparator());
		if ($currency->getFront()) {
			$money = $currency->getSymbol() . $this->moneyCurrencySeparator() . $money;
		} else {
			$money = $money . $this->moneyCurrencySeparator() . $currency->getSymbol();
		}
		return $money;
	}
	/**
	 * Format date according to the rules of this language.
	 * This function is NOT threadsafe!
	 * @param I18N_Timestamp $time
	 * @param int $long default false
	 * @return string;
	 */
	public function formatDate(I18N_Timestamp $time, $long = false) {
		if ($long) {
			$format = $this->longDateFormat();
		} else {
			$format = $this->dateFormat();
		}
		$oldlocale = setlocale(LC_TIME, $this->locale());
		$date = strftime($format, $time->getTimestamp());
		setlocale(LC_TIME, $oldlocale);
		return $date;
	}
	/**
	 * Format time according to the rules of this language.
	 * This function is NOT threadsafe!
	 * @param I18N_Timestamp $time
	 * @param int $long default false
	 * @return string;
	 */
	public function formatTime(I18N_Timestamp $time, $long = false) {
		$oldlocale = setlocale(LC_TIME, $this->locale());
		$date = strftime($long?$this->longTimeFormat():$this->timeFormat(), $time->getTimestamp());
		setlocale(LC_TIME, $oldlocale);
		return $date;
	}
	/**
	 * Returns the language ISO code.
	 * @return string
	 */
	public function getCode() {
		return $this->code();
	}
	/**
	 * Return the lowercase letter map.
	 * @return array
	 */
	public function getLowerMap() {
		return $this->lowermap();
	}
	/**
	 * Return the uppercase letter map
	 * @return array
	 */
	public function getUpperMap() {
		return $this->uppermap();
	}
	/**
	 * Return the list of vowels.
	 * @return array
	 */
	public function getVowels() {
		return $this->vowels();
	}
	/**
	 * Return the list of consonants.
	 * @return array
	 */
	public function getConsonants() {
		return $this->consonants();
	}
	/**
	 * Return the special character map.
	 * @return array
	 */
	public function getSpecialCharMap() {
		return $this->specialcharmap();
	}
	/**
	 * Return the unknown character map.
	 * @return array
	 */
	public function getUnknownCharMap() {
		return $this->unknowncharmapcache;
	}
	/**
	 * Return the unicode character map.
	 * @return array
	 */
	public function getUnicodeCharMap() {
		return $this->unicodecharmap();
	}
	/**
	 * Translate unknown characters for this language
	 * @param string $string
	 * @return string
	 */
	public function translateUnknownCharacters($string) {
		if (!is_string($string)) {
			return $string;
		}
		return strtr($string, $this->unknowncharmapcache);
	}
	/**
	 * Get first letter of string
	 * @param string $string
	 * @return string
	 */
	public function getFirstLetter($string) {
		$matches = array();
		if (preg_match($this->firstLetterMatch, $string, $matches)) {
			return $matches['letter'];
		} else {
			return false;
		}
	}
	/**
	 * Decide if a letter is a vowel
	 * @param string $letter
	 * @return bool
	 */
	public function isVowel($letter) {
		if (array_search($this->toLower($this->translateUnknownCharacters($letter)), $this->vowels()) !== false) {
			return true;
		} else {
			return false;
		}
	}
	/**
	 * Decide if a letter is a consonant
	 * @param string $letter
	 * @return bool 
	 */
	public function isConsonant($letter) {
		if (array_search($this->toLower($this->translateUnknownCharacters($letter)), $this->consonants()) !== false) {
			return true;
		} else {
			return false;
		}
	}
	/**
	 * Turn string to uppercase
	 * @param string $string
	 * @return string
	 */
	public function toUpper($string) {
		if (!is_string($string)) {
			return $string;
		}
		$toUpper = $this->uppermap();
		foreach ($toUpper as $key => $value) {
			if (is_array($value)) {
				$toUpper[$key] = $value['full'];
			}
		}
		return strtr($string, $toUpper);
	}
	/**
	 * Turn string to lowercase
	 * @param string $string
	 * @return string
	 */
	public function toLower($string) {
		if (!is_string($string)) {
			return $string;
		}
		$toLower = $this->lowermap();
		foreach ($toLower as $key => $value) {
			if (is_array($value)) {
				$toLower[$key] = $value['full'];
			}
		}
		return strtr($string, $toLower);
	}
	/**
	 * Turn first letter of string to uppercase
	 * @param string $string
	 * @return string
	 */
	public function ucfirst($string) {
		$firstLetter = $this->getFirstLetter($string);
		$upper = $this->uppermap();
		if ($firstLetter && isset($upper[$firstLetter])) {
			$string = substr($string, strlen($firstLetter), strlen($string) - strlen($firstLetter));
			if (is_array($upper[$firstLetter])) {
				$string = $upper[$firstLetter]['single'] . $string;
			} else {
				$string = $upper[$firstLetter] . $string;
			}
		}
		return $string;
	}
	/**
	 * Turn first letter of string to lowercase
	 * @param string $string
	 * @return string
	 */
	public function lcfirst($string) {
		$firstLetter = $this->getFirstLetter($string);
		$lower = $this->lowermap();
		if ($firstLetter && isset($lower[$firstLetter])) {
			$string = substr($string, strlen($firstLetter), strlen($string) - strlen($firstLetter));
			if (is_array($lower[$firstLetter])) {
				$string = $lower[$firstLetter]['single'] . $string;
			} else {
				$string = $lower[$firstLetter] . $string;
			}
		}
		return $string;
	}
	/**
	 * Get letters in lexicographic order
	 * @return array
	 */
	public function getLexicographicOrder() {
		return $this->lexicographicOrder();
	}
	/**
	 * Decide, which letter comes first in lexicographic ordering
	 * @param string $word1
	 * @param string $word2
	 * @return int
	 */
	public function decideLexicographicSortOrder($word1, $word2) {
		$word1 = $this->toLower($word1);
		$word2 = $this->toLower($word2);
		while (strlen($word1) && strlen($word2)) {
			$letter1 = $this->getFirstLetter($word1);
			$letter2 = $this->getFirstLetter($word2);
			$key1 = array_search($letter1, $this->lexicographicOrder());
			$key2 = array_search($letter2, $this->lexicographicOrder());
			if ($key1 === false) {
				$key1 = -1;
			}
			if ($key2 === false) {
				$key2 = -1;
			}
			if ($key1 > $key2) {
				return 1;
			} else if ($key2 > $key1) {
				return -1;
			}

			$word1 = substr($word1, strlen($letter1));
			$word2 = substr($word2, strlen($letter2));
		}
		if (!strlen($word1) && !strlen($word2)) {
			return 0;
		} else if (!strlen($word1)) {
			return -1;
		} else {
			return 1;
		}
	}
	/**
	 * Gets the name of a given month
	 * @param int $month
	 * @param bool $long
	 * @return string
	 */
	public function getMonth($month, $long = true) {
		if ($long) {
			$months = $this->getMonths();
		} else {
			$months = $this->getShortMonths();
		}
		return $months[$month];
	}
	/**
	 * Returns the language code
	 */
	public function __toString() {
		return $this->code();
	}
}
