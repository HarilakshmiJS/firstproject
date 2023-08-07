<?php
 //echo "<pre>";
 //print_r($_POST);
 //echo "</pre>";

 $reg = $_POST['reid'];
 $name = $_POST['name'];
 $college = $_POST['college'];
 $dept = $_POST['department'];
 $domain = $_POST['domain'];
 $phone = $_POST['phonenumber'];
 $email = $_POST['email'];
 
 // db connection 
 $server = "localhost";
 $uname = "root";
 $pass = "";
 $dbname = "insertionprog";
 
 $con = new mysqli($server,$uname,$pass,$dbname);
 if ($con->connect_error) {
     echo "connection failed";
 }else{
 
     $sql = "INSERT INTO `insert`(`registerno`, `name`, `college`, `department`, `domain`, `phonenumber`, `mail`) VALUES ('".$reg."','".$name."','".$college."','".$dept."','".$domain."','".$phone."','".$email."')";
     if ($con->query($sql) === True) {
         echo "Insertion Success";
     }
     else{
         echo "Insertion Failed".$con->error;
     }
     // echo "connection success";
 
 }


?>
