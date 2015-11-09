<?php

SortCounting::main();

class SortCounting
{

//    private static $array = array(46, 60, 56, 81, 16);
    private static $array = array(7, 2, 0, 3, 8, 0, 12, 7, 6, 7);

    public static function main()
    {
        self::printArray("Input: ", self::$array);
        self::sort();
        self::printArray("Output: ", self::$array);
    }

    private static function sort()
    {
        $count = array();
        foreach (self::$array as $value) {
            $count[$value] = isset($count[$value]) ? $count[$value] + 1 : 1;
        }

        $min = min(self::$array);
        $max = max(self::$array);

        self::$array = array();
        for ($i = $min; $i <= $max; $i++) {
            if (isset($count[$i])) {
                for ($j = 0; $j < $count[$i]; $j++) {
                    self::$array[] = $i;
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
