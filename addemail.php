<?php
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];

$start=mysqli_connect('localhost','elmer','ayfoinUp9ZRGeYHV','elmer_emails') or die ("Error connecting to MySQL database");
$query="INSERT INTO subscribers (first_name, last_name, email) VALUES ('$first_name', '$last_name','$email')";

$result=mysqli_query($start,$query) or die ("Error querying DB");

mysqli_close($start);

echo "Form recieved. Thank you ".$first_name.".";
