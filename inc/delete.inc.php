<?php

if (isset($_GET['file'])) {
    unlink("uploads/" . $_GET['file']);
}

$dir = "uploads";
if (is_dir($dir)) {
    if ($dir_handle = opendir($dir)) {
        while ($filename = readdir($dir_handle)) {
            if (!is_dir($filename)) {
                $filename = urlencode($filename);
                echo "<div><img src=\"uploads/$filename\" alt=\"File Image\" height=\"200\"></div>";
                echo "a href=\"delete.inc.php?file=$filename\">Delete this image</a>";
            }
        }
        closedir($dir_handle);
    }
}
