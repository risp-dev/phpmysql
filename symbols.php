<?php
include __DIR__ . '/includes/header.html.php';
$text = 'Home sweet home';
?>
<h1>Symbols</h1>
<table>
    <tr>
    <td>Tekxt: <?= $text ?></td>
    <h3>Index 0: 'H'
Index 1: 'o',
Index 2: 'm',
Index 3: 'e',<br>
Index 4: ' ',<br>
Index 5: 's',
Index 6: 'w',
Index 7: 'e',
Index 8: 'e',
Index 9: 't',<br>
Index 10: ' ',<br>
Index 11: 'h',
Index 12: 'o',
Index 13: 'm',
Index 14: 'e',<br></h3>
</tr>
<tr>
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
