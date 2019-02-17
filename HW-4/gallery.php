<?php
$imgDir = @opendir("img-min");
while ($file = readdir($imgDir)) {
  if ($file == "." || $file == "..") continue;
  ?>
  <div class="img">
    <a href="img-max/<?=$file?>" title="<?=$file?>" target="_blank">
      <img src="img-min/<?=$file?>" alt="<?=$file?>"/>
    </a>
  </div>
  <?
}
closedir($imgDir);
