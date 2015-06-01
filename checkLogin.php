<?php
    require_once("class/Entry.php");
    require_once("class/User.php");

    $user_login = $_POST['username'];
    $pass_login = sha1($_POST['password']);

    if (!$user_login || !$pass_login) {
        header("Location: login.php?erro=Blank fields!");
    } else {
        $user = new User();
        $user->setFirstName($user_login);
        $user->setUsername($user_login);
        $user->setPassword($pass_login);

        if ($user->getUsername() != "admin" || $user->getPassword() != sha1("admin")) {
            header("Location: login.php?erro=Incorect login! Try again!");
        } else {
            header("Location: menu.php");
        }


    }

?>