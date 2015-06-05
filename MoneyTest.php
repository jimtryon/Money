<?php 

require_once('Dollar.php');

class MoneyTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){}
  
  public function tearDown(){}

  public function testMultiplication() {
    $five = new Dollar(5);
    //$product = $five->times(2);

    $this->assertEquals(new Dollar(10), $five->times(2));
    $this->assertEquals(new Dollar(15), $five->times(3));

    //$product = $five->times(3);
    //$this->assertEquals(new Dollar(15), $product);
  }
  
  public function testFrancMultiplication() {
    $five = new Franc(5);
    
    $this->assertEquals(new Franc(10), $five->times(2));
    $this->assertEquals(new Franc(15), $five->times(3));
  }
  
  //// Testing if $5.00 is equal to another $5.00
  //public function testEquality() {
  //  $five_dollar = new Dollar(5);
  //  $five_dollar2 = new Dollar(5);
  //  $six_dollar = new Dollar(6);
  //  $five_franc = new Franc(5);
  //  $five_franc2 = new Franc(5);
  //  $six_franc = new Franc(6); 
  //  $this->assertTrue($five_dollar->equals($five_dollar2 ) );
  //  $this->assertFalse($five_dollar->equals($six_dollar) );
  //  $this->assertTrue($five_franc->equals($five_franc2) );
  //  $this->assertFalse($five_franc->equals($six_franc) );
  //  $this->assertFalse($five_franc->equals($five_dollar) );    
  //}
}
?>
