<?php
include "shared/string_functions.php";
include "shared/connect.php";
?>

<?php
if (isset($_POST["fname"])) {
    $fname = $_POST["fname"];
    $comment = $_POST["comment"];


    $insertquery = "
    INSERT INTO comments(fname, comment)
    VALUES
      ('$fname', '$comment')
  ";
    executeQuery($insertquery);
}



if (isset($_POST["delete"])) {
    $delete = $_POST["delete"];

    $deletequery = "DELETE FROM comments WHERE id=$delete";
    executeQuery($deletequery);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="https://imagizer.imageshack.com/img923/8363/E5dwHg.png">
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background-color: #ffffff;
            background-image: url("image/contactus.png");
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
            padding: 14px 16px;
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


        * {
            box-sizing: border-box;
        }

        .column1 {
            float: right;
            width: 29.33%;
            padding: 50px;
            text-align: center;
            font-size: 20px;
            color: #75583c;
        }

        .column2 {
            float: right;
            width: 21.33%;
            padding: 50px;
            text-align: center;
            font-size: 20px;
            color: #75583c;
        }

        @media (max-width: 767px) {

            .column1,
            .column2 {
                float: none;
                width: 100%;
                padding: 30px;
            }
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }




        .contact {
            text-align: center;
            font-family: 'Segoe UI';
            line-height: 20px;


        }

        .logo {
            width: 29px;
            height: 25px;
            position: static;
        }



        input[type=text],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #816952;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .containers {
            border-radius: 5px;
            padding: 20px;
            font-size: 4vh;
            color: #816952;
            margin-top: 2%;
            display: flex;
            justify-content: center;
        }

        .containers p {
            font-size: 2.3vh;
        }


        .column {
            font-size: 2.5vh;
            text-align: center;
            color: #5D2E13;

        }

        img {
            display: block;
            margin: 0px auto;
        }


        .rows:after {
            content: "";
            display: table;
            clear: both;
            margin: 1px;

        }

        .icons {
            width: 5%;
            height: 5%;
            margin-left: 20px;
            margin-top: 20px;

        }


        .headers {
            margin-top: 40px;
            font-size: 5vw;
            font-family: 'DM Sans', sans-serif;
            color: #75583c;
            text-align: center;

        }

        button {
            padding: 0.8em 1em;
            text-decoration: none;
            justify-content: center;
            cursor: pointer;
            border: none;
            background-color: #333;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
            font-family: inherit;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.02, 0.01, 0.47, 1);
        }

        button:hover {
            animation: sh0 0.5s ease-in-out both;
        }

        @keyframes sh0 {
            0% {
                transform: rotate(0deg) translate3d(0, 0, 0);
            }

            25% {
                transform: rotate(7deg) translate3d(0, 0, 0);
            }

            50% {
                transform: rotate(-7deg) translate3d(0, 0, 0);
            }

            75% {
                transform: rotate(1deg) translate3d(0, 0, 0);
            }

            100% {
                transform: rotate(0deg) translate3d(0, 0, 0);
            }
        }

        button:hover span {
            animation: storm 0.7s ease-in-out both;
            animation-delay: 0.06s;
        }

        button::before,
        button::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: 0;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #fff;
            opacity: 0;
            transition: transform 0.15s cubic-bezier(0.02, 0.01, 0.47, 1), opacity 0.15s cubic-bezier(0.02, 0.01, 0.47, 1);
            z-index: -1;
            transform: translate(100%, -25%) translate3d(0, 0, 0);
        }

        button:hover::before,
        button:hover::after {
            opacity: 0.15;
            transition: transform 0.2s cubic-bezier(0.02, 0.01, 0.47, 1), opacity 0.2s cubic-bezier(0.02, 0.01, 0.47, 1);
        }

        button:hover::before {
            transform: translate3d(50%, 0, 0) scale(0.9);
        }

        button:hover::after {
            transform: translate(50%, 0) scale(1.1);
        }

        .rows {
            text-align: center;
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



    <div class="headers"><b>CONTACT US</b>
    </div>

    <div class="row">
    </div>

    <div class="column">
        <img src="image/emailicon.png" style="width: 90px;" height="90px">
        <h2>Email</h2>
        <p>itadakimasu@gmail.com</p>
    </div>

    <div class="containers">
        <form method="POST">
            <label for="fname"><b>Leave A Comment</b></label><br>
            <p>Have a question? Submit your question or comment below.</p>

            <label for="fname"><b>Name</b></label><br>
            <input type="text" id="fname" name="fname" placeholder="Your full name" style="width: 100%;" required><br>


            <textarea id="comment" name="comment" placeholder="Your message" style="height:180px; width: 100%;"
                required></textarea><br>

            <button name="submit">Submit</button><br><br><br>
        </form>
    </div>



    <?php
    $query = "SELECT * FROM comments";
    $result = executeQuery($query);

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="rows">
            <div class="columns">

                <h2>
                    <?php echo $row["fname"] ?>
                </h2>
                <p>
                    <?php echo $row["comment"] ?>
                </p>

            </div>

            <div class="delete">
                <form method="POST">



                    <button name="delete" value="<?php echo $row['id'] ?>">
                        Delete comment
                    </button>

                </form>
            </div>

        </div>

        <?php
    }
    ?>



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