
<?php
error_reporting(0);
$e_id = $_POST['e_id'];

// Database connection
$conn = new mysqli('localhost','root','','safari');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("delete from  experience where e_id= '$e_id'");

    $execval = $stmt->execute();
    echo $execval;

    $stmt->close();
    $conn->close();
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>deleting product</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>


    <style type=text/css>
        nav{
            position: fixed;

        }
        header {
            background-color: rgb(35, 33, 33);
            position: fixed;
            left: 0;
            right: 0;
            top: 0px;
            height: 30px;
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

</head>
<body>


<header> <nav>
        <ul>  <li> <a href="adminland.php"><h2><font size="6px">&#8810 </h2></a>

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


<section> <h1>delete reviews</h1></section>
<section>

<div class="container">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">

            </div>
            <div class="panel-body" >
                <form action="exp_del.php" method="post">
                    <div class="form-group">
                        <label for="e_id">e_id</label>

                        <input
                            type="number"
                            class="form-control"
                            id="e_id"
                            name="e_id"
                        />
                    </div>


                    <button type="submit" name="delete" class="btn btn-default">DELETE</button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>

</section>
<section >
<div class="button" >
    <a href="show%20experience.php" class="btn">Display reviews</a>

</div>
</section>



<style>
table{

    border: 5px white;



}
    section{

        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%,50%);
    }

    form{
        width: 100%;
        height: 50%;
        margin: 20px auto;
        margin-top: 50px

    }
    form div{
        margin-top: 0px;
    }
 section div{
    margin-top:30px ;
}

    body {
        height: 75px;
        width: 150px;
        background-image: url("images/kala.jpg");
    }
    h2 {
        color: white;
        text-align: center;
    }
    h1 {
        color: white;
        text-align: center;
    }

    label
    {
        color: white;
        font-size: 30px;
    }
    input
    {
        font-size: 20px;
        font-family: "Comic Sans MS";
        margin-top: 5px;

    }




</style>
</body>
</html>
