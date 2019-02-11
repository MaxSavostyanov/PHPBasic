<?php
header('Content-Type: text/html; charset=utf-8');
// Каталог, в который мы будем принимать файл:
$uploaddirMax = './img-max/';
$uploadfileMax = $uploaddirMax.basename($_FILES['uploadfile']['name']);
$uploaddirMin = './img-min/';
$uploadfileMin = $uploaddirMin.basename($_FILES['uploadfile']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['uploadfile']['tmp_name'], $uploadfileMax))
{
  echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

// Выводим информацию о загруженном файле:
echo "<h3>Информация о загруженном на сервер файле: </h3>
<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>
<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>
<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>
<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";

include('classSimpleImage.php');
$image = new SimpleImage();
$image->load($uploadfileMax);
$image->resizeToHeight(250);
$image->save($uploadfileMin);
?>

<a href="index.php"> >>> Назад <<< </a>
