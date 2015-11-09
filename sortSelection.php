<?php

SortSelection::main();

class SortSelection
{

    private static $array = array(46, 60, 56, 81, 16);

    public static function main()
    {
        self::printArray("Input: ", self::$array);
        self::sort();
        self::printArray("Output: ", self::$array);
    }

    private static function sort()
    {
        $lenght = count(self::$array);

        for ($i = 0; $i < $lenght; $i++) {
            for ($j = $i + 1; $j < $lenght; $j++) {
                if (self::$array[$i]> self::$array[$j]){
                    $tmp = self::$array[$i];
                    self::$array[$i] = self::$array[$j];
                    self::$array[$j] = $tmp;
                }
            }
        }
    }

    private static function printArray($text, $array)
    {
        echo $text, implode(", ", $array);
        echo "<br />";
    }

}
