<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="flex-container">

    <style>
body {
    background-color: <?php echo $_POST["achtergrond-kleur"] ?> ;
    color: <?php echo $_POST["tekst-kleur"] ?>;
}
table {
    padding: <?php echo $_POST["padding"] ?>;
    border: <?php echo $_POST["test"] ?> solid black;
}

</style>

<table>
    <tr>
    <th>key</th>
    </tr>

<?php
$info = array("naam", "achternaam", "klas", "favorite music");
$info2 = array("Wouter", "Baas", "0D", "heavy metal");

function maakrij($info){
    "<tr><td>$info</td></tr>";
    return $info;}
    maakrij("naam", "achternaam", "klas", "favorite music");
    foreach($info as $value){
        echo "<tr><td>$value</td></tr>";
    }
    
?>
</table>
<table>
    <tr>
    <th>value</th>
    </tr>
<?php
function maakrij2($info2){
    "<tr><td>$info2</td></tr>";
    return $info2;}
    maakrij2("Wouter", "Baas", "0D", "heavy metal");
foreach($info2 as $value2){
    echo "<tr><td>$value2</td></tr>";
}


?>
    
</table>
    </div>
</div>
</body>

</html>

