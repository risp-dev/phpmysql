<?php
include __DIR__ . '/includes/header.html.php';
$text = 'Home sweet home';
$textTwo = '/images/upload/';
?>

<table>
    <tr>
    <td><h3>Table for text:<br> <?= $text ?></h3></td>
</tr>
<tr>
    <td>Lowercase: <?= strtolower($text) ?></td>
</tr>
<tr>
    <td>Uppercase: <?= strtoupper($text) ?></td>
</tr>
<tr>
    <td>Uppercase first letter: <?= ucwords($text) ?></td>
</tr>
<tr>
<tr>
    <td>Character count: <?= strlen($text) ?></td>
</tr>
<tr>
    <td>Word count: <?= str_word_count($text) ?></td>
</tr>
    <td>First match (case-sensitive): <?= strpos($text, 'ho') ?></td>
</tr>
<tr>
    <td>First match (not case-sensitive): <?= stripos($text, 'me', 6) ?></td>
</tr>
<tr>
    <td>Last match (case-sensitive): <?= strrpos($text, 'Ho') ?></td>
</tr>
<tr>
    <td>Last match (not case-sensitive): <?= stripos($text, 'Ho') ?></td>
</tr>
<tr>
    <td>Text after first match (case-sensitive): <?= strstr($text, 'ho') ?></td>
</tr>
<tr>
    <td>Text after first match (not case-sensitive): <?= stristr($text, 'ho') ?></td>
</tr>
<tr>
    <td>Text between two positions: <?= substr($text, 5, 5) ?></td>
</tr>
</table>
<br>
<table>
    <tr>
        <td><h3>Table for textTwo:<br> <?= $textTwo ?></h3></td>
    </tr>
    <tr>
        <td>Remove '/' from both ends: <?= trim($textTwo, '/') ?></td>
    </tr>
    <tr>
        <td>Remove '/' from the left: <?= ltrim($textTwo, '/') ?></td>
    </tr>
    <tr>
        <td>Remove '/' from the right: <?= rtrim($textTwo, '/') ?></td>
    </tr>
    <tr>
        <td>Replace 'images' with 'img': <?= str_replace('images', 'img', $textTwo) ?></td>
    </tr>
    <tr>
        <td>Replace 'IMAGES' with 'img' (case insensitive): <?= str_ireplace('IMAGES', 'img', $textTwo) ?></td>
    </tr>
    <tr>
        <td>Repeat the string 3 times: <?= str_repeat($textTwo . ' - ', 3) ?></td>
    </tr>
</table>
<?php 
include __DIR__ . '/includes/footer.html.php';
