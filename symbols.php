<?php
include __DIR__ . '/includes/header.html.php';
$text = 'Home sweet home';
?>

<table>
    <tr>
    <td><h3>Tekstas: <?= $text ?></h3></td>
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
<?php 
include __DIR__ . '/includes/footer.html.php';
