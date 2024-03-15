<?php
declare(strict_types =1);
include __DIR__ . '/includes/header.html.php';

$password = '';
$message = '';

function is_password(string $password): bool {
 if(
    mb_strlen($password) >= 5 
    and preg_match('/[A-Z]/', $password)
    and preg_match('/[a-z]/', $password)
    and preg_match('/[0-9]/', $password)
 ) {
    return true;
 }
 return false;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $password = $_POST['password'];
    $valid = is_password($password);
    $message = $valid ? 'Password ir valid.' : 'Password not strong enaugh';
}
?>
 <div class="centered-box-container">
        <div class="centered-box">
            <?= $message ?>
            <form action="password-check.php" method="post">
                Password: <input type="password" name="password">
                <input type="submit" value="Save">
            </form>
        </div>
    </div>
<?php 

include __DIR__ . '/includes/footer.html.php';