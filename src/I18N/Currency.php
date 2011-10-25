<?php

/**
 * This class represents a currency. Currently only USD, EUR and HUF are supported.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_Currency {
	/**
	 * Currency code
	 * @var string
	 */
	protected $code;
	/**
	 * Static data set of currencies.
	 */
	protected static $currencies = array(
		"USD" => array(
			"symbol" => '$',
			"decimals" => 2,
			"front" => true,
		),
		"EUR" => array(
			"symbol" => '€',
			"decimals" => 2,
			"front" => true,
		),
		"HUF" => array(
			"symbol" => 'Ft',
			"decimals" => 0,
			"front" => false,
		),
	);
	/**
	 * Initializes the currency with a code.
	 */
	public function __construct($code) {
		$this->setCode($code);
	}
	/**
	 * Returns an array of all currency objects.
	 * @return array of I18N_Currency
	 */
	public static function getAllCurrencies() {
		$data = array();
		foreach (self::$currencies as $code => $entry) {
			$data[$code] = new I18N_Currency($code);
		}
		return $data;
	}
	/**
	 * Returns the number of decimals for the current currency.
	 * @return int
	 */
	public function getDecimals() {
		return self::$currencies[$this->code]['decimals'];
	}
	/**
	 * Returns the symbol of the currency.
	 * @return string
	 */
	public function getSymbol() {
		return self::$currencies[$this->code]['symbol'];
	}
	/**
	 * Returns, if the symbol should be in front with this currency.
	 * @return bool
	 */
	public function getFront() {
		return self::$currencies[$this->code]['front'];
	}
	/**
	 * Set the currency code.
	 * @param string $code
	 * @throws I18N_Unknown if the currency is unknown.
	 */
	public function setCode($code) {
		if (!array_key_exists($code, self::$currencies)) {
			throw new I18N_Unknown("Unknown currency: " . $code);
		}
		$this->code = $code;
	}
	/**
	 * Returns the currency code.
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}
	/**
	 * Returns the currency code.
	 * @return string
	 */
	function __toString() {
		return $this->code;
	}
}
