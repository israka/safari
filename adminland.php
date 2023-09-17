<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>admin landing</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-image: url('images/kala.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #277582;
        }
        div{
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,50%);
        }
        }
    </style>
</head>
<body>
<header> <nav>
        <ul> <li>
                <a href="admin%20_login.php"><h2><font size="6px">&#8810 </h2></a>
            </li>
            <li>
                <a href="index.html"> <h3><font size="4px"> Home <h3></a>
            </li>

            <li>
                <a href="#"> </a>
            </li>
            <li> <a href="#">  </a>
            </li>
            <li>
                <a href="#">  </a>
            </li>
        </ul>
    </nav>
</header>


<div class="button">
    <a href="exp_del.php" class="btn"> modify review</a>
    <a href="pic_del.php" class="btn">modify pictures</a>
    <a href="adminpicupload.php" class="btn">pic upload</a>
</div>



<style type=text/css>
    nav{
        position: static;

    }
    header {
        background-color: rgb(35, 33, 33);
        position: static;
        left: 0;
        right: 0;
        top: 0px;

        display: flex;
        align-items: center;
        box-shadow: 0 0 25px 0 black;
    }
    header * {
        display: inline;

    }
    header li {
        margin: 5px;

    }
    header li a {
        color: #00ffff;
        text-decoration: none;
    }
</style>

</body>
</html>