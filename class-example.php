<?php

include __DIR__ . '/classes/Account.php';
include __DIR__ . '/classes/Customer.php';

$accounts = 
[new Account(112332555, 'Checking', -20),
new Account(444111777, 'Savings', 380),];

$customer = new Customer('Jonny', 'English', 'verystongpassword', $accounts);

include __DIR__ . '/includes/header.html.php';
?>

<h1>Name: <b><?= $customer->getFullName() ?></b></h1>
<table>
  <tr>
    <th>Account Number</th>
    <th>Account Type</th>
    <th>Balance</th>
  </tr>
<?php foreach($customer->accounts as $account) { ?>
<tr>
    <td><?= $account->number ?></td>
    <td><?= $account->type ?></td>
    <?php if($account->getBalance() >= 0) { ?>
    <td class="credit">
        <?php } else { ?>
            <td class="overdrawn">
            <?php } ?>
            € <?= $account->getBalance() ?></td>
</tr>
    <?php } ?>
</table>
<?php

include __DIR__ . '/includes/footer.html.php';