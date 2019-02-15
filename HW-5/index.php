<?php
include "config.php";
$sql = "SELECT * FROM images ORDER BY click_count DESC";
$result = mysqli_query($connect, $sql);
?>

<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Task_5</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="gallery">
  <?php
  while ($data = mysqli_fetch_assoc($result)):?>
    <div class="img">
      <a href="full_img.php?id=<?= $data['id'] ?>">
        <img src="img-min/<?= $data['name'] ?>" title="<?= $data['name'] ?>" data-id="<?= $data['id'] ?>"/>
      </a>
      <p>Просмотры: <?= $data['click_count'] ?></p>
    </div>
  <? endwhile ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  (function ($) {
    $('.img').on('click', 'a', function () {
      const id = $(this).find('img').data('id');
      $.ajax({
        type: 'POST',
        url: 'click.php',
        data: `id=${id}`
      });
    });
  })(jQuery);
</script>
</body>
</html>
