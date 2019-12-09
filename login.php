<?php

include_once 'include/user.php';
include_once 'include/user_session.php';

$userSession= new UserSession();
$user = new User();

if(isset($_SESSION['user'])){

    $user->setUser($userSession->getCurrentUser());
    header("location: admin.php");

}else if(isset($_POST['user']) && isset($_POST['pass'])){
    $userForm = $_POST['user'];
    $passForm = $_POST['pass'];

    if($user->userExists($userForm,$passForm)){

        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        header("location: admin.php");

    }else{
        $errorLogin = "Nombre de usuario y/o contraseña incorreto";
        include_once 'login2.php';
    }
}else{
    include_once 'login2.php';
}
?>