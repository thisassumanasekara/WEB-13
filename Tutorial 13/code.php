<?php
session_start();
$connection = mysqli_connect("localhost","root","","university");

if(isset($_POST['register'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO students (id,name,password,email) VALUES ($id,$name,$password,$email,$phone)";
    $query_run = mysqli_query($connection,$query);
}
?>