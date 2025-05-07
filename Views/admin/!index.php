<?php
$role_id_admin = 1;

session_start();
if(!isset($_SSESION['role_id']))
{
    header("Location: ../login.php");
}
else
{
    if($_SESSION['role_id']==$role_id_admin)
    {
        header("Location ../login.php");
    }
}
?>