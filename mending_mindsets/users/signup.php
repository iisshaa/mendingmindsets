

<?php
include "db_connect.php";
if($conn) 
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $issues=$_POST['issues'];
    $age=$_POST['age'];
    $password=$_POST['password'];
    $conf_password=$_POST['conf_password'];



    if($username == '' ||  $email=='' || $issues=='' || $age=='' || $password == '' || $conf_password == '')
    {
        echo "Incomplete credentials";
        exit;
    }
    else{
        if($password == $conf_password)
        {

            $query="INSERT INTO table1 VALUES(NULL,'$username','$email','$issues','$age','".md5($password)."')";
            $exec_query=mysqli_query($conn,$query);
            if($exec_query==true)
            {
             
                header("Location: login.html");
            }
            else
            {
                echo "Error occurred";
            }
        }
        else{
            echo "Please confirm password";
        }
    }
    }


?>
