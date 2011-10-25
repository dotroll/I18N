<?php

class I18N_HungarianTest extends PHPUnit_Framework_TestCase {
	/**
	 * @var I18N_Hungarian
	 */
	protected $object;
	
	function setUp() {
		$this->object = new I18N_Hungarian();
	}
	
	function testTranslateUnknownCharacters() {
		$this->assertEquals("áárvíztűrő tükörfúrógép", $this->object->translateUnknownCharacters("âárvíztűrő tükörfúrógép"));
	}

	function testGetFirstLetter() {
		$this->assertEquals("l", $this->object->getFirstLetter("lászló"));
		$this->assertEquals("á", $this->object->getFirstLetter("ákos"));
		$this->assertEquals("Á", $this->object->getFirstLetter("Ákos"));
		$this->assertEquals("Zs", $this->object->getFirstLetter("Zsuliett"));
	}
	
	function testIsVowel() {
		$this->assertEquals(false, $this->object->isVowel("l"));
		$this->assertEquals(false, $this->object->isVowel("F"));
		$this->assertEquals(true, $this->object->isVowel("a"));
		$this->assertEquals(true, $this->object->isVowel("á"));
		$this->assertEquals(true, $this->object->isVowel("Á"));
	}
	
	function testIsConsonant() {
		$this->assertEquals(true, $this->object->isConsonant("l"));
		$this->assertEquals(true, $this->object->isConsonant("F"));
		$this->assertEquals(false, $this->object->isConsonant("a"));
		$this->assertEquals(false, $this->object->isConsonant("á"));
		$this->assertEquals(false, $this->object->isConsonant("Á"));
	}
	
	function testToUpper() {
		$this->assertEquals("LÁSZLÓ", $this->object->toUpper("lászló"));
		$this->assertEquals("ZSULIETT", $this->object->toUpper("zsuliett"));
		$this->assertEquals("ÁKOS", $this->object->toUpper("ákos"));
		$this->assertEquals("LÁSZLÓ", $this->object->toUpper("László"));
		$this->assertEquals("ZSULIETT", $this->object->toUpper("Zsuliett"));
		$this->assertEquals("ÁKOS", $this->object->toUpper("Ákos"));
	}
	
	function testToLower() {
		$this->assertEquals("lászló", $this->object->toLower("LÁSZLÓ"));
		$this->assertEquals("zsuliett", $this->object->toLower("ZSULIETT"));
		$this->assertEquals("ákos", $this->object->toLower("ÁKOS"));
		$this->assertEquals("lászló", $this->object->toLower("László"));
		$this->assertEquals("zsuliett", $this->object->toLower("Zsuliett"));
		$this->assertEquals("ákos", $this->object->toLower("Ákos"));
	}

	/**
	 * @depends testGetFirstLetter
	 */
	function testUCFirst() {
		$this->assertEquals("László", $this->object->ucfirst("lászló"));
		$this->assertEquals("Zsuliett", $this->object->ucfirst("zsuliett"));
		$this->assertEquals("Ákos", $this->object->ucfirst("ákos"));
		$this->assertEquals("ÁKOS", $this->object->ucfirst("áKOS"));
	}

	/**
	 * @depends testGetFirstLetter
	 */
	function testLCFirst() {
		$this->assertEquals("lászló", $this->object->lcfirst("László"));
		$this->assertEquals("zsuliett", $this->object->lcfirst("Zsuliett"));
		$this->assertEquals("ákos", $this->object->lcfirst("Ákos"));
		$this->assertEquals("áKOS", $this->object->lcfirst("ÁKOS"));
	}
	
	/**
	 * @depends testGetFirstLetter
	 * @depends testToLower
	 * @depends testIsVowel
	 * @depends testIsConsonant
	 */
	function testGetDefiniteArticle() {
		$this->assertEquals("az", $this->object->getDefiniteArticle("alma"));
		$this->assertEquals("az", $this->object->getDefiniteArticle("ákos"));
		$this->assertEquals("az", $this->object->getDefiniteArticle("Ákos"));
		$this->assertEquals("a", $this->object->getDefiniteArticle("ló"));
		$this->assertEquals("a", $this->object->getDefiniteArticle("Ló"));
	}

	function testDecideLexicographicSortOrder() {
		$this->assertEquals(0, $this->object->decideLexicographicSortOrder("abcd", "abcd"));
		$this->assertEquals(0, $this->object->decideLexicographicSortOrder("ábcd", "ábcd"));
		$this->assertEquals(-1, $this->object->decideLexicographicSortOrder("ábcd", "ábcde"));
		$this->assertEquals(1, $this->object->decideLexicographicSortOrder("ábcde", "ábcd"));
		$this->assertEquals(-1, $this->object->decideLexicographicSortOrder("abcde", "ábcde"));
		$this->assertEquals(-1, $this->object->decideLexicographicSortOrder("lábos", "lzuk"));
		$this->assertEquals(1, $this->object->decideLexicographicSortOrder("lyuk", "lzuk"));
	}

	function testWriteIntAsText() {
		$this->assertEquals('négyszázhatvanötmillió-százhuszonháromezer-hétszáznyolcvankilenc', $this->object->writeIntAsText(465123789));
		$this->assertEquals('ötszáz', $this->object->writeIntAsText(500));
		$this->assertEquals('ezerötszáz', $this->object->writeIntAsText(1500));
		$this->assertEquals('kétezer-ötszáz', $this->object->writeIntAsText(2500));
		$this->assertEquals('tízmillió-kilencvenhat', $this->object->writeIntAsText(10000096));
	}
}
