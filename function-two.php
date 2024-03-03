<?php
include __DIR__ . '/includes/header.html.php';
$tax_rate = 0.21;
function calculate_running_total($price, $quantity)
{
    global $tax_rate;
    static $running_total = 0;
    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;

    return $running_total;
}
 ?>
<h1>Sandėlio informacija (function)</h1>
<table>
 <tr><th>Prekė</th><th>Kaina</th><th>Kiekis</th>
 <th>Kaina iš viso<br>Kai PVM: <?= $tax_rate ?></th></tr>
 <tr><td>Mėtinės pastilės:</td><td>$2</td><td>5</td>
 <td>$<?= calculate_running_total(2, 5); ?></td></tr>
 <tr><td>Plombatraukiniai irisai:</td><td>$3</td><td>5</td>
 <td>$<?= calculate_running_total(3, 5); ?></td></tr>
 <tr><td>Krosanai:</td><td>$5</td><td>4</td>
 <td>$<?= calculate_running_total(5, 4); ?></td></tr>
</table>
<?php 
include __DIR__ . '/includes/footer.html.php';