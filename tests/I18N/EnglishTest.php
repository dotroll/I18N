<?php

/**
 * This class tests the functionality of I18N_English
 * @author Janos Pasztor <pasztor.janos@doclerweb.hu>
 * @copyright DotRoll Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
class I18N_EnglishTest extends PHPUnit_Framework_TestCase{
	/**
	 * @var I18N_English
	 */
	protected $object;
	
	function setUp() {
		$this->object = new I18N_English();
	}
	
	function testTranslateUnknownCharacters() {
		$this->assertEquals("arvizturo tukorfurogep", $this->object->translateUnknownCharacters("árvíztűrő tükörfúrógép"));
	}

	function testGetFirstLetter() {
		$this->assertEquals("j", $this->object->getFirstLetter("john"));
		$this->assertEquals("J", $this->object->getFirstLetter("John"));
	}
	
	function testIsVowel() {
		$this->assertEquals(false, $this->object->isVowel("l"));
		$this->assertEquals(false, $this->object->isVowel("F"));
		$this->assertEquals(true, $this->object->isVowel("a"));
		$this->assertEquals(true, $this->object->isVowel("A"));
	}
	
	function testIsConsonant() {
		$this->assertEquals(true, $this->object->isConsonant("l"));
		$this->assertEquals(true, $this->object->isConsonant("F"));
		$this->assertEquals(false, $this->object->isConsonant("a"));
		$this->assertEquals(false, $this->object->isConsonant("A"));
	}
	
	function testToUpper() {
		$this->assertEquals("JOHN", $this->object->toUpper("john"));
	}
	
	function testToLower() {
		$this->assertEquals("john", $this->object->toLower("John"));
		$this->assertEquals("john", $this->object->toLower("JOHN"));
	}

	/**
	 * @depends testGetFirstLetter
	 */
	function testUCFirst() {
		$this->assertEquals("John", $this->object->ucfirst("john"));
		$this->assertEquals("JOHN", $this->object->ucfirst("jOHN"));
	}

	/**
	 * @depends testGetFirstLetter
	 */
	function testLCFirst() {
		$this->assertEquals("john", $this->object->lcfirst("John"));
		$this->assertEquals("jOHN", $this->object->lcfirst("JOHN"));
	}
	
	/**
	 * @depends testGetFirstLetter
	 * @depends testToLower
	 * @depends testIsVowel
	 * @depends testIsConsonant
	 */
	function testGetIndefiniteArticle() {
		$this->assertEquals("an", $this->object->getIndefiniteArticle("apple"));
		$this->assertEquals("an", $this->object->getIndefiniteArticle("Apple"));
		$this->assertEquals("a(n)", $this->object->getIndefiniteArticle("Ákos"));
		$this->assertEquals("a", $this->object->getIndefiniteArticle("john"));
		$this->assertEquals("a", $this->object->getIndefiniteArticle("John"));
	}

	function testWriteIntAsText() {
		$this->assertEquals('four hundred sixty-five million one hundred twenty-three thousand seven hundred eighty-nine', $this->object->writeIntAsText(465123789));
		$this->assertEquals('five hundred', $this->object->writeIntAsText(500));
		$this->assertEquals('one thousand five hundred', $this->object->writeIntAsText(1500));
		$this->assertEquals('two thousand five hundred', $this->object->writeIntAsText(2500));
		$this->assertEquals('ten million ninety-six', $this->object->writeIntAsText(10000096));
	}
}
