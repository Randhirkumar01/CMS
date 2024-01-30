<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gname = $_POST['gname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$no = $_POST['no'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$conn = new mysqli('localhost','root','','test01');


if($conn->connect_error)
{
    echo "$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}
else
{
    $query = $conn->prepare("INSERT into registration(fname, lname, gname, mail, pass, no, dob, gender) values(?,?,?,?,?,?,?,?)");
    $query->bind_param("sssssiis",$fname, $lname, $gname, $mail, $pass, $no, $dob, $gender);
    $execval = $query->execute();
  //  echo $execval;
    echo " <script> alert('Registration successfully...')</script>";
    include("login.html");
    $query->close();
    $conn->close();
}

?>