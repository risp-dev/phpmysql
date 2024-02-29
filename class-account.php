<?php
class account {
    public int $number;
    public string $type;
    public float $balance;
    public function deposit(float $amount): float {
        $this->balance+=$amount;
        return $this->balance;
    }
    public function withdraw(float $amount): float {
        $this->balance-=$amount;
        return $this->balance;
    }
}
$account = new Account();
$account->balance=100.00;
?>
<?php 
include __DIR__ . '/includes/header.html.php';
?>
<h3>Kai balansas 100 + 50 depozitas: <?= $account->deposit(50.00) ?></h3>

<?php
include __DIR__ . '/includes/footer.html.php';
