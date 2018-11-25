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
 				echo 'data berhasil di masukan';
 			}else{
 				echo 'data error -> ' . $que->errorInfo();
 			}
 	}
 }else{
 	echo 'tidak';
 }