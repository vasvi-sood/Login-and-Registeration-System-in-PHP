<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  
    include_once 'includes/header.php';
    if(isset($_SESSION['id']))
    {
        $uname=$_SESSION['name'];
   echo "YOU are logged in!! $uname";
    }
    else{
  echo "HOME";
    }
   
    //write a query 
//    $sql ="SELECT * FROM users;";
//    $result= mysqli_query($conn,$sql);
//    echo var_dump($result);
//    $rowcount=mysqli_num_rows($result);
//    echo "<br> $rowcount";
//    $name="name";
//    $password="password";
//    if($rowcount>0)
//    {
//        while($row=mysqli_fetch_assoc($result))
//        echo "<br> <h3>$row[$name]</h3>" . " <h3>$row[$password]</h3>";
//    }

//    else
//   echo "NO item to display";

//   $age = array("Peter"=>5, "Ben"=>7, "Joe"=>3);
// echo "Peter is " . $age['Peter'] . " years old.";


// $sql="SELECT * From users where password like '%1%' OR password like '%a%'";
// $result=mysqli_query($conn,$sql);
// while($row=mysqli_fetch_assoc($result))
// {
//     echo "<BR>";
//  echo $row["name"] . "  ". $row["password"];
 
// }

    ?>
    
  <?php
  include_once "includes/footer.php";
  
  ?>
</body>
</html>