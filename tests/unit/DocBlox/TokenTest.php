<?php
/**
* Test class for DocBlox_Token.
*/
class DocBlox_TokenTest extends PHPUnit_Framework_TestCase
{
  /** @var DocBlox_Token */
  protected $fixture = null;

  protected function setUp()
  {
    $this->fixture = new DocBlox_Token(array(T_STATIC, 'static', 100));
  }

  public function testGetName()
  {
    $this->assertEquals('T_STATIC', $this->fixture->getName());
  }

  public function testGetType()
  {
    $this->assertEquals(T_STATIC, $this->fixture->getType());
  }

  public function testGetContent()
  {
    $this->assertEquals('static', $this->fixture->getContent());
  }

  public function testGetLineNumber()
  {
    $this->assertEquals(100, $this->fixture->getLineNumber());
  }
}