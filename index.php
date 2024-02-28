<?php
$late_drink_gr = [
'kava' => 300,
'cukrus' => 20,
'pienas' => 100
];

$price = 2.99;
$products = ['Irisas' => 2.99, 'Karvutė' => 1.99, 'Pergalė' => 3.40,];

include __DIR__ . '/includes/header.html.php';

?>
<h1>array</h1>
<table>
  <tr>
    <th>Produktas</th>
    <th>Kiekis</th>
  </tr>
  <tr>
    <td>Kava:</td>
    <td><?= $late_drink_gr['kava']; ?> ml</td>
  </tr>
  <tr>
    <td>Cukrus:</td>
    <td><?= $late_drink_gr['cukrus']; ?> gr</td>
  </tr>
  <tr>
    <td>Pienas:</td>
    <td><?= $late_drink_gr['pienas']; ?> ml</td>
  </tr>
</table>
<br>
<h1>for</h1>
<table>
    <tr>
        <th>Puodelių kiekis</th>
        <th>Kaina</th>
    </tr>
    <?php
  for($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    echo '<td>' . $i . '</td>';
    echo '<td>' . ($i * $price) . '</td>';
    echo '</tr>';
  }
  ?>
</table>
<br>
<h1>foreach</h1>
<table>
    <tr>
    <th>Saldumynas</th>
    <th>Kaina</th>
</tr>
<?php foreach($products as $item => $price) { 
echo '<tr>';
echo '<td>' . $item . '</td>';
echo '<td>' . $price . '</td>';
echo '</tr>';
 } 
 ?>
</table>

<?php 

include __DIR__ . '/includes/footer.html.php';