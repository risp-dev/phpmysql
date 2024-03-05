<?php
include __DIR__ . '/includes/header.html.php';
//array that holds order data
$order = [
    'salt', 'sugar', 'peper', 'chicken', 'pork', 'cheese', 'grape', 'lamb',
];
//sorting
sort($order);
//text
$items = implode(', ', $order);

//this will be sorted by key
$lessons = [
    'English' => 'March 5th',
    'Maths' => 'May 10th',
    'Lithuanian' => 'May 15th',
];
ksort($lessons);

?>
<br>
<h3>Sorting an array items</h3>
<h3><?= $items ?></h3>
<br>
<br>
<h3>Sorting an array items by key</h3>
<h3><?php foreach($lessons as $lesson => $date) {?>
    <?= $lesson . ': ' ?><?= $date . '<br>'?>
    <?php } ?>
</h3>
<br>
<?php
include __DIR__ . '/includes/footer.html.php';