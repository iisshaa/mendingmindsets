
<?php
include "db_connect.php";
if($conn) 
{
    $username=$_POST['username'];
    $password=$_POST['password'];
   

    if($username == '' || $password == '')
    {
        echo "Incomplete credent9ials";
    }
    else{
        $query="SELECT * FROM table1 WHERE Username='$username' AND Password='".md5($password)."'";
        $exec_query=mysqli_query($conn,$query);
        $s=mysqli_num_rows($exec_query);
        if($s>=1)
        {
            session_start();
            $_SESSION['username']=$username;
            header("Location: dashboard.php");

        }
        else{
            echo "Login failed";
        }
    }
}
?>
</body>
</html>

