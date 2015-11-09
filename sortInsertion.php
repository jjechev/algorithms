<?php

SortInsertion::main();

class SortInsertion
{

    private static $array = array(46, 60, 56, 81, 16);

    public static function main()
    {
        self::printArray("Input: ", self::$array);
        self::sort();
        self::printArray("Output: ",self::$array);
    }

    private static function sort()
    {
        $lenght = count(self::$array);

        for ($i = 0; $i < $lenght; $i++) {
            $index = self::$array[$i];
            $dec = $i;
            for ($dec = $i; $dec > 0 && self::$array[$dec - 1] >= $index; $dec--) {
                self::$array[$dec] = self::$array[$dec - 1];
            }
            self::$array[$dec] = $index;
        }
    }

    private static function printArray($text, $array)
    {
        echo $text, implode (", ", $array);
        echo "<br />";
    }

}
