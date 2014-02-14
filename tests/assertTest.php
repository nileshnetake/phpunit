<?php
class AssertTest extends PHPUnit_Framework_TestCase{

    public function testFailure(){
        $this->assertArrayHasKey('foo',array('bar','baz'));
    }

    public function testAttributeClass(){
        $this->assertClassHasAttribute('foo','stdClass');
    }

    public function testFailurestatic()
    {
        $this->assertClassHasStaticAttribute('foo', 'stdClass');
    }

    public function testFailureForContains(){
        $this->assertContains(4,array(1,2,3));
    }

    public function testFailureContailsOnly()
    {
        $this->assertContainsOnly('string', array('1', '2', 3));

    }

    public function testFailureObjects()
    {
        $this->assertContainsOnlyInstancesOf('Foo', array(new Foo(), new Bar(), new Foo()));
    }
}