<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="filetoupload" id="filetoupload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["filetoupload"]["name"]);
    $uploadOk = 1;
    $imagefiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
    if($check!== false) {
        echo "File is an image - ".$check["mime"]. ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if(file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if($_FILES["filetoupload"]["size"]>500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype !="png" && $imagefiletype != "gif") {
        echo "Sorry only jpg, jpeg, png & gif files are allowed.";
        $uploadOk = 0;
    }
    if($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)) {
            echo "The file".htmlspecialchars(basename($_FILES["filetoupload"]["name"])). "has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
   ?>
</body>
</html>