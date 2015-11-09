<?php

Permutation::main();

class Permutation
{

    private static $lenght;

    public static function main()
    {
        $arr = array(1,2,3,4,5);
//        $arr = array("orange","banana","apple");
        self::$lenght = count ($arr);
        self::perm($arr);
    }

    private static function perm( $arr, $k = 0)
    {
        if ($k >= self::$lenght)
        {
            self::printArr($arr);
        }
        else
        {
            self::perm($arr, $k + 1);
            for ($i = $k + 1; $i < self::$lenght; $i++)
            {
                //swap
                $tmp = $arr[$k];
                $arr[$k] = $arr[$i];
                $arr[$i] = $tmp;

                self::perm($arr, $k + 1);

                //swap
                $tmp = $arr[$k];
                $arr[$k] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
    }
    
    private static function printArr($arr)
    {
        echo (implode(", ",$arr));
        echo "<br />";
    }
}
