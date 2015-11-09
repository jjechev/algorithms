<?php

Combinations::main();

class Combinations
{

    private static $k = 3;
    private static $n = 5;
    private static $arr;

    public static function main()
    {
        self::comb(0, 0);
    }

    private static function comb($index, $start)
    {
        if ($index >= self::$k)
        {
            self::printArr();
        }
        else
        {
            for ($i = $start; $i < self::$n; $i++)
            {
                self::$arr[$index] = $i;
                self::comb($index + 1, $i);
            }
        }
    }

    private static function printArr()
    {
        echo implode(", ", self::$arr);
        echo "<br />";
    }

}
