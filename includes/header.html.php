<?php 
include __DIR__ . '/settings.php';
?>
<!DOCTYPE html>
<html>
 <head>
 <title><?= SITE_NAME ?></title>
 <link rel="stylesheet" href="css/style.css" />
 </head>
 <body>
 <h1><?= SITE_NAME ?></h1>
 <nav>
    <div class="dropdown">
        <a href="#" class="dropbtn">Array</a>
        <div class="dropdown-content">
            <a href="index.php">Array</a>
            <a href="arrayTwo.php">Array 2</a>
            <a href="arrayThree.php">Array 3</a>
            <a href="arrayFour.php">Array 4</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#" class="dropbtn">Mix</a>
        <div class="dropdown-content">
            <a href="class-example.php">C-1</a>
            <a href="constant.php">Const-1</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#" class="dropbtn">Functions</a>
        <div class="dropdown-content">
            <a href="numbers.php">Numbers</a>
            <a href="symbols.php">Symbols</a>
            <a href="reg-ex-functions.php">Regular expression functions</a>
            <a href="function-one.php">F-1</a>
            <a href="function-two.php">F-2</a>
            <a href="function-three.php">F-3</a>
            <a href="function-four.php">F-4</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#" class="dropbtn">Validate</a>
        <div class="dropdown-content">
            <a href="password-check.php">Password check</a>
            <a href="validate-option.php">Validate option</a>
            
        </div>
    </div>

</nav>
