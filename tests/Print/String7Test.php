<?php

/**
 * Class Print_StringTest
 */
class Print_String7Test extends PHPUnit_Framework_TestCase {

    /**
     * @test
     * @dataProvider strings
     */
    public function validWithString($string) {
        $this->assertSame($string, (new Print_String())->printString($string));
    }

    public static function strings() {

        $cases = [];

        for($i=0; $i<10; $i++) {
            $cases[] = ['test' . $i];
        }

        return $cases;
    }
}
 