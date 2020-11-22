<?php
include 'formProcess.php';
$newUser = $_GET['username'];
$newPassword = $_GET['password'];
$_GET['username'] = $newUser;
$_GET['password'] = $newPassword;
$role = "user";
echo "<pre>";
if (isset($_GET['username']) && isset($_GET['password'])) {
    $newArr = ['username' => $newUser, 'password' => $newPassword, 'role' => 'user'];
    array_merge( $newArr, ['username' => $newUser, 'password' => $newPassword, 'role' => $role]);
    print_r($newArr);
} else {
    echo "Error 404";
}

?>