<?php
include __DIR__ .'/includes/header.html.php';

$order = ['book', 'flower', 'car'];

//changes book, the first item in array
array_unshift($order, 'icecreem');
array_pop($order);
$items = implode(', ', $order);

//next goes here
$lessons = [
    'English' => 'March 5th',
    'Maths' => 'May 10th',
    'Lithuanian' => 'May 15th',
];

//remove first lesson from array (english)
array_shift($lessons);
//ad new lessons to the end of array
$new = [
    'German' => 'July 1th',
    'Latvian' => 'August 10th',
];
$lessons = array_merge($lessons, $new);


?>
<h1>More arrays</h1>
<h3>Order: <?= $items ?></h3>
<br>
<h1>Lessons</h1>
<h3><?php foreach($lessons as $lesson => $date) {?>
<?= $lesson . ' ' ?><?= $date . '<br>'?>
<?php } ?>
</h3>

<?php
include __DIR__ . '/includes/footer.html.php';