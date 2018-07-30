<?php

require_once(__DIR__.'/../challenge2.php');

use PHPUnit\Framework\TestCase;

class Challenge2 extends TestCase {
	
	public function testVowelsNotFound()
	{
		$this->expectOutputRegex('/not found/');
		echo VowelSquare(["gg","ff"]);
		echo VowelSquare(["22","11"]);
		echo VowelSquare(["ac","ca"]);
	}

	public function testReturnTopMostLeftVowels()
	{
		$this->expectOutputRegex('/1 - 2/');
		echo VowelSquare(["aqrst", "ukaei", "ffooo"]);
		echo VowelSquare(["aabb", "eekk", "aaee"]);
	}
}