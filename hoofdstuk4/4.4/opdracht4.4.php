<?php
/**
 * User: Rowan van der Vleuten
 * Date: 23-3-2020
 * Time: 11:37
 * File: Opdracht4.4.php
 */
?>

<?php
include "../../includes/header.php";

    date_default_timezone_set("Europe/Amsterdam");
    $vandaag = date("");

    echo"Vandaag is ".$vandaag;
    include "../../includes/footer.php";
?>