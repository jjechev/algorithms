<?php

SortCounting::main();

class SortCounting
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
            for ($j = 0; $j < $lenght - 1 - $i; $j++) {
                if (self::$array[$j + 1] < self::$array[$j]) {
                    self::swap($j, $j + 1);
                }
            }
        }
    }

    private static function swap($i, $j)
    {
        $tmp = self::$array[$i];
        self::$array[$i] = self::$array[$j];
        self::$array[$j] = $tmp;
    }

    private static function printArray($text, $array)
    {
        echo $text, implode(", ", $array);
        echo "<br />";
    }

}
