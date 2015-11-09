<?php

Variations::main();

class Variations
{

    private static $n = 4;
    private static $k = 3;
    private static $arr = array();

    private function __construct()
    {
        
    }

    public static function main()
    {
        self::variations(0);
    }

    private static function variations($index)
    {
        if ($index == self::$k)
        {
            self::printArr();
        }
        else
        {
            for ($i = 0; $i < self::$n; $i++)
            {
                self::$arr[$index] = $i;
                self::variations($index + 1);
            }
        }
    }

    private static function printArr()
    {
        echo (implode(", ", self::$arr));
        echo "<br />";
    }

}
