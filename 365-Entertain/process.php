<?php

$hostname="localhost";
$username ="root";
$password="";
$dbname="tt";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");


if($_SERVER['REQUEST_METHOD']=='POST')
{
   $name=$_POST['username'];
   $mail=$_POST['email-id'];
   $pswd=$_POST['password'];
    if((!empty($name)and !empty($mail) and !empty($pswd)))
    {
       include('index.php');
       
        $result= mysqli_query($dbc,"SELECT * FROM ft WHERE NAME='$name' AND EMAIL ='$mail'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
          $row=mysqli_fetch_assoc($result);
          if($mail==isset($row['EMAIL']) && $name==isset($row['NAME']))
          {
            echo "<script>alert('User already exists,Please signin.')</script>";
          }
        }
        else
        {
         $hashed_password = password_hash($pswd, PASSWORD_DEFAULT);
         mysqli_query($dbc,"INSERT INTO ft(NAME,EMAIL,PASSWORD) VALUES('$name','$mail','$hashed_password')");
        }

    }
    else{
        echo "ERROR"."please fill all the values";
    }

}
else
{
    echo "no form submitted";
}

?>
