<?php
declare(strict_types = 1);
include __DIR__ . '/includes/header.html.php';

$candy = [
    'Irisas' => ['price' => 2.00, 'stock' => 14],
    'Karvute' => ['price' => 9.50, 'stock' => 9],
    'Karuna' => ['price' => 8.15, 'stock' => 23]
];
$tax = 21;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? 'Taip' : 'Ne';
}
function get_total_value(float $price, int $quantity) {
    return $price * $quantity;
}
function get_tax_due(float $price, int $quantity, int $tax = 0) {
    return($price * $quantity) * ($tax / 100);
}
?>
<h3>3 funkcijos</h3>
<table>
    <tr>
        <th>Saldainis</th>
        <th>Sandėlis</th>
        <th>Užsakymai</th>
        <th>Vertė</th>
        <th>Mokesčiai</th>
    </tr>
    <?php foreach($candy as $product_name => $data) { ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?></td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td><?= get_total_value($data['price'], $data['stock']) ?></td>
            <td><?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
        </tr>
        <?php } ?>
</table>
<?php 
include __DIR__ . '/includes/footer.html.php';