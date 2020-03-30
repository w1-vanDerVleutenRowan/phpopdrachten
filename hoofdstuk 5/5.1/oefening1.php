<?php
/**
 * User: Rowan van der Vleuten
 * Date: 20-3-2020
 * Time: 12:14
 * File: oefening1.php
 */
?>
<?php
    include "../../includes/header.php";
?>
    <form action="form_data.php" method="get">
    <h1>Restara Kees Kroket</h1>
    Visstraat 12 <br>
    5211 DN 's-Hertogenbosch <br>
    073 613 6720 <br>
    info@restariakeeskroket.nl <br> <br>
    <label>Bedrijfsnaamaam: </label> <br>
    <input name="companyName" type="text"> <br> <br>
    <label>Voornaam: </label> <br>
    <input name="firstName" type="text"> <br> <br>
        <label>Achternaam: </label> <br>
        <input name="lastName" type="text"> <br> <br>
        <label>Telefoon: </label> <br>
        <input name="phoneNumber" type="text"> <br> <br>
        <label>E-mail: </label> <br>
        <input name="e-mail" type="text"> <br> <br>
        <label>Bericht: </label> <br>
        <input name="message" type="text"> <br> <br>
    <input type="submit" name="verzend" value="verzend">
</form>
<?php
    include "../../includes/footer.php";
?>