<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="https://imagizer.imageshack.com/img923/8363/E5dwHg.png">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-image: url("image/abouttus.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top;


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

        h1 {
            text-align: center;
            font-size: 65px;
            color: #75583c;
            font-family: 'DM Sans', sans-serif;
        }

        .middle {
            background-color: #ffffff;
            width: 55%;
            height: 70vh;
            position: absolute;
            top: 63%;
            left: 50%;
            border: 3px solid #75583c;
            transform: translate(-50%, -50%);
        }

        .middle p {
            margin-top: 50px;
            font-size: 1em;
            padding-left: 70px;
            padding-right: 70px;
            text-align: justify;
            font-family: 'Poppins', sans-serif;

        }


        @media screen and (max-width: 1312px) {

            .topnav a:not(:first-child),
            .dropdown .dropbtn {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }

            .middle {
                width: 50%;
                height: 75vh;
            }

            .middle p {
                font-size: .8em;
                padding-left: 10px;
                padding-right: 10px;
            }

        }



        @media screen and (max-width: 680px) {
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

            .middle {
                width: 95%;
                height: 72vh;
            }

            .middle p {
                font-size: 0.7em;
                padding-left: 10px;
                padding-right: 10px;
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


    <h1>ABOUT US</h1>
    <div class="middle">
        <p>Welcome to Itadakimasu!<br>
            <br>
            We are a group of students from PUP Sto. Tomas. We created this Food blog, Itadakimasu, to share some of the
            best and easy to cook Filipino breakfast recipes to everyone.<br>
            <br>

            As a group of friends who loves to eat but doesn't have all the time to cook, our goal is to help
            people to cook breakfast using the simplest way possible.


            Our website name, “Itadakimasu!" which translates to "I humbly receive" or "Thank you for the food" is a
            phrase used by Japanese people before meals; similar to the famous, "Bon appétit!". As a group of friends
            who desire to express our appreciation for Japanese culture, we chose to include some of their culinary
            traditions in our dishes. <br>

            <br>


            Since this is an access-free food blog, everyone can share their beloved recipes for other people to try. We
            hope that through this blog, you'll be able to satisfy your cravings, find your comfort food, and to find the joy in cooking.<br>
            <br>


    </div>
</body>


</html>