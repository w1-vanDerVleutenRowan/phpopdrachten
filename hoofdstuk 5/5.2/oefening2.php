<?php
/**
 * User: Rowan van der Vleuten
 * Date: 20-3-2020
 * Time: 12:14
 * File: oefening2.php
 */
?>
<?php
    include "../../includes/header.php";
?>
<h1 xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">Uitschrijfformulier KW1C</h1> <hr>
<form action="uitschrijving.php" method="get">
    <fieldset>
        <label>Voor en achternaam </label>
        <input name="naam" type="text">
    </fieldset>
    <fieldset>
        <label>Studentnummer</label>
        <input name="studentNummer" type="text">
    </fieldset>
    <fieldset>
        <label>Datum van uitschrijving</label>
        <input name="uitschrijfDatum" type="date">
    </fieldset>
    <fieldset>
        <label>Reden van uitschrijving</label>
        <select name="uitschrijfReden">
            <option value="Verkeerde keuze">Verkeerde keuze</option>
            <option value="Geen motivatie">Geen motivatie</option>
            <option value="Haalt de opleiding niet">Haalt de opleiding niet</option>
            <option value="Slechte gezinssituatie">Slechte gezinssituatie</option>
        </select>
    </fieldset>
    <fieldset>
        Leerjaar: <br>
        <input name="leerjaar" type="radio" value="1">Leerjaar 1 </input>
        <input name="leerjaar" type="radio" value="2">Leerjaar 2 </input>
        <input name="leerjaar" type="radio" value="3">Leerjaar 3 </input>
    </fieldset>
    <fieldset>
        <input type="checkbox" name="succesKlas">Ik wil me aanmelden bij de succesklas <br> <hr>
        <input type="checkbox" name="gegevens">Verwijder mijn gegevens uit het systeem
    </fieldset>
    <fieldset>
        <label>Geef hieronder de reden van je uitschrijving op</label> <br>
        <input type="textarea" name="redenTypen">
    </fieldset> <br>
    <input type="submit" name="Versturen" value="Versturen">
</form>

<?php
    include "../../includes/footer.php";
?>