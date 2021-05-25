<?php

if(isset($_POST['submit']))
{
    require 'database.php';
    $name=$_POST["name"];
    $pass=$_POST["password"];
    $cpass=$_POST["confirmpassword"];
   //check if all fields were selected
if(empty($name)||empty($pass)||empty($cpass))
{
    echo "here";
    header("Location:../register.php?error=emptyfieldes&username=$name");
    // exit();
}
//checks usename has valid characters
else
if(!preg_match("/^[a-zA-Z0-9]*/",$name)){
header("location:../register.php?error=invalidcharacterusedinusername&username=$name");
}
//checks passwords matc
elseif($pass!==$cpass)
{
    header("location:../register.php?error=passwordsdonotmatch&username=$name");
}

else{
//check if usernames match
$sql="SELECT * FROM users  where name = ?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql))
{
    header("Location:../register.php?error=mysqlerror1");
    exit();
}


    mysqli_stmt_bind_param($stmt,"s",$name);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
       $rowcount=mysqli_num_rows($result);
    // $rowcount=mysqli_num_rows($result);
    if($rowcount>=1)
    {
     header("Location:../register.php?error=usernameexists");
     exit();
    }

    //add the data to table
    $sql="insert into users(name,password) value (?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location:../register.php?error=mysqlerror2");
        exit();  
    }
    $hashedpass=PASSWORD_hash($pass,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ss",$name,$hashedpass);
    mysqli_stmt_execute($stmt);
    header("Location:../register.php?success=registered");
 mysqli_stmt_close($stmt);
 mysqli_close($conn);

}
//  $sql="insert into users(name,password) values ('$name','$pass');";
//  $result= mysqli_query($conn,$sql);
//  echo var_dump($result);
//  $sql="select * from users";
// $result=mysqli_query($conn,$sql);
// while($row=mysqli_fetch_assoc($result))
// {
//     echo "<br>". $row['name'] ." ". $row['password'];
// }

}

?>