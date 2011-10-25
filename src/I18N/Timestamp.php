<?php

/**
 * This class represents a timestamp.
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_Timestamp {
	/**
	 * The raw timestamp.
	 * @var int
	 */
	protected $timestamp = 0;
	/**
	 * Set a timestamp.
	 * @param int $timestamp default 0
	 */
	public function __construct($timestamp = 0) {
		$this->setTimestamp($timestamp);
	}
	/**
	 * Set a timestamp.
	 * @param int $timestamp default 0
	 */
	function setTimestamp($timestamp = 0) {
		$this->timestamp = $timestamp;
	}
	/**
	 * Get a timestamp.
	 * @return int
	 */
	function getTimestamp() {
		return $this->timestamp;
	}
}