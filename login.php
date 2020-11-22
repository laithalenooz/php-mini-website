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


<div class="container border p-5 mt-5 bg-light">
    <form action="formProcess.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <input type="submit" name="submit" class="btn btn-dark">
    </form>
</div>












</body>
<?php echo $bootstrapjs; ?>
</html>