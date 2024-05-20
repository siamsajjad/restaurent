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
        background-color: rgb(211, 186, 200);
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

<form action="order.php" method="post" >
        Number:<input type="int" name="num" placeholder="Mobile Number"><br>
        E-mail: <input type="text" name="email" placeholder="Email"><br>
        <label for="dept">Address: </label>
        <input type="text" name="address" placeholder="Address"><br>
         Payment method: <br>
         <input type="checkbox" id="a1" name="a1" value="Bkash">
         <label for="a1">Bkash</label>
         <img src="image/bk.png" alt=""><br>
         <input type="checkbox" id="a2" name="a1" value="Rocket">
         <label for="a2">Rocket</label>
         <img src="image/rk.png" alt=""><br>
         <input type="checkbox" id="a3" name="a1" value="Cash on">
         <label for="a3">Cash on delivery</label><br> 
         <br>
         <button type="submit" value="submit"  id="sub" name="Submit">SUBMIT</a>
         </button>
         <button type="reset" id="res" >RESET</button><br>
         <b>Go To Home Page -> <a href="pro.php">Home</a></b>
        </form>
        <?php  
         if(isset($_POST['Submit'])){
            $num =$_POST["num"];
            $email =$_POST["email"];
            $add =$_POST["address"];
            $pay =$_POST["a1"];

        $sql ="INSERT INTO pay(number,email,address,payment)
               VALUES('$num','$email','$add','$pay')";
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


