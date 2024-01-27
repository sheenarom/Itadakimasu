<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese Foods</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="https://imagizer.imageshack.com/img923/8363/E5dwHg.png">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-color: #FFEFD0;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 13px 16px;
            text-decoration: none;
            font-size: 17px;
        }


        .topnav .icon {
            display: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .topnav a:hover,
        .dropdown:hover .dropbtn {
            background-color: #555;
            color: white;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;

        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .logo {
            width: 29px;
            height: 25px;
            position: static;
        }

        .gallery {
            width: 100%;
            height: auto;

        }

        .gallerys {

            position: relative;
            left: 260px;
            width: 200px;
            padding: 3px;
            object-fit: cover;
            object-position: center center;

        }



        .desc {
            text-align: center;
            color: #000000;
            padding: 10px;
        }

        .container {
            width: 98%;
            height: auto;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-flow: wrap;
            font-family: 'Kaushan Script', cursive;
        }

        .box {
            width: 20%;
            height: 300px;
            margin: 20px;
            box-sizing: border-box;
            font-size: 20px;
        }


        @media screen and (max-width:1200px) {
            .box {
                width: 40%;
            }
        }

        @media screen and (max-width:600px) {
            .box {
                width: 90%;
            }
        }

        .header h1 {
            margin-left: 60px;
            font-family: 'Kaushan Script', cursive;
            color: rgb(0, 0, 0);
            text-align: center;
            font-size: 70px;
        }

        .header p {
            margin-left: 3 0px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(0, 0, 0);
            font-size: 25px;
            text-align: center;
        }



        .dropdown {
            float: left;
            overflow: hidden;
            right: 20px;
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 1;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .topnav a:hover,
        .dropdown:hover .dropbtn {
            background-color: #555;
            color: white;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 1200px) {

            .topnav a:not(:first-child),
            .dropdown .dropbtn {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }

        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .topnav.responsive .dropdown {
                float: none;
            }

            .topnav.responsive .dropdown-content {
                position: relative;
            }

            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="final.php"><img src="image/logo.png" class="logo"></a>
        <a href="final.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <div class="dropdown">
            <button class="dropbtn">Categories
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="filipino.php">Filipino Breakfast</a>
                <a href="japanese.php">Japanese Breakfast</a>
            </div>
        </div>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="header">
        <h1>Japanese Foods</h1>
        <p>Japanese cuisine is world-famous, but there is so much food to try besides sushi!<br> Whether you’re visiting
            Japan
            or trying to mix things up in your own kitchen, you<br> should get familiar with Japanese cooking. If you’re
            looking to try some
            rich new <br>flavors, Japan is the perfect place to start! <br>
        </p>
    </div>


    <div class="container">
        <div class="box">
            <a href="japfood/ramen.php"><img src="japanese/ramenn.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>RAMEN</b></div>
        </div>

        <div class="box">
            <a href="japfood/curry.php"><img src="japanese/curry.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>JAPANESE CURRY</b></div>
        </div>

        <div class="box">
            <a href="japfood/tonkatsu.php"><img src="japanese/tonkatsu.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>PORK TONKATSU</b></div>
        </div>

        <div class="box">
            <a href="japfood/tamagoyaki.php"><img src="japanese/tamagoyaki.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TAMAGOYAKI</b></div>
        </div>

        <div class="box">
            <a href="japfood/onigiri.php"><img src="japanese/onigiri.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>YAKI ONIGIRI</b></div>
        </div>

        <div class="box">
            <a href="japfood/mochi.php"><img src="japanese/mochi.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>MOCHI</b></div>
        </div>
        
        <div class="box">
            <a href="japfood/omurice.php"><img src="japanese/omurice.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>OMURICE</b></div>
        </div>

        <div class="box">
            <a href="japfood/teriyaki.php"><img src="japanese/teriyaki.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>CHICKEN TERIYAKI</b></div>
        </div>

        <div class="box">
            <a href="japfood/miso.php"><img src="japanese/miso.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>MISO SOUP</b></div>
        </div>

        <div class="box">
            <a href="japfood/oyakodon.php"><img src="japanese/oyakodon.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>OYAKODON </b></div>
        </div>

        <div class="box">
            <a href="japfood/yakimeshi.php"><img src="japanese/yakimeshi.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>YAKIMESHI</b></div>
        </div>

        <div class="box">
            <a href="japfood/sandwich.php"><img src="japanese/sandwich.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>EGG SANDWICH</b></div>
        </div>

        
     


        






</body>

</html>