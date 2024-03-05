<?php
include __DIR__ .'/includes/header.html.php';

$greetings = ['Labas', 'Hi', 'Aloha', 'Halo', 'Helo'];
$greeting_key =array_rand($greetings);
$greeting=$greetings[$greeting_key];

$bestsellers = ['book', 'flower', 'car'];
$bestseller_count = count($bestsellers);
$bestseller_text = implode(', ', $bestsellers);

$customer = ['firstName' => 'Vardenis', 'lastName' => 'Pavardenis', 'email' => 'mail@mail.com',];

if(array_key_exists('firstName',  $customer)) {
    $greeting .= ' ' . $customer['firstName'];
}
?>
<h1>Greeting function</h1>
<h3><?= $greeting ?>!</h3>
<h3>Our top <?= $bestseller_count ?> items today are <?= $bestseller_text ?>.</h3>
<?php

include __DIR__ . '/includes/footer.html.php';