<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulapp; ?></title>
</head>
<body>
    <h1>Demo Upload File</h1>
    <form action="upload" enctype="multipart/form-data" method="post">
        Pilih file yang akan diupload :
        <input type="file" name="userfile" size="25">
        <br/>
        <input type="submit" value="upload" name="btnsubmit">
    </form>
</body>
</html>