<?php
include "config.php";
$id = $_POST['id'];
$click_count = "UPDATE `images` SET `click_count`=`click_count`+1 WHERE id=" . $id;
mysqli_query($connect, $click_count);
