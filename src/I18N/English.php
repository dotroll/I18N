<?php

/**
 * This class represents the English language.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_English extends I18N_Language {
	/**
	 * Returns the language code for internal usage.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function code() {
		return "en";
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
		return '%Y. %m. %e.';
	}
	/**
	 * This function returns the long date format string for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function longDateFormat() {
		return '%e %B, %Y';
	}
	/**
	 * This function returns the thousand separator for the given language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function moneyThousandSeparator() {
		return ",";
	}
	/**
	 * This function returns the money decimal separator.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function moneyDecimalSeparator() {
		return ".";
	}
	/**
	 * This function returns the valid characters for this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function characters() {
		return array(
			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
			'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
			'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
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
			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
			'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		);
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
			'b'   => 'B',
			'c'   => 'C',
			'd'   => 'D',
			'e'   => 'E',
			'f'   => 'F',
			'g'   => 'G',
			'h'   => 'H',
			'i'   => 'I',
			'j'   => 'J',
			'k'   => 'K',
			'l'   => 'L',
			'm'   => 'M',
			'n'   => 'N',
			'o'   => 'O',
			'p'   => 'P',
			'q'   => 'Q',
			'r'   => 'R',
			's'   => 'S',
			't'   => 'T',
			'u'   => 'U',
			'v'   => 'V',
			'w'   => 'W',
			'x'   => 'X',
			'y'   => 'Y',
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
			'B'   => 'b',
			'C'   => 'c',
			'D'   => 'd',
			'E'   => 'e',
			'F'   => 'f',
			'G'   => 'g',
			'H'   => 'h',
			'I'   => 'i',
			'J'   => 'j',
			'K'   => 'k',
			'L'   => 'l',
			'M'   => 'm',
			'N'   => 'n',
			'O'   => 'o',
			'P'   => 'p',
			'Q'   => 'q',
			'R'   => 'r',
			'S'   => 's',
			'T'   => 't',
			'U'   => 'u',
			'V'   => 'v',
			'W'   => 'w',
			'X'   => 'x',
			'Y'   => 'y',
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
		return array('a', 'e', 'i', 'o', 'u');
	}
	/**
	 * This function returns the consonants in this language.
	 * This function exists, so the serialized format is fairly small.
	 * @internal
	 * @return string
	 */
	protected function consonants() {
		return array(
			'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n',
			'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
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
	 * This function returns the definite article for a word.
	 * This function exists, so the serialized format is fairly small.
	 * @param string $word
	 * @return string
	 */
	public function getDefiniteArticle($word) {
		return "The";
	}
	/**
	 * This function returns the indefinite article for a word.
	 * This function exists, so the serialized format is fairly small.
	 * @param string $word
	 * @return string
	 */
	public function getIndefiniteArticle($word) {
		$first = $this->getFirstLetter($word);
		if ($this->isVowel($first)) {
			return "an";
		} else if ($this->isConsonant($first)) {
			return "a";
		} else {
			return "a(n)";
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
			      1 => 'one',
			      2 => 'two',
			      3 => 'three',
			      4 => 'four',
			      5 => 'five',
			      6 => 'six',
			      7 => 'seven',
			      8 => 'eight',
			      9 => 'nine',
			     10 => 'ten',
			     11 => 'eleven',
			     12 => 'twelve',
			     13 => 'thirteen',
			     14 => 'fourteen',
			     15 => 'fifteen',
			     16 => 'sixteen',
			     17 => 'seventeen',
			     18 => 'eighteen',
			     19 => 'nineteen',
			     20 => array('standalone' => 'twenty', 'chain' => 'twenty-'),
			     30 => array('standalone' => 'thirty', 'chain' => 'thirty-'),
			     40 => array('standalone' => 'fourty', 'chain' => 'fourty-'),
			     50 => array('standalone' => 'fifty', 'chain' => 'fifty-'),
			     60 => array('standalone' => 'sixty', 'chain' => 'sixty-'),
			     70 => array('standalone' => 'seventy', 'chain' => 'seventy-'),
			     80 => array('standalone' => 'eighty', 'chain' => 'eighty-'),
			     90 => array('standalone' => 'ninety', 'chain' => 'ninety-'),
			    100 => array('standalone' => 'hundred', 'chain' => 'one hundred'),
			   1000 => array('standalone' => 'thousand', 'chain' => 'one thousand'),
			1000000 => array('standalone' => 'million', 'chain' => 'one million'),
		);
		$string = $this->resolveNumber($number, $numbers, $useSpecialChars);
		$string = strtr($string, array('- ' => '-', '  ' => ' '));
		return trim($string);
	}
	/**
	 * Recursive number resolver for English numbers
	 * @param int $number
	 * @param array $numbers
	 * @param bool $useSpecialChars
	 * @throws I18N_Unknown if the number cannot be resolved.
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
				$found = $this->resolveNumber($prefix, $numbers) . ' ' . $n;
			}
			$i++;
		}
		if (!$found) {
			throw new I18N_Unknown('Can\'t resolve ' . $number);
		} else {
			$found .= ' ' . $this->resolveNumber($remainder, $numbers);
		}
		return $found;
	}
}
