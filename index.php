<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$drinks = [
  "Beer" => 2,
  "Coffee" => 1.5,
  "Paint" => 3,
  "Mojito" => 5
];
$pastries = [
  "Cookie",
  "Donut",
  "Muffin",
  "Bread"
]; ?>


<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php foreach($drinks as $drink => $price):?>
<li><?="${drink}: ${price}€"?></li>
<?php endforeach;?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php for ($i=0; $i < count($pastries) ; $i++):?>
<li><?=$pastries[$i]?></li>
<?php endfor; ?>
</ul>


</body>
</html>