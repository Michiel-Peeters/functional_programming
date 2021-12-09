<?php
function printHead()
{
    print file_get_contents("./templates/head.html");
}

function printJumbo($title, $subtitle)
{
    $jumbo = file_get_contents("./templates/jumbo.html");

    $jumbo =str_replace('@@title@@',$title,$jumbo);
    $jumbo =str_replace('@@text@@',$subtitle,$jumbo);
    print $jumbo;

}
?>