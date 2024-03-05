<?php
include __DIR__ . '/includes/header.html.php';

?>
<h3>Numbers</h3>
<table>
    <tr>
        <td>Round 9876.54321:</td>
        <td><?= round(9876.54321) ?></td>
    </tr>
    <tr>
        <td>Round 9876.54321 to 2 decimals:</td>
        <td><?= round(9876.54321, 2) ?></td>
    </tr>
    <tr>
        <td>Round 1.5 half up:</td>
        <td><?= round(1.5, 0, PHP_ROUND_HALF_UP) ?></td>
    </tr>
    <td>Round 1.5 half down:</td>
        <td><?= round(1.5, 0, PHP_ROUND_HALF_DOWN) ?></td>
    </tr>
    <tr>
        <td>Round 1.24: up:</td>
        <td><?= ceil(1.24) ?></td>
    </tr>
    <tr>
        <td>Round 1.24: down:</td>
        <td><?= floor(1.24) ?></td>
    </tr>
    <tr>
        <td>Random number (0 - 10):</td>
        <td><?= mt_rand(0, 10) ?></td>
    </tr>
    <tr>
        <td>Exponential (5, 4):</td>
        <td><?= pow(5, 4)?></td>
    </tr>
    <tr>
        <td>Square root (36):</td>
        <td><?= sqrt(36) ?></td>
    </tr>
    <tr>
        <td>Is a number 358?:</td>
        <td><?= is_numeric(358) ?></td>
    </tr>
    <tr>
        <td>Format number:</td>
        <td><?= number_format(12345.6789, 1, '', '', ) ?></td>
    </tr>
</table>
<?php
include __DIR__ . '/includes/footer.html.php';