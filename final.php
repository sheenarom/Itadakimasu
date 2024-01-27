<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itadakimasu</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="https://imagizer.imageshack.com/img923/8363/E5dwHg.png">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <style>
        body {
           


            margin: 0;
            font-family: Arial;
            background-color: #ffffff;
            background-image: url("image/homebg.png");
            background-size: cover;   background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: top;
            
            background-color: #ffffff;;
            
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
            margin-top: 40px;
            font-size: 5vw;
            font-family: 'DM Sans', sans-serif;
            color: #75583c;
            text-align: center;
        }

        h2 {
            margin-top: 45px;
            font-size: 2rem;
            color: #75583c;
            font-family: 'DM Sans', sans-serif;
            text-align: center;
        }


    


        @media screen and (max-width: 600px) {

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

    
        <h1>ITADAKIMASU</h1>
        <h2>Bringing you the best and simple breakfast recipes and more!</h2>
    

  
</body>

<script>



    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }


</script>




</html>