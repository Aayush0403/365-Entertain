<?php

$hostname="localhost";
$username ="root";
$password="";
$dbname="tt";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");

if($_SERVER['REQUEST_METHOD']=='POST')
{
   $namel=$_POST['namelog'];
   $pswdl=$_POST['passlog'];
       $p=0;
       $result= mysqli_query($dbc,"SELECT * FROM ft WHERE NAME='$namel'");
       $count=mysqli_num_rows($result);
       if($count>0)
       {
            while($row=mysqli_fetch_assoc($result))
            {
            if(password_verify($pswdl,$row['PASSWORD']))
            {
                include('main.php');
                $p=1;
            } 
            }
            if($p==0){
                echo '<center style=" width:40%;height:120px;margin:auto;" margin:0; padding:0;><h2 style="color:red;margin-top:30px">incorrect credentials</h2><br><a href="index.php"><button style="background-color:darkcyan;color:white;cursor:pointer">Try Again</button></a></center>';
            }
       }

       else
       {
        echo '<center style="width:40%;height:120px;margin:auto;" margin:0; padding:0;><h2 style="color:red;margin-top:30px">incorrect credentials</h2><br><a href="index.php"><button style="background-color:darkcyan;color:white;cursor:pointer">Try Again</button></a></center>';
       }
}
else
{
    echo "wrong credentials";
}



?>