<?php
use PHPUnit\Framework\TestCase;
class TennisGameTests extends TestCase
{
	private $tennisGame;

	protected function setUp() : void
	{
		require_once 'TennisGame/TennisGame.php';
		$this->tennisGame = new TennisGame();
	}

	protected function tearDown() : void
	{
		$this->tennisGame = NULL;
	}

	/**
	 * Test to add two numbers
	 */
	public function testNoScoresShouldReturnLoveAll()
	{
		$result = $this->tennisGame->printScore();
		$this->assertSame('Love all', $result);
	}
}
?>