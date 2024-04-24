<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Uploaded Files</h1>
        <?php
            // Display all uploaded files
            $files = scandir("uploads/");
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    echo '<p>' . $file . '</p>';
                }
            }
        ?>
    </div>
</body>
</html>
