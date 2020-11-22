<?php
    session_start();
    $username['username'] = $_POST;
    $password['password'] = $_POST;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    global $users;
    $users = [
    ['username' => 'Laith',
        'password' => 'laith123',
        'role'     => 'admin',] ,
    ['username' => 'Sadi',
        'password' => 'sadi123',
        'role'     => 'user',] ,
    ['username' => 'Sara',
        'password' => 'sara123',
        'role'     => 'user',] ,
    ['username' => 'Ayham',
        'password' => 'ayham123',
        'role'     => 'user',] ,
    ['username' => 'Alaa',
        'password' => 'alaa123',
        'role'     => 'admin']
];

//$_SESSION =  $users = $GLOBALS = [
//            ['username' => 'Laith',
//            'password' => 'laith123',
//            'role'     => 'admin',] ,
//            ['username' => 'Sadi',
//            'password' => 'sadi123',
//            'role'     => 'user',] ,
//            ['username' => 'Sara',
//            'password' => 'sara123',
//            'role'     => 'user',] ,
//            ['username' => 'Ayham',
//            'password' => 'ayham123',
//            'role'     => 'user',] ,
//            ['username' => 'Alaa',
//            'password' => 'alaa123',
//            'role'     => 'admin']
//    ];
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        foreach ($users as $key => $value) {
            if ($_SESSION['username'] == $users[$key]['username'] && $_SESSION['password'] == $users[$key]['password'] && $users[$key]['role'] == 'admin') {
                header("location: admin.php");
            } elseif ($_SESSION['username'] == $users[$key]['username'] && $_SESSION['password'] == $users[$key]['password'] && $users[$key]['role'] == 'user') {
                header("location: user.php");
            }
        }
    }
?>