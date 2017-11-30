<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<body>-->
<!---->
<!--<form action="upload_file.php" method="post" enctype="multipart/form-data">-->
<!--    <label for="file">Filename:</label>-->
<!--    <input type="file" name="file" id="file" />-->
<!--    <br />-->
<!--    <input type="submit" name="submit" value="Submit" />-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->
<!---->




<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
    <title>Uploading Complete</title>
    <style>
        input{
            width: 100%;
            margin-bottom: 50px;
            padding: 30px;
            background: green
        }
    </style>
</head>
<body>
Select a file to upload: <br />
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input name="upload[]" type="file" multiple="multiple" />
    <br />
    <input type="submit" value="Upload File"  />
</form>

</body>
</html>


