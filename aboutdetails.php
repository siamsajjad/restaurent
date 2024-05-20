<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initialscale=1.0">
  <title>About</title>
</head>
<style>
   li #a4 {
        background-color: rgb(255, 255, 255);
    }

    .dropdown-con #a4 {
        background-color: rgb(111, 110, 187);
        color: rgb(255, 255, 255);
    }


    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: sticky;
        top: 0;
        display: inline-block;
    }

    li {
        float: left;
    }

    li a,
    .botton {
        display: inline-block;
        text-align: center;
        padding: 10px 16px;
        text-decoration: none;
        margin: 2px;
        color: black;
        background-color: rgb(188, 250, 252);
        padding: 2px 10px;
        margin: 2px;
    }

    li a:hover,
    .dropdown:hover .botton {
        background-color: rgb(238, 156, 156);
    }

    .dropdown-con {
        display: none;
        position: absolute;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-con a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-con a:hover {
        background-color: rgb(111, 110, 187);
    }

    .dropdown:hover .dropdown-con {
        display: block;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgb(240, 253, 203);
    }

    @media screen and (max-width: 600px) {

        li {
            float: none;
        }
    }
    th{
      background-color: rgb(175, 100, 245);
      color: cornsilk;
    }
    td{
      background-color: crimson;
      color: rgb(247, 192, 203);
    }
</style>

<body>

  <?php include 'hconnection.php'; 
    $email = $_POST['email'];
    $pass= $_POST['pass'];
   $sql ="SELECT * FROM details WHERE Email = '$email' and 
           Password ='$pass' LIMIT 1";
   $result = mysqli_query($con, $sql); 
   $row = mysqli_fetch_assoc($result);
   if(mysqli_num_rows($result)==1){
       
           include 'pro.php' ;
      
   }
   else {
           echo "Invalid !!!!";
   }
?>

  </table>
</body>

</html>