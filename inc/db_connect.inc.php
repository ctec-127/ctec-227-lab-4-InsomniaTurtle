<?php
$db = new mysqli('localhost', 'root', '', 'imagebumble');
if ($db->connect_error) {
    $error = $db->connect_error;
    echo $error;
}
$db->set_charset('utf8');
