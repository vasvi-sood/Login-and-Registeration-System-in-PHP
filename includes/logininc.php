<?php

if(isset($_POST['submit']))
{
    require ('database.php');
   //check if all fields were non empty
  $name=$_POST["name"];
  $pass=$_POST["password"];

   if((empty($name) || empty($pass)))
   {
     

    header("Location:../login.php?error=fieldsempty&username=$name");
    exit();
   }

//check if the username exists
else 
{
    echo 'HERE';
$sql="select * from users where name = ? ";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql))
{
    header("Location:../login.php?error=sqlerror");
    exit();
}

mysqli_stmt_bind_param($stmt,"s",$name);
mysqli_stmt_execute($stmt);
$result= mysqli_stmt_get_result($stmt);
$rowcount=mysqli_num_rows($result);
if($rowcount===0)
{
    header("location:../login.php?error=nosuchusernamefound");
    exit();
}
else{
    
    
    while($row=mysqli_fetch_assoc($result))
    {
        $hpass=$row['password'];
        $verify=password_verify($pass,$hpass);
        if($verify==false)
        {
        header("Location:../login.php?error=passwordsdonotmatch&username=$name");
        exit();
        }
        else if($verify==true){
           session_start();
           $_SESSION['id']=$row['id'];
           $_SESSION['name']=$row['name'];
           header("location:../index.php?success=loggedin");
        exit();
        }
        else{
            header("Location:../login.php?error=passwordsdonotmatch&username=$name");
            exit();    
        }

    }
}


}

}
else
{
    header("location:../index.php?error=accessdenied");
    exit();
}

?>