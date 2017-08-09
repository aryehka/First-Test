<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

$start=mysqli_connect('localhost','elmer','ayfoinUp9ZRGeYHV','elmer_emails') or die ("Error connecting to MySQL database");
$query="INSER INTO subscribers (first_name, last_name, email)"." VALUES ('$firstname', '$lastname','$email')";

$result=mysqli_query($start,$query) or die ("Error querying DB");

mysqli_close($start);

echo "Form recieved. Thank you ".$firstname.".";
