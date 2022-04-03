<?php
$name =$_POST["name"];
$email =$_POST["email"];
$subject =$_POST["subject"];
$Textarea =$_POST["message"];
mail('mohammadriazuddin3@gmail.com','Client',"Name: $name Email: $email Message: $Textarea");






?>