<?php
require './config/app.php';
if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
    $sql="INSERT INTO newsletter(email) VALUES (:email)";
    $tab=[
        ":email"=>$email
    ];
    $destination="./index.php";
    $apps=new App;
    $apps->inserer($sql,$tab,$destination);
}
?>