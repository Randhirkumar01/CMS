<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        body{
            background:pink;
        }
        table{
            background-color:#fff;
        }
    </style>
</head>
</html>

<?php
error_reporting(0);
$conn = new mysqli('localhost','root','','test01');

$query = "SELECT * FROM registration";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;
if($total != 0)
{
    ?>
     <div>
     <center>   <h1><mark>Displaying All Records</mark></h1>
 <table border="1" cellspacing="5" width="90%">
        
        <tr>
            <th width="4%">Id</th>
            <th width="8%">First name</th>
            <th width="8%">Last name</th>
            <th width="15%">Father's name</th>
            <th width="20%">E-mail</th>
            <th width="10%">Password</th>
            <th width="10%">Mobile No.</th>
            <th width="10%">Date of Birth</th>
            <th width="5%">Gender</th>
        </tr>
        
    
    <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['gname']."</td>
            <td>".$result['mail']."</td>
            <td>".$result['pass']."</td>
            <td>".$result['no']."</td>
            <td>".$result['dob']."</td>
            <td>".$result['gender']."</td>
       </tr>";
   }
   }
else
{
    echo "no records found";
}

if($conn)
{
    //echo "connection ok";
}
else
{
    echo "connection fail";
}
?>

</table>
</center>
</div>