<?php
include __DIR__ . '/includes/header.html.php';
function calculate_total($price, $quantity)
{
    $cost = $price * $quantity;
    $tax = $cost * (20/100);
    $total = $cost - $tax;
    return $total;
}
 ?>
<h1>Sandėlio informacija (function)</h1>
<table>
  <tr>
    <th>Prekė</th>
    <th>Viso:</th>
  </tr>
  <tr>
    <td>Mėtinės pastilės:</td>
    <td><?= calculate_total(2, 5) ?></td>
  </tr>
  <tr>
    <td>Plombatraukiniai irisai:</td>
    <td><?= calculate_total(3, 5) ?></td>
  </tr>
  <tr>
    <td>Krosanai:</td>
    <td><?= calculate_total(5, 4) ?></td>
  </tr>
</table>

<?php
$stock = 15;

function stock_message($stock){
  if($stock >= 10) {
    return 'More than 10 available';
  }if($stock > 0 && $stock < 10){
    return '10 or less available';
  }
  return 'Out of stock';
}

?>
<h3>3 return sąlygoje, pagal prekių kiekį sandėlyje: <?= stock_message($stock) ?></h3>

<?php 
include __DIR__ . '/includes/footer.html.php';