<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  switch ($_GET['action']){
    case "add":
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user (name,email,password) values ('$username','$email','$password')";
    $query = $conn->prepare($sql);
    if($query->execute()){
      header('location:tabel.php?result=berhasil');
    }else{
      echo 'data error -> ' . $que->errorInfo();
    }
    break;

    case "edit":
      $id_user = $_GET['id_user'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $sql = "UPDATE user set name = '$username', email = '$email',password = '$password' where id_user = '$id_user'";
      $query = $conn->prepare($sql);
      if($query->execute()){
        header('location:tabel.php?result=berhasil');
      }else{
        echo 'data error -> ' . $que->errorInfo();
      }
      break;

  }
}else{
  $request = $_GET['action'];
  // echo $request;
  if($request == 'hapus'){
    // jalankan koding Hapus
    $id = $_GET['id'];
    $sql = "DELETE FROM user where id_user = '$id'";
    $query = $conn->prepare($sql);
    if($query->execute()){
      header('location:tabel.php?result=berhasil');
    }else{
      echo 'data error -> ' . $que->errorInfo();
    }
  }
}
