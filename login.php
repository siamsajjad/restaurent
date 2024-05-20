<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
         background-color:rgb(184, 235, 255);
         margin:100px 500px;
         border-radius:5px;
         padding:80px 25px;
         color:rgb(20, 2, 179);
        }
        body{
            font-size:150%;
            background-color:rgb(184, 235, 255);
        }
        input {
            font-size: 70%;
            color: rgb(0, 0, 0);
            background-color: rgb(217, 225, 255);
            margin: 5px;
        }
        button{
         margin:10px 50px;
         border:solid 5px block;
         border-radius:8px;
         padding:10px 40px;
         color:rgb(0, 0, 0);
         font-size: 15px;
        }
        a{
            color:rgb(17, 124, 128);
            text-decoration: none;
        }
        </style>
</head>
<body>


<h1 style="text-align: center;border-bottom:solid 2px  rgb(43, 144, 226);background-color: rgb(140, 241, 245);"><b><u>LOGIN FOR YOUR DETAILS</u></b></h1>
<form action="aboutdetails.php" method="post">
        E-mail: <input type="text" name="email" placeholder="Email"><br><br>
        Password:<input type="password" name="pass" placeholder="Password"><br><br>
        <b style="color: brown;">If you don't have any account?<br>For create a account click here->>> <a href="registration.php">registration</a></b><br>
         <button type="submit" value="submit"  id="sub" name="Submit">SUBMIT</button>
         <button type="reset" id="res" >RESET</button>
         
        </form>
      

</body>
</html>