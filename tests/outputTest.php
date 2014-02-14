<?php
class outputTest extends PHPUnit_Framework_TestCase{

    public function testExpectFooActualFoo(){
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectbarActualFoo(){
        $this->expectOutputString('bar');
        print 'baz';
    }
}