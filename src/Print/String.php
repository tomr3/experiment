<?php
/**
 * Class Print_String
 */
class Print_String {

    /**
     * @param $test
     * @return string
     */
    public function printString($test)
    {
        $a=1;
        for($i=0;$i<10000000;$i++)
        {
            $a+=($a*$a)/$a;
        }

        return $test;
    }
}
