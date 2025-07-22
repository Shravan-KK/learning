<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $myfile = fopen("newfile.txt","w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile,$txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile,$txt);
    fclose($myfile);
    $fobj = fopen("newfile.txt","a") or die("Unable to append");
    $txt  = "Donald Duck\n";
    fwrite($fobj,$txt);
    $txt = "Goofy Goof\n";
    fwrite($fobj,$txt);
    fclose($fobj);
    $file = fopen("newfile.txt", "r");
    echo fread($file, filesize("newfile.txt"));
    fclose($file);
    ?>
</body>
</html>