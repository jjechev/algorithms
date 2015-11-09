<?php

GrayCode::main();

class GrayCode
{

    private static $arr = array();
    private static $n = 4;

    public static function main()
    {
        self::ForwardGray(self::$n -1);
    }

    private static function ForwardGray($k)
    {
        if ($k < 0)
        {
            self::printArr();
        }
        else
        {
            self::$arr[$k] = 0;
            self::ForwardGray($k - 1);
            self::$arr[$k] = 1;
            self::BackwardGray($k - 1);
        }
    }

    private static function BackwardGray($k)
    {
        if ($k < 0)
        {
            self::printArr();
        }
        else
        {
            self::$arr[$k] = 1;
            self::ForwardGray($k - 1);
            self::$arr[$k] = 0;
            self::BackwardGray($k - 1);
        }
    }
    
    private static function printArr()
    {
        echo (implode(", ", self::$arr));
        echo "<br />";
    }

}
