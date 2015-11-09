<?php

$files = scandir(__DIR__);

$ignoreFiles = array(".", "..", "index.php", "nbproject",);


foreach ($files as $file) {

    if (in_array($file, $ignoreFiles)) {
        continue;
    }

    echo '<a href= "' . $file . '">' . $file . "</a><br />";
}