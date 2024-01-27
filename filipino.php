<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filipino Breakfast</title>
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


        .desc {
            text-align: center;
            color: #000000;
            padding: 10px;
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
        <h1>Filipino Breakfast</h1>
        <p>These Filipino breakfast recipes are so filling, they will surely get you pumped up for the day!<br> Try and
            check
            them out. Happy Cooking!</p>
    </div>

    <div class="container">
        <div class="box">
            <a href="filipinofoods/sinangag.php"><img src="filipinobreakfast/sinangag.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>GARLIC FRIED RICE</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/danggit.php"><img src="filipinobreakfast/danggittt.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>DANGGIT SILOG</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/tosilog.php"><img src="filipinobreakfast/tosilog.jpg" class="gallery"
                    style=" height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TOSILOG</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/longanisa.php"><img src="filipinobreakfast/longsilog.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>LONGSILOG</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/cornedbeef.php"><img src="filipinobreakfast/cornedbeef.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>CORNED BEEF</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/scrambled.php"><img src="filipinobreakfast/scrambled.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>SCRAMBLED EGG</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/torta.php"><img src="filipinobreakfast/torta.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TORTANG TALONG</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/champorado.php"><img src="filipinobreakfast/champorado.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>CHAMPORADO</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/lugaw.php"><img src="filipinobreakfast/lugaw.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>LUGAW</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/arroz.php"><img src="filipinobreakfast/arroz.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>ARROZ CALDO</b></div>
        </div>
        
        <div class="box">
            <a href="filipinofoods/tuyo.php"><img src="filipinobreakfast/tuyo.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TUYO W KAMATIS & RICE</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/maruya.php"><img src="filipinobreakfast/maruya.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>MARUYA</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/giniling.php"><img src="filipinobreakfast/giniling.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TORTANG GINILING</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/tuna.php"><img src="filipinobreakfast/tuna.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TORTANG TUNA</b></div>
        </div>

        <div class="box">
            <a href="filipinofoods/sardinas.php"><img src="filipinobreakfast/sardinas.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>GINISANG SARDINAS</b></div>
        </div>

       
        <div class="box">
            <a href="filipinofoods/tinapa.php"><img src="filipinobreakfast/tinapa.jpg" class="gallery"
                    style="height: 290px; border-radius: 15px;"></a>
            <div class="desc"><b>TINAPA FRIED RICE</b></div>
        </div>

    


    </div>






</body>

</html>