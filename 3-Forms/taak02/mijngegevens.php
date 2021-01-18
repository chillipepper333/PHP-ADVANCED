<!DOCTYPE html>
<html>


<body>

<?php
echo "<li>voornaam is ".$_POST["voornaam"];
echo "</li><li> achternaam is ".$_POST["achternaam"];
echo "</li><li> geslacht is ".$_POST["geslacht"];
echo "</li><li> klas is ".$_POST["klas"];
echo "</li><li> leeftijd is ".$_POST["leeftijd"];
echo "</li><li> adres is ".$_POST["adres"];
echo "</li><li> plaatsnaam is ".$_POST["plaatsnaam"];
echo "</li><li> favoriete band is ".$_POST["favoriete-band"]."</li>";

$_POST["kleur"];
?>

<style>
body {
    background-color: <?php echo $_POST["kleur"] ?> ;
}
</style>

</body>

</html>