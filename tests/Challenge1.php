<?php

require_once(__DIR__.'/../challenge1.php');

use PHPUnit\Framework\TestCase;

class Challenge1 extends TestCase {
	
	public function testReturnFalseWhenSumIsNotTen()
	{
		$this->assertNotEquals(10, QuestionsMarks('aa6?9'));
	}

	public function testReturnTrueWhenSumIsTenAndQuestionMarkIsThree()
	{
		$this->assertTrue(QuestionsMarks('6???4'));
		$this->assertTrue(QuestionsMarks('6???4'));
		$this->assertTrue(QuestionsMarks('acc?7??sss?3rr1??????5'));
	}
}