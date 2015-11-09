<?php

Snake::main();

class Snake
{

    private static $n;
    private static $bord = array();

    public function main()
    {
        echo "<pre>";
        self::$n = 4;
        self::InitArr();
        self::printBord();
        
        self::$bord[0][0] = "x";
        self::generateSnake(0, 1);
    }

    public static function generateSnake($row, $col, $step = 0)
    {

        if ($row < 0 || $col < 0 || $row >= self::$n || $col >= self::$n)
        {
            return;
        }

        if (self::$bord[$row][$col] == "x")
        {
            return;
        }



        if ($step == self::$n)
        {
            return;
        }
        
        self::$bord[$row][$col] = "x";

        if ($step == self::$n -1){
            self::printBord();
        }
        
        self::generateSnake($row + 1, $col, $step + 1);
        self::generateSnake($row - 1, $col, $step + 1);
        self::generateSnake($row, $col + 1, $step + 1);
        self::generateSnake($row, $col - 1, $step + 1);

        self::$bord[$row][$col] = ".";
    }

    private function initArr()
    {
        for ($row = 0; $row < self::$n; $row++)
        {
            for ($col = 0; $col < self::$n; $col++)
            {
                self::$bord[$row][$col] = ".";
            }
        }
    }

    private static function printBord()
    {
        for ($row = 0; $row < self::$n; $row++)
        {
            for ($col = 0; $col < self::$n; $col++)
            {
                echo self::$bord[$row][$col];
            }
            echo "\n";
        }
        echo "\n";
        echo "\n";
    }

}
