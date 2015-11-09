<?php

CharsInLine::main();

class CharsInLine
{

    private static $bord = array();
    private static $size = 10;
    private static $numOfMatches = 4;
    private static $elements = array("*", ".", "o", "+");

    public static function main()
    {
        echo "<pre>";
        self::init();
        echo "bord \n";
        self::printBord(self::$bord);
        self::findElements();
    }

    private static function init()
    {
        $count = count(self::$elements) - 1;
        for ($row = 0; $row < self::$size; $row++)
        {
            for ($col = 0; $col < self::$size; $col++)
            {
                self::$bord[$row][$col] = self::$elements[rand(0, $count)];
            }
        }
    }

    private static function printBord($bord)
    {
        foreach ($bord as $row)
        {
            echo (implode("", $row));
            echo "\n";
        }
        echo "\n";
    }

    private static function findElements($row = 0, $col = 0, $char = null, $dir = null, $count = 0)
    {
        if ($row < 0 || $row >= self::$size || $col < 0 || $col >= self::$size)
            return;

        if ($char)
        {
            if (self::$bord[$row][$col] !== $char)
                return;

            if ($count == self::$numOfMatches - 1)
            {
                self::$bord[$row][$col] = "X";
                echo "Find $char \n";
                self::printBord(self::$bord);
                self::$bord[$row][$col] = $char;
                return;
            }

            self::$bord[$row][$col] = "X";

            if ($dir == 'U')
            {
                self::findElements($row - 1, $col, $char, $dir, $count + 1);
            }
            if ($dir == 'R')
            {
                self::findElements($row, $col + 1, $char, $dir, $count + 1);
            }
            if ($dir == 'D')
            {
                self::findElements($row + 1, $col, $char, $dir, $count + 1);
            }
            if ($dir == 'L')
            {
                self::findElements($row, $col - 1, $char, $dir, $count + 1);
            }

            self::$bord[$row][$col] = $char;
        }
        else
        {
            for ($y = 0; $y < self::$size; $y++)
            {
                for ($x = 0; $x < self::$size; $x++)
                {
                    $char = self::$bord[$y][$x];
                    self::findElements($y, $x, $char, "U", 0);
                    self::findElements($y, $x, $char, "R", 0);
                    self::findElements($y, $x, $char, "D", 0);
                    self::findElements($y, $x, $char, "L", 0);
                }
            }
        }
    }

}
