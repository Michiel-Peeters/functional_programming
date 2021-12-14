<?php
include "getdata.php";
include "html_components.php";
 printHead()
?>

<body>

<?php
printJumbo("stad","");
?>




<?php

foreach (getData("select * from images where img_id = " . $_GET["img_id"], "steden") as $detail) {
    print '<form id="mainform" name="mainform" method="POST" action="save.php">';

    print '<div class="form-group row">';
    print '<label for="id" class="col-sm-2 col-form-label">Id</label>';
    print '<div class="col-sm-10">';
    print '<input type="text" readonly class="form-control-plaintext" id="id" name="id" value="' .
        $detail["img_id"] . '">';
    print '</div>';
    print '</div>';


    print '<div class="form-group row">';
    print '<label for="inputTitle" class="col-sm-2 col-form-label">Title</label>';
    print '<div class="col-sm-10">';
    print ' <input type="text" class="form-control" id="inputTitle" name="inputTitle" value="' .
        $detail["img_title"] . '">';
    print '</div>';
    print '</div>';

    print '<div class="form-group row">';
    print '<label for="inputFileName" class="col-sm-2 col-form-label">Title</label>';
    print '<div class="col-sm-10">';
    print ' <input type="text" class="form-control" id="inputFileName" name="inputFileName" value="' . $detail["img_filename"] . '">';
    print '</div>';
    print '</div>';

    print '<div class="form-group row">';
    print '<label for="inputWidth" class="col-sm-2 col-form-label">Width</label>';
    print '<div class="col-sm-10">';
    print ' <input type="text" class="form-control" id="inputWidth" name="inputWidth" value="' . $detail["img_width"] . '">';
    print '</div>';
    print '</div>';

    print '<div class="form-group row">';
    print '<label for="inputHeight" class="col-sm-2 col-form-label">Height</label>';
    print '<div class="col-sm-10">';
    print ' <input type="text" class="form-control" id="inputHeight" name="inputHeight" value="'
        . $detail["img_height"] . '">';
    print '</div>';
    print '</div>';
    print '<button class="btn btn-primary mb-2">Save</button>';
    print '</form>';
    print "<img src=./img/" . $detail["img_filename"] . " width='800px' height='auto' display='block'>";
    print "<br><a href='steden2.php'>Terug naar overzicht</a>";
}
?>


</body>
</html>
