<?php
session_start();
include 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <?php echo $bootstrap; ?>
    <title>Form Validation</title>
</head>
<body>
<?php  echo $navbar; ?>

<div class="container border p-5 mt-5 bg-light text-center mx-auto" >
    <h1><?php echo "Welcome " . $_SESSION['username']; ?></h1>
</div>












</body>
<?php echo $bootstrapjs; ?>
</html>
