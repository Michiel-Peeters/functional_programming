<?php
include "getdata.php";
 printHead()
?>

<body>

<div class="jumbotron text-center">
    <h1>Detail Stad</h1>
</div>

<?php

foreach (getData("select * from images where img_id = " . $_GET["img_id"], "steden") as $detail){
    print "<h1>" . $detail["img_title"] . "</h1>";
    print "<p>filename: " . $detail["img_filename"] . "</p>";
    print "<p>" . $detail["img_width"] . " x " . $detail["img_height"] . " pixels</p>";
    print "<img src=img/" . $detail["img_filename"]. "><br>";
    print "<a href='steden2.php'>Terug naar overzicht</a>";
}
?>


</body>
</html>
