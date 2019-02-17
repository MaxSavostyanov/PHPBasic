<?php
header('Content-Type: text/html; charset=utf-8');
// Каталог, в который мы будем принимать файл:
$uploaddirMax = './img-max/';
$uploadfileMax = $uploaddirMax . basename($_FILES['uploadfile']['name']);
$uploaddirMin = './img-min/';
$uploadfileMin = $uploaddirMin . basename($_FILES['uploadfile']['name']);
$typeUploadFile = $_FILES['uploadfile']['type'];

function isPicture($typeUploadFile)
{
  return in_array($typeUploadFile, ["image/jpeg", "image/png", "image/gif"]);
}

function isLoaded($uploadfileMax)
{
  return move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfileMax);
}

// Переносим файл из каталога для временного хранения файлов:
if (isPicture($typeUploadFile) && isLoaded($uploadfileMax)) {
  echo "<h3>Файл успешно загружен на сервер</h3>";
} else {
  echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
  exit;
}

include('classSimpleImage.php');
$image = new SimpleImage();
$image->load($uploadfileMax);
$image->resizeToHeight(250);
$image->save($uploadfileMin);
?>

<a href="index.php"> >>> Назад <<< </a>
