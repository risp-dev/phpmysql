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
<h1>Sandėlio informacija</h1>
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
include __DIR__ . '/includes/footer.html.php';