<?php
/**
 * User: Rowan van der Vleuten
 * Date: 3-4-2020
 * Time: 12:49
 * File: uitschrijving.php
 */
?>
<?php
    include "../../includes/header.php";
?>
<?php
    echo "<fieldset>";
    echo "<table>";
    echo "<pre>";
    echo "<tr><td>Voor en achternaam: </td><td>".$_GET["naam"]."</td></tr>";
    echo "<tr><td>Studentnummer: </td><td>".$_GET["studentNummer"]."</td></tr>";
    echo "<tr><td>Datum van uitschrijving: </td><td>".$_GET["uitschrijfDatum"]."</td></tr>";
    echo "<tr><td>Reden van uitschrijving: </td><td>".$_GET["uitschrijfReden"]."</td></tr>";
    echo "<tr><td>Leerjaar: </td><td>".$_GET["leerjaar"]."</td></tr>";
    echo "<tr><td>Aanmelden bij de succesklas: </td><td>".$_GET["succesKlas"]."</td></tr>";
    echo "<tr><td>Verwijderen gegevens: </td><td>".$_GET["gegevens"]."</td></tr>";
    echo "<tr><td>Reden van uitschrijving: </td><td>".$_GET["redenTypen"]."</td></tr>";
    echo "</pre>";
    echo "</table>";
    echo "</fieldset>";
?>
<?php
    include "../../includes/footer.php";
?>
