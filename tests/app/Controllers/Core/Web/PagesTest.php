<?php

class PagesTest extends PHPUnit_Framework_TestCase
{
	protected $stack;

    protected function setUp()
    {
        $this->stack = new \Controllers\Core\Web\Pages();
    }
	
	public function testRenderReturnsHelloWorld()
	{		
		$expected = "Hello World";
		
		$this->assertEquals($expected, $this->stack->render());
		
	}
	
	public function testReturnTrueReturnsTrue()
	{		
		
		$this->assertTrue($this->stack->returnTrue());
		
	}
	
	public function testReturnArrayReturnsValidArray()
	{		
		
		$this->assertTrue(is_array($this->stack->returnArray()));
		
	}
}

?>