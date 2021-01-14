<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <div class="flex-container">  
        <div class="item">  
        <h2> klassenformulier </h2>






  <label for="klassen">Kies een klas:</label>
  <select name="value" id="value">


<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

foreach($klassen as $value){
    echo "<option>$value</option>";

}

?>
    
  </select>










            <div class="button">
            <input type="submit" value="Submit">
            </div>
        </div>
    </div>
</div>

</body>
</html> 