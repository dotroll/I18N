<?php

/**
 * This class represents the Hungarian language.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_Hungarian extends I18N_Language {
	/**
	 * Returns the language code for internal usage.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function code() {
		return "hu";
	}
	/**
	 * This function returns the locale code for internal usage.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function locale() {
		return 'hu_HU.UTF-8';
	}
	/**
	 * This function returns the date format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function dateFormat() {
		return '%Y. %m. %d.';
	}
	/**
	 * This function returns the long date format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function longDateFormat() {
		return '%Y. %B %e.';
	}
	/**
	 * Returns the names of the months.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return array
	 */
	protected function getMonths() {
		return array(
			1 => 'Január',
			2 => 'Február',
			3 => 'Március',
			4 => 'Április',
			5 => 'Május',
			6 => 'Június',
			7 => 'Július',
			8 => 'Augusztus',
			9 => 'Szeptember',
			10 => 'Október',
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
			3 => 'Már',
			4 => 'Ápr',
			5 => 'Máj',
			6 => 'Jún',
			7 => 'Júl',
			8 => 'Aug',
			9 => 'Szept',
			10 => 'Okt',
			11 => 'Nov',
			12 => 'Dec',
		);
	}
	/**
	 * This function returns the valid characters for this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function characters() {
		return array(
			'a', 'á', 'b', 'c', 'd', 'e', 'é', 'f', 'g', 'h', 'i', 'í', 'j',
			'k', 'l', 'm', 'n', 'o', 'ó', 'ö', 'ő', 'p', 'q', 'r', 's',
			't', 'u', 'ú', 'ü', 'ű', 'v', 'w', 'x', 'y', 'z',
			'A', 'Á', 'B', 'C', 'D', 'E', 'É', 'F', 'G', 'H', 'I', 'Í', 'J',
			'K', 'L', 'M', 'N', 'O', 'Ó', 'Ö', 'Ő', 'P', 'Q', 'R', 'S',
			'T', 'U', 'Ú', 'Ü', 'Ű', 'V', 'W', 'X', 'Y', 'Z',
		);
	}
	/**
	 * This function returns the lexicographic order of letters for this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function lexicographicOrder() {
		return array(
			'a', 'á', 'b', 'c', 'd', 'dzs', 'e', 'é', 'f', 'g', 'gy', 'h',
			'i', 'í', 'j', 'k', 'l', 'ly', 'm', 'n', 'o', 'ó', 'ö', 'ő',
			'p', 'q', 'r', 's', 'sz', 't', 'ty', 'u', 'ú', 'ü', 'ű', 'v',
			'w', 'x', 'y', 'z', 'zs' );
	}
	/**
	 * This function returns the lower->upper character map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function uppermap() {
		return array(
			'a'   => 'A',
			'á'   => 'Á',
			'b'   => 'B',
			'c'   => 'C',
			'dzs' => array('single' => 'Dzs', 'full' => 'DZS'),
			'd'   => 'D',
			'e'   => 'E',
			'é'   => 'É',
			'f'   => 'F',
			'gy'  => array('single' => 'Gy', 'full' => 'GY'),
			'g'   => 'G',
			'h'   => 'H',
			'i'   => 'I',
			'í'   => 'Í',
			'j'   => 'J',
			'k'   => 'K',
			'ly'  => array('single' => 'Ly', 'full' => 'LY'),
			'l'   => 'L',
			'm'   => 'M',
			'n'   => 'N',
			'o'   => 'O',
			'ó'   => 'Ó',
			'ö'   => 'Ö',
			'ő'   => 'Ő',
			'p'   => 'P',
			'q'   => 'Q',
			'r'   => 'R',
			'sz'  => array('single' => 'Sz', 'full' => 'SZ'),
			's'   => 'S',
			'ty'  => array('single' => 'Ty', 'full' => 'TY'),
			't'   => 'T',
			'u'   => 'U',
			'ú'   => 'Ú',
			'ü'   => 'Ü',
			'ű'   => 'Ű',
			'v'   => 'V',
			'w'   => 'W',
			'x'   => 'X',
			'y'   => 'Y',
			'zs'  => array('single' => 'Zs', 'full' => 'ZS'),
			'z'   => 'Z',
		);
	}
	/**
	 * This function returns the upper->lower character map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function lowermap() {
		return array(
			'A'   => 'a',
			'Á'   => 'á',
			'B'   => 'b',
			'C'   => 'c',
			'Dzs' => 'dzs',
			'DZS' => 'dzs',
			'D'   => 'd',
			'E'   => 'e',
			'É'   => 'é',
			'F'   => 'f',
			'Gy'  => 'gy',
			'GY'  => 'gy',
			'G'   => 'g',
			'H'   => 'h',
			'I'   => 'i',
			'Í'   => 'í',
			'J'   => 'j',
			'K'   => 'k',
			'Ly'  => 'ly',
			'LY'  => 'ly',
			'L'   => 'l',
			'M'   => 'm',
			'N'   => 'n',
			'O'   => 'o',
			'Ó'   => 'ó',
			'Ö'   => 'ö',
			'Ő'   => 'ő',
			'P'   => 'p',
			'Q'   => 'q',
			'R'   => 'r',
			'Sz'  => 'sz',
			'SZ'  => 'sz',
			'S'   => 's',
			'Ty'  => 'ty',
			'TY'  => 'ty',
			'T'   => 't',
			'U'   => 'u',
			'Ú'   => 'ú',
			'Ü'   => 'ü',
			'Ű'   => 'ű',
			'V'   => 'v',
			'W'   => 'w',
			'X'   => 'x',
			'Y'   => 'y',
			'Zs'  => 'zs',
			'ZS'  => 'zs',
			'Z'   => 'z',
		);
	}
	/**
	 * This function returns thw vowels in this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function vowels() {
		return array(
			'a', 'á', 'e', 'é', 'i', 'í', 'o',
			'ó', 'ö', 'ő', 'u', 'ú', 'ü', 'ű');
	}
	/**
	 * This function returns the consonants in this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function consonants() {
		return array(
			'b', 'c', 'd', 'dzs', 'f', 'g', 'gy', 'h', 'j',
			'k', 'l', 'ly',	'm', 'n', 'p', 'q', 'r', 's',
			'sz', 't', 'ty', 'v', 'w', 'x', 'y', 'z', 'zs');
	}
	/**
	 * This function returns the special character translation map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function specialcharmap() {
		return array(
			'á' => 'a',
			'é' => 'e',
			'í' => 'i',
			'ó' => 'o',
			'ö' => 'o',
			'ő' => 'o',
			'ú' => 'u',
			'ü' => 'u',
			'ű' => 'u',
		);
	}
	/**
	 * This function returns the unknown character translation map.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function unknowncharmap() {
		return array(
			'À' => 'Á',
			'Â' => 'Á',
			'Ã' => 'Á',
			'Ä' => 'Á',
			'Å' => 'Á',
			'È' => 'É',
			'Ê' => 'É',
			'Ë' => 'É',
			'Ì' => 'Í',
			'Î' => 'Í',
			'Ï' => 'Í',
			'Ò' => 'Ó',
			'Ô' => 'Ő',
			'Õ' => 'Ő',
			'Ù' => 'Ú',
			'Û' => 'Ű',
			'à' => 'á',
			'â' => 'á',
			'ã' => 'á',
			'ä' => 'á',
			'å' => 'á',
			'è' => 'é',
			'ê' => 'é',
			'ë' => 'é',
			'ì' => 'í',
			'î' => 'í',
			'ï' => 'í',
			'ò' => 'ó',
			'ô' => 'ő',
			'õ' => 'ő',
			'ù' => 'ú',
			'û' => 'ű',
			'Ā' => 'Á',
			'ā' => 'á',
			'Ă' => 'Á',
			'ă' => 'á',
			'Ē' => 'É',
			'ē' => 'é',
			'Ĕ' => 'É',
			'ĕ' => 'é',
			'Ė' => 'É',
			'ė' => 'é',
			'Ě' => 'É',
			'ě' => 'é',
			'Ĩ' => 'Í',
			'ĩ' => 'í',
			'Ī' => 'Í',
			'ī' => 'í',
			'Ĭ' => 'Í',
			'ĭ' => 'i',
			'Ō' => 'Ó',
			'ō' => 'Ó',
			'Ŏ' => 'Ő',
			'ŏ' => 'Ő',
			'Ũ' => 'Ű',
			'ũ' => 'ű',
			'Ū' => 'Ú',
			'ū' => 'ú',
			'Ŭ' => 'Ű',
			'ŭ' => 'ű',
			'Ů' => 'Ú',
			'ů' => 'ú',
			'Ǟ' => 'Á',
			'ǟ' => 'á',
			'Ǡ' => 'Á',
			'ǡ' => 'á',
			'Ǻ' => 'Á',
			'ǻ' => 'Á',
			'Ǿ' => 'Ó',
			'ǿ' => 'ó',
			'Ȁ' => 'Á',
			'ȁ' => 'á',
			'Ȃ' => 'Á',
			'ȃ' => 'á',
			'Ȅ' => 'É',
			'ȅ' => 'é',
			'Ȇ' => 'É',
			'ȇ' => 'é',
			'Ȉ' => 'Í',
			'ȉ' => 'í',
			'Ȋ' => 'Í',
			'ȋ' => 'í',
			'Ȍ' => 'Ő',
			'ȍ' => 'ő',
			'Ȏ' => 'Ó',
			'ȏ' => 'ó',
			'Ȕ' => 'Ű',
			'ȕ' => 'ű',
			'Ȗ' => 'Ú',
			'ȗ' => 'ú',
			'Ȧ' => 'Á',
			'ȧ' => 'á',
			'Ȫ' => 'Ö',
			'ȫ' => 'ö',
			'Ȭ' => 'Ő',
			'ȭ' => 'ő',
			'Ȯ' => 'Ó',
			'ȯ' => 'ó',
			'Ȱ' => 'Ó',
			'ȱ' => 'ó',
			'À' => 'Á',
			'Â' => 'Á',
			'Ã' => 'Á',
			'Ä' => 'Á',
			'Å' => 'Á',
			'È' => 'É',
			'Ê' => 'É',
			'Ë' => 'É',
			'Ì' => 'Í',
			'Î' => 'Í',
			'Ï' => 'Í',
			'Ò' => 'Ó',
			'Ô' => 'Ő',
			'Õ' => 'Ő',
			'Ù' => 'Ú',
			'Û' => 'Ű',
			'à' => 'á',
			'â' => 'á',
			'ã' => 'á',
			'ä' => 'á',
			'å' => 'á',
			'è' => 'é',
			'ê' => 'é',
			'ë' => 'é',
			'ì' => 'í',
			'î' => 'í',
			'ï' => 'í',
			'ò' => 'ó',
			'ô' => 'ő',
			'õ' => 'ő',
			'ù' => 'ú',
			'û' => 'ű',
		);
	}
	/**
	 * This function returns the indefinite article for a word.
	 * This function exists, so the serialized format is fairly small.
	 * @param string $word
	 * @return string
	 */
	function getIndefiniteArticle($word) {
		return "egy";
	}
	/**
	 * This function returns the definite article for a word.
	 * This function exists, so the serialized format is fairly small.
	 * @param string $word
	 * @return string
	 */
	function getDefiniteArticle($word) {
		$first = $this->toLower($this->getFirstLetter($word));
		if ($this->isVowel($first)) {
			return "az";
		} else if ($this->isConsonant($first)) {
			return "a";
		} else {
			return "a(z)";
		}
	}
	/**
	 * Write a number as text
	 * @param int $number
	 * @param bool $useSpecialChars default false use special chars for number
	 *	separators where applicable.
	 * @return string
	 */
	public function writeIntAsText($number, $useSpecialChars = false) {
		$number = (int)$number;
		$numbers = array(
			      1 => 'egy',
			      2 => 'két',
			      3 => 'három',
			      4 => 'négy',
			      5 => 'öt',
			      6 => 'hat',
			      7 => 'hét',
			      8 => 'nyolc',
			      9 => 'kilenc',
			     10 => array('standalone' => 'tíz', 'chain' => 'tizen'),
			     20 => array('standalone' => 'húsz', 'chain' => 'huszon'),
			     30 => 'harminc',
			     40 => 'negyven',
			     50 => 'ötven',
			     60 => 'hatvan',
			     70 => 'hetven',
			     80 => 'nyolcvan',
			     90 => 'kilencven',
			    100 => 'száz',
			   1000 => 'ezer',
			1000000 => 'millió',
		);
		return $this->resolveNumber($number, $numbers, $useSpecialChars);
	}
	/**
	 * Recursive number resolver for Hungarian numbers
	 * @param int $number
	 * @param array $numbers
	 * @return string
	 */
	protected function resolveNumber($number, &$numbers, $useSpecialChars = false) {
		$number = (int)$number;
		$found = false;
		$i = 1;
		if ($number == 0) {
			return '';
		} elseif (array_key_exists($number, $numbers)) {
			if (is_array($numbers[$number])) {
				return $numbers[$number]['standalone'];
			} else {
				return $numbers[$number];
			}
		}
		while ($i<strlen((string)$number) && !$found) {
			$prefix = substr($number, 0, $i);
			$remainder = substr($number, $i, strlen($number) - $i);
			$zeroes = str_pad('', strlen($number) - $i, '0', STR_PAD_RIGHT);
			if (array_key_exists((int)($prefix . $zeroes), $numbers)) {
				/**
				 * Number chaining, such as 22
				 */
				$n = $numbers[(int)($prefix . $zeroes)];
				if (is_array($n)) {
					$n = $n['chain'];
				}
				$found = $n;
			} else if (array_key_exists((int)('1' . $zeroes), $numbers)) {
				/**
				 * Standalone number prefixing, such as 10 million.
				 */
				$n = $numbers[(int)('1' . $zeroes)];
				if (is_array($n)) {
					$n = $n['standalone'];
				}
				$found = $this->resolveNumber($prefix, $numbers) . $n;
			}
			$i++;
		}
		if (!$found) {
			throw new Exception('Can\'t resolve ' . $number);
		} else {
			$found .= $this->splitNumberForText($number, $remainder, $useSpecialChars = false);
			$found .= $this->resolveNumber($remainder, $numbers);
		}
		return $found;
	}
	/**
	 * This is a helper function to split numbers for resolveNumber()
	 * @param int $number
	 * @param int $remainder
	 * @param bool $useSpecialChars default false
	 */
	protected function splitNumberForText($number, $remainder, $useSpecialChars = false) {
		if ($remainder > 0 && $number > 2000 && strlen((string)$remainder)%3 == 0) {
			if ($useSpecialChars) {
				return '‒';
			} else {
				return '-';
			}
		} else {
			return '';
		}
	}
}
