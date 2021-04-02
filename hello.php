<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student details</h1>
    <form action="" method="POST" name="form">
   Name: <input type="text" name="name"  placeholder="name"><br>
   Age:<input type="text" name="age" placeholder="age"><br>
   Roll Number:<input type="text" name="rollnumber"  placeholder="rollnumber"><br>
   Email:<input type="email" name="email" placeholder="email"><br><br>
   <input type="submit" name="submit">

   </form>
   <?php
   
   $host="localhost";
   $admin="phanindra";
   $password="";
   $db="hello";
   $con =mysqli_connect($host,$admin,$password,$db);
   if(!$con){
       die("unable to connect".mysqli_connect_error());
   }

if(isset($_POST['name']) || isset($_POST['age']) || isset($_POST['rollnumber']) || isset($_POST['email'])){
   $name = $_POST['name'];
   $age = $_POST['age'];
   $rollnumber = $_POST['rollnumber'];
   $email = $_POST['email'];

   if(isset($_POST['submit'])){
   $query="INSERT INTO details VALUES('$name','$age','$rollnumber','$email')";
  $query_run= mysqli_query($con,$query);
   if($query_run){
   echo "Thanks for submitting ".$name;
   }
   else{
       echo "check you network";
   }
   }
}
 


 ?>

</body>
</html>