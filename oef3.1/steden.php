<?php
include "getdata.php";
include "html_components.php";
printHead()
?>

<body>

<?php

/*define and execute query
$sql = "select * from images";
$result = $conn->query($sql);
*/

?>

<?php
printJumbo("mooiste steden van europa","cool");
?>


<div class="container">
    <div class="row">
        <?php
        foreach (getData("select * from images","steden") as $row) {
            print "<div class='col-sm-4'>";
            print "<h3>" . $row["img_title"] . "</h3>";
            print "<p>" . $row["img_width"] . " x " . $row["img_height"];
            print "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
            print "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
            print "<img src=img/" . $row["img_filename"] . " width='300' height='300'>";
            print "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>
