<?php
class logical{
    public $name = '';
    public function __construct($name){
        $this->name= $name;
    }
}
class LogicalTest extends PHPUnit_Framework_TestCase{

    public function testEqauls(){
        $trylogic = new logical('ganesh');
        $newlogic = new logical('sushant');

        $this->assertThat($trylogic,$this->equalto($newlogic));
    }
}