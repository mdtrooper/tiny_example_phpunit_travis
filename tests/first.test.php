<?php
require_once('functions.php');

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Warning;

final class SumTest extends TestCase
{
	public function testOnePlusOne(): void
	{
		$this->assertEquals(2, sum(1, 1));
	}
	
	public function testZeroPlusOne(): void
	{
		$this->assertEquals(1, sum(0, 1));
	}
	
	public function testNegativeOnePlusOne(): void
	{
		$this->assertEquals(0, sum(-1, 1));
	}
	
	
	public function testNegativeOnePlusNegativeOne(): void
	{
		$this->assertEquals(-2, sum(-1, -1));
	}
	
	public function test_WarningException_CharPlusOne(): void
	{
		$this->expectException(Warning::class);
		sum('a', 1);
	}
}
?>