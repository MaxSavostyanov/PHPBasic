<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Task_4.1</title>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
<div class="gallery">
  <?include('gallery.php')?>
  </div>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="uploadfile">
  <input type="submit" value="Загрузить"></form>
</body>
</html>
