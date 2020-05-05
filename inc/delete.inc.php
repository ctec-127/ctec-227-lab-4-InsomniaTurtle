<?php


if ($_SERVER['REQUEST_ME'] == "POST") {
}

if (isset($_GET['file'])) {
    unlink("uploads/" . $_GET['file']);
    header('Location: delete.php');
}


$dir = "uploads";
if (is_dir($dir)) {
    if ($dir_handle = opendir($dir)) {
        while ($filename = readdir($dir_handle)) {
            if (!is_dir($filename)) {
                $filename = urlencode($filename);
                echo "<div>img src=\"uploads/$filename\" alt=\A photo\" height=\500\"></div>";
                echo "<a href=\"\">Delete this picture</a>";
            }
        }
        closedir($dir_handle);
    }
}
if (isset($_GET['file'])) {
    unlink("uploads/" . $_GET['file']);
}
