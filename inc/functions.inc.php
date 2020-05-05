<?php
function show_images()
{

    $dir = "uploads";
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename)) {
                    echo "<img src=\"uploads/$filename\" alt=\"File Image\" height=\"200\">";
                }
            }
            closedir($dir_handle);
        }
    }
}
