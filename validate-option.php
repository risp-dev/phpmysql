<?php
include __DIR__ . '/includes/header.html.php';
$stars = '';
$message = '';
$star_ratings = [1, 2, 3, 4, 5,];
if($_SERVER['REQUEST_METHOD']=='POST') {
    $stars = $_POST['stars'] ?? '';
    $valid = in_array($stars, $star_ratings);
    $message = $valid ? 'Thanks' : 'Select an option:';
    
}
?>

<div class="centered-box-container">
    <div class="centered-box">
        <?= $message ?>
        <form action="validate-option.php" method="post">
            <?php foreach ($star_ratings as $option) { ?>
                <?= $option ?><input type="radio" name="stars" value="<?= $option ?>"
                    <?= ($stars == $option) ? 'checked' : '' ?>>
            <?php } ?>
            <input type="submit" value="Save">
        </form>
    </div>
</div>
</div>

<?php
include __DIR__ . '/includes/footer.html.php';