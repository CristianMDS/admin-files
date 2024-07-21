<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <h1>Agregar archivos</h1>
    <form action="./exe/agregar_ex.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploadedFile" />
        <input type="submit" name="uploadBtn" value="Upload" />
    </form>
</body>
</html>