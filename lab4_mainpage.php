<?php
session_start();
require_once "inc/delete.inc.php";
require_once "inc/functions.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4; Picture Gallery</title>
    <link rel="stylesheet" href="lab4_style.css">
</head>

<body>
    <div class="main_container">
        <a href="register_page.php">Register me</a>
        <a href="login_page.php" id="login">Log me in</a>
        <a href="" id="logout">Log me out</a>
        <div class="gallery_title">
            <h1>Lab Four; Picture Gallery</h1>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "<pre>";
            print_r($_FILES['file_upload']);
            echo "</pre>";
        }

        $upload_errors = array(
            UPLOAD_ERR_OK => "No errors came up.",
            UPLOAD_ERR_INI_SIZE => "Larger than the upload_max_filesize.",
            UPLOAD_ERR_FORM_SIZE => "Larger than the form MAX_FILE_SIZE.",
            UPLOAD_ERR_PARTIAL => "Partial upload.",
            UPLOAD_ERR_NO_FILE => "No file.",
            UPLOAD_ERR_NO_TMP_DIR => "No temporary directory found.",
            UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
            UPLOAD_ERR_EXTENSION => "File upload was stopped by an extension."
        );

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $tmp_file = $_FILES['file_upload']['tmp_name'];

            $target_file = basename($_FILES['file_upload']['name']);

            $upload_dir = 'uploads';

            if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
                $message = "File uploaded successfully!";
            } else {
                $error = $_FILES['file_upload']['error'];
                $message = $upload_errors[$error];
            }
        }
        ?>

        <div class="gallery_content">

            <?php if (!empty($message)) {
                echo "<p>{$message}</p>";
            } ?>

            <form action="" method="post" enctype="multipart/form-data">
                <h2>Please upload some of your favorite pictures to show everyone!</h2>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
                <input type="file" name="file_upload">
                <input type="submit" name="submit" value="Upload">
            </form>
            <div class="content">
                <?php show_images(); ?>
            </div>
        </div>
    </div>
</body>

</html>