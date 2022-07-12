<?php
$Nom = $_POST['Nom'];
$email = $_POST['email'];
$password= $_POST['password'];

//connection a la base de donne
 $conn = new mysqli('localhost','root','','emalischool');
 if($conn->connect_error){
 	die('connection Failed :'.$conn->connect_error);
 }else{
 $stmt = $conn->prepare("insert into enregistrement(Nom, email, password)value(?, ?, ?)");
 $stmt->bind_param("sss",$Nom, $email, $password);
 $stmt->execute();
 echo "Enregistrer avec succes",
 $stmt->close();
 $conn->close();
 }

?>