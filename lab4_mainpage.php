<?php ?>
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
        <div class="gallery_title">
            <h1>Lab Four; Picture Gallery</h1>
        </div>
        <div class="gallery_content">
            <form>
                <h2>Please upload some of your favorite pictures to show everyone!</h2>
                <input type="hidden" name="max_file_size" value="100000000">
                <input type="file" name="upload_file">
                <input type="submit" name="submit" value="upload">
            </form>
        </div>
    </div>
</body>

</html>