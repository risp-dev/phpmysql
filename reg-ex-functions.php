<?php 
$text = 'Using PHP\'s regular expression functions';
$path = '/fake/folder/ff_03';
$match = preg_match('/PHP/', $text);
$path = preg_split('/\//', $path);
$text = preg_replace('/PHP/', '<em>PHP</em>', $text);
include __DIR__ .'/includes/header.html.php';
?>
<table>
    <tr>
        <td><b>Was a match found?</b></td>
    </tr>
    <tr>
        <td><?= ($match === 1) ? 'Yes' : 'No' ?></td>
    </tr>
    <tr>
        <td><b>Parts of a path:</b></td>
    </tr>
    <tr>
        <td><?php foreach($path as $part) { ?>
 <?= $part ?>
<?php } ?></td>
    </tr>
    <tr>
        <td><b>Updated text:</b></td>
    </tr>
    <tr>
        <td><?= $text ?></td>
    </tr>
</table>
<br>

<?php
include __DIR__ .'/includes/footer.html.php';