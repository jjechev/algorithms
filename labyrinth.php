<?php

Labyrinth::main();

class Labyrinth
{

    private static $lab = array(
        array('.', '.', '.', '*', '.', '.', '.',),
        array('*', '*', '.', '*', '.', '*', '.',),
        array('.', '.', '.', '.', '.', '.', '.',),
        array('.', '*', '*', '*', '*', '*', '.',),
        array('.', '.', '.', '.', '.', '.', 'E',),
    );
    private static $numRows = 4;
    private static $numcols = 6;

    public static function main()
    {
        self::head();
        self::printLabyrinth();
        self::findExit(0, 0, 'S');
    }

    private static function head()
    {
        echo "<!doctype html>
                <head>
                    <style>
                        body { 
                            font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,monospace; 
                            font-size: 36px;
                            }
                    </style>
                </head>
            <body>";
    }

    private static function findExit($row, $col, $dir)
    {
        if ($row < 0 || $col < 0 || $row > self::$numRows || $col > self::$numcols)
        {
            return;
        }

        if (self::$lab[$row][$col] == 'E')
        {
            // exit
            self::printLabyrinth();
            return;
        }

        if (self::$lab[$row][$col] != '.')
        {
            // cell already visited
            return;
        }

        self::$lab[$row][$col] = $dir;

        self::findExit($row - 1, $col, 'U');
        self::findExit($row, $col + 1, 'R');
        self::findExit($row + 1, $col, 'D');
        self::findExit($row, $col - 1, 'L');

        self::$lab[$row][$col] = '.';
    }

    private static function printLabyrinth()
    {
        foreach (self::$lab as $row)
        {
            foreach ($row as $col)
            {
                print $col;
            }
            print "<br />";
        }
        print "<br />";
    }

}
