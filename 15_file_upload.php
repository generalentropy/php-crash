<?php



if (isset($_POST['submit'])) {
    $allowed_ext = array('pgn', 'jpg', 'jpeg', 'gif');

    if (!empty($_FILES['upload']['name'])) {

        // print_r($_FILES);


        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];

        $target_dir = "uploads/$file_name";


        // Get file extension

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));



        // Validate file ext.

        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color:green;">File has been successfully uploaded</p>';


            } else {
                $message = '<p style="color:red;">File is too large</p>';
            }

        } else {
            $message = '<p style="color:red;">Invalid file type</p>';
        }

    } else {

        $message = '<p style="color:red;">Please choose a file</p>';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>


<?php echo $message ?? null; ?>

<p style="font-style: italic">Select image to upload</p>
<!-- File upload : enctype="multipart/form-data -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
<input type="file" name="upload">
<input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>