<?php 
session_start();
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 0) {
        header('location:admin.php');
    }elseif ($_SESSION['level'] == 1) {
        header('location:user.php');
    }else{
        header('location:../project');
    }
} else {
    header('location:login.php');
}

?>