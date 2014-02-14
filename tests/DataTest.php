<?php
class DataTest extends PHPUnit_Framework_TestCase{


    public function testAddSingle(){
        $a = 4;
        $b = 2;
        $c = 5;
        $this->assertEquals($c,$a+$b);
    }

    /**
     * @dataProvider provider
     */
    /*public function testAdd($a,$b,$c){
        $this->assertEquals($c,$a+$b);

    }

    public function provider(){
        return array(array(0,0,1),
                    array(0,1,1),
                    array(1,0,1),
                    array(1,1,3),
        );
    }*/
}

?>