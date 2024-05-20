<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>AWESOME KITCHEN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <style>
    li #a4 {
        background-color: rgb(255, 255, 255);
    }

    .dropdown-con #a3 {
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
        background-color: rgb(199, 199, 255);
    }
    .col-lg-8{
        display:flex;
        align-items:center;
        justify-content:space-between;
        padding-top:05px;
        padding-left:1350px;
        padding-right:10px;
    } 
</style>
</head>
<body>
   <div class="container">
    <header>
               <img   class="hello"  src="image/HASIB.jpeg"  alt=""> 
            </div>

        </div>
        <div class="col-lg-8">
            <nav>
            <ul class="main">
            <li><a href="pro.php" id="a1">Home</a></li>
    <li><a href="about.php" id="a2">About</a></li>
    <li><a href="food.php" id="a3">Food</a></li>
    <li><a href="contact.php" id="a4">Contact</a></li>
    <li><a href="info.php" id="a5">Info</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="botton"><img src="image/menu.png" alt=""></a>
        <div class="dropdown-con">
            <a href="pro.php" id="a1">Home</a>
            <a href="about.php" id="a2">About</a>
            <a href="food.php" id="a3">Food</a>
            <a href="contact.php" id="a4">Contact</a>
            <a href="info.php" id="a5">Info</a>
        </div>

    </li>

</ul>
            </nav>

        </div>
        </div>


    </header>
    <MAIN>
        <br><br><br><br>
        <section id="contact">
                
                     <div class="contact-details">
                        <p><iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29222.741510642016!2d90.38177141083986!3d23.7173111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9558aa54931%3A0x43554b763ca7f98e!2z4Kak4Ka-4Kac4Kau4Ka54KayIOCmueCni-Cmn-Cnh-CmsiDgpo_gpqjgp43gpqEg4Kaw4KeH4Ka44KeN4Kaf4KeB4Kaw4KeH4Kao4KeN4Kaf!5e0!3m2!1sen!2sbd!4v1684776142424!5m2!1sen!2sbd"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        <h3>Contact details</h3><br>
                        <div class="tasa">
                            <h5>BROTHERS OF UITS KITCHEN TABLE</h5>
                            <address>
                                <br><h4>Address:</h4>
                                143 Khilgaon Road 
                                DHAKA
                            </address><br>
                        </div>
                        <div>
                            <h4>Email:</h4>
                            <p>brothersofuits@gmail.com</p><br>
                            <h4>Phone:</h4>
                            <p>019********</p><br>
                            <h4>Whatsapp No:</h4>
                            <p>+88019********</p>
                        </div>
                        <div>
                            <br>
                            <h4>
                                Opening Hours:
                            </h4>
                            <p>Tue-Sun: 5pm to 11pm</p><br>
                            <h4>Holidays:</h4> 
                            <p>Monday</p>
                            
                            

                        </div>
                     </div>
        </section>

    </MAIN>
   </div>
</body>
</html>  