<?php
function printHead()
{
    print file_get_contents("./templates/head.html");
}

function printJumbo($title, $subtitle)
{
    $jumbo = file_get_contents("./templates/jumbo.html");

    $jumbo = str_replace(
        array(
            "@@title@@",
            "@@text@@"
        ),
        array(
            $title,
            $subtitle
        ),
        $jumbo);

    print $jumbo;

}

?>