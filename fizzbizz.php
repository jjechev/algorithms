<?php

$arr = array("%s", "fizz", "bizz", "fizzbizz");

for ($i = 1; $i <= 100; $i++) {
    printf($arr[($i % 3 === 0) + 2 * ($i % 5 === 0)], $i);
    print "<br />";
}
