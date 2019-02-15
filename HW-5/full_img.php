<?php
include "config.php";
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `images` WHERE `id` = " . $id;
$result = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $data['name'] ?></title>
</head>
<body>
<img src="img-max/<?= $data['path'] ?>" alt="<?= $data['path'] ?>">
<p>Просмотры: <span><?= $data['click_count'] ?></span></p>
<a href="index.php"><= НАЗАД</a>
</body>
</html>
