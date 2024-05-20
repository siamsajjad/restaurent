<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            font-size: 150%;
        padding:80px 25px;
        margin:100px 500px;
        background-color: rgb(211, 186, 252);
        }
        input {
            font-size: 130%;
            margin: 5px;
        }
        button{
         margin:10px 50px;
         padding:10px 40px;
         font-size: 15px;
        }

        select {
            font-size: 70%;
            border: solid 2px ;
            border-radius: 5px;
            margin: 5px;
        }
        .name{ 
          float:right;
        }
      
        a{
            text-decoration: none;
        }
        </style>
</head>
<body>

<?php include 'hconnection.php'; ?>
<h1 style="text-align: centre"><b><u>REGISTRATION </u></b></h1>

<form action="registration.php" method="post" >
        Name: <input type="text" class="fname" name="firstname" placeholder="Firstname">
              <input type="text" class="name" name="lastname" placeholder="Lastname"><br>
        Number:<input type="int" name="num" placeholder="Mobile Number"><br>
        E-mail: <input type="text" name="email" placeholder="Email"><br>
        Password:<input type="password" name="pass" placeholder="Password"><br>
        <label for="dept">Address: </label>
        <input type="text" name="address" placeholder="Address"><br>
         </select><br>
         <button type="submit" value="submit"  id="sub" name="Submit">SUBMIT</a>
         </button>
         <button type="reset" id="res" >RESET</button><br>
         <b>If already have a account?=> <a href="login.php">login</a></b>
        </form>
        <?php  
         if(isset($_POST['Submit'])){
            $fname =$_POST["firstname"];
            $lname =$_POST["lastname"];
            $num =$_POST["num"];
            $email =$_POST["email"];
            $pass =$_POST["pass"];
            $add =$_POST["address"];
          
        $sql ="INSERT INTO details(firstname,lastname,number,email,password,address)
               VALUES('$fname','$lname','$num','$email','$pass','$add')";
               if(mysqli_query($con ,$sql)){
                   echo "YOUR ACCOUNT CREATED SUCCESSFULLY";
                 }
               else{
                    echo "Failed!!!<br>".mysqli_error($con);
                   }
         }  
            
        
        ?>
</body>
</html>


