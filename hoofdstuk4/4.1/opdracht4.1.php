<?php
date_default_timezone_set("Europe/Amsterdam");
$uur = date("H ");
echo "De datum en tijd hier in Nederland is: $uur uur ";
?>
<?php
if ($uur <= 5)
{
    echo "Goedennacht";
}
elseif ($uur <= 12)
{
    echo "Goedenochtend";
}
elseif ($uur <= 17)
{
    echo "Goedenmiddag";
}
elseif ($uur <= 24)
{
    echo "Goedenavond";
}