<?php


function renderTemplate($page, $content = '')
{
    ob_start();
    $fileName = $page . ".php";
    include $fileName;
    return ob_get_clean();
}

//Вам нужно поменять только выражение ниже
//чтобы зарендерить и main и about внутри него
echo renderTemplate('layout', file_get_contents("hello.php"));
