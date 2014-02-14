<?php
class FileTest extends PHPUnit_Framework_TestCase{

    public function testfailure(){
        $this->assertFileExists('/home/webonise/Projects/php/app2013/phpunit/tests/multipleTest.php');
    }

    public function testInstanceof(){
        $this->assertInstanceOf('Exception',new Exception);
    }

    public function testFailureInternal()
    {
        $this->assertInternalType('string', 42,'Not a appropriate datatype');
    }

    public function testFailureGreaterthan()
    {
        $this->assertGreaterThan(2, 1);
    }

    public function testFailureNull()
    {
        $this->assertNull('foo');
    }

}