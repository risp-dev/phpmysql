<?php
include __DIR__ . '/includes/header.html.php';
//Funkcija, grąžina kelias reikšmes
$lit_price = 4;
$rates = [
    'uk' => 1.3,
    'by' => 10,
    'jp' => 25
];

function calculate_prices($lit_price, $rates)
{
    $prices = [
        'svaras' => $lit_price * $rates['uk'],
        'rublis' => $lit_price * $rates['by'],
        'jena' => $lit_price * $rates['jp'],
    ];
    return $prices;
}
$global_prices = calculate_prices($lit_price, $rates);
?>
<h3>Funkcija, grąžina kelias reikšmes</h3>
<h3>
    Valiutų kursai: <br><br>
    Svaras: <?= $rates['uk'] ?> <br>
    Rublis: <?= $rates['by'] ?> <br>
    Jena: <?= $rates['jp'] ?> <br><br>
    Šokolado kaina eurais: <?= $lit_price ?> € <br><br>
    Kaina svarais: <?= $global_prices['svaras'] ?> £<br>
    Kaina rubliais: <?= $global_prices['rublis'] ?> ₽<br>
    Kaina jenomis: <?= $global_prices['jena'] ?> ¥<br>

</h3>
<?php 
include __DIR__ . '/includes/footer.html.php';