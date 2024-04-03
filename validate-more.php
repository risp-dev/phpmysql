<?php
declare (strict_types = 1);
require 'includes/validate.php';
include __DIR__ . '/includes/header.html.php';
$terms = '';
$message = '';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $terms = (isset($_POST['terms']) and $_POST['terms'] == true) ? true : false;
    $message = $terms ? 'Thank you' : 'Please check the box';
}
?>

<div class="centered-box-container">
    <div class="centered-box">
        <?= $message ?>
        <form action="check-box.php" method="post">
            I agree to the terms and conditions: 
            <input type="checkbox" name="terms" value="true"<?= $terms ? 'checked' : '' ?>>
            <input type="submit" value="Save">
        </form>
    </div>
</div>
</div>

<?php
include __DIR__ . '/includes/footer.html.php';