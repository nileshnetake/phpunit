<?php
class ExceptionErrorTest extends PHPUnit_Framework_TestCase{
    /**
     * @expectedException PHPUnit_Framework_Error
     */

    public function testFailingInclude(){
        include 'test.php';
    }

}