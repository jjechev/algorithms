<?php

Bridges::main();

class Bridges
{

    private static $north;
    private static $south;
    private static $maxBridges = array();

    public static function main()
    {
        self::$north = array(2, 5, 3, 3, 3, 1, 8, 2, 6, 7, 6);
        self::$south = array(1, 2, 5, 3, 4, 1, 7, 8, 2, 5, 6);

        self::calcMaxBridges(count(self::$north) - 1, count(self::$south) - 1);

        echo self::$maxBridges[count(self::$north)-1] [count(self::$south)-1];
    }

    private static function calcMaxBridges($x, $y)
    {
        if ($x < 0 || $y < 0) {
            return 0;
        }

        $northLeft = self::calcMaxBridges($x - 1, $y);
        $southLeft = self::calcMaxBridges($x, $y - 1);

        if (self::$north[$x] == self::$south[$y]) {
            self::$maxBridges[$x][$y] = 1 + max($northLeft, $southLeft);
        } else {
            self::$maxBridges[$x][$y] = max($northLeft, $southLeft);
        }

        return self::$maxBridges[$x][$y];
    }

}
